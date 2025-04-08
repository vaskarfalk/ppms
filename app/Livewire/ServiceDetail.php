<?php

namespace App\Livewire;

use App\Models\ContactFormSubmission;
use App\Models\Service;
use App\Models\Settings\FeaturesSection;
use App\Models\Settings\PageHeading;
use App\Models\Testimonial;
use App\Notifications\HomeEnquiryForm;
use Illuminate\Support\Facades\Notification;
use Livewire\Component;

class ServiceDetail extends Component
{
    public $fname;
    public $lname;
    public $email;
    public $phone;
    public $message;
    public $featuresSections;
    public $service;
    public $services;
    public $selectedService;
    public $pageHeading;
    public $testimonials;
    public $success = false;
    protected $rules = [
        'fname' => 'required|string|min:3|max:255',
        'lname' => 'required|string|min:3|max:255',
        'email' => 'required|email|max:255|min:3',
        'phone' => 'required|numeric|min:10',
        'selectedService' => 'required',
        'message' => 'required|string|min:5',
    ];





    public function mount($service)
    {
        $this->featuresSections = FeaturesSection::all();
        $this->services = Service::where('is_active', 1)->get();
        $this->service = Service::where('slug', $service)->firstOrFail();
        $this->selectedService = $this->service->title;
        $this->testimonials = Testimonial::where('is_active', 1)->get();
        $this->pageHeading = PageHeading::firstOrFail();
    }


    public function send()
    {
        $this->validate();

        // Send the email notification

        ContactFormSubmission::create([
            'fname' => $this->fname,
            'lname' => $this->lname,
            'email' => $this->email,
            'phone' => $this->phone,
            'services' => $this->selectedService,
            'message' => $this->message,
        ]);

        $data = [
            'name' => $this->fname . ' ' . $this->lname,
            'email' => $this->email,
            'phone' => $this->phone,
            'services' => $this->selectedService,
            'message' => $this->message,
        ];

        // Notification::send(new HomeEnquiryForm($data));
        $adminEmail = 'vaskar.falktechnology@gmail.com';
        Notification::route('mail', $adminEmail)->notify(new HomeEnquiryForm($data));
        Notification::route('mail', $this->email)->notify(new HomeEnquiryForm([
            'user_notification' => true,
            'name' => $this->fname . ' ' . $this->lname,

        ]));
        // Reset the form fields
        // $this->reset();
        $this->reset(['fname', 'lname', 'email', 'phone', 'selectedService', 'message']);
        $this->success = true;
  
        $this->service = Service::where('slug', $this->service->slug)->firstOrFail();
     
    }



    public function render()
    {
        return view('livewire.service-detail');
    }
}
