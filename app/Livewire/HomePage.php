<?php

namespace App\Livewire;

use App\Models\ContactFormSubmission;
use App\Models\Service;
use App\Models\Settings\FeaturesSection;
use App\Models\Settings\PageHeading;
use App\Models\Testimonial;
use App\Notifications\HomeEnquiryForm;
use Illuminate\Support\Facades\Notification;
use Livewire\Attributes\Title;
use Livewire\Component;


class HomePage extends Component
{

    public $fname;
    public $lname;
    public $email;
    public $phone;
    public $services;
    public $selectedService;
    public $featuresSections;
    public $message;
    public $testimonials;
    public $success = false;
    public $pageHeading;



    protected $rules = [
        'fname' => 'required|string|min:3|max:255',
        'lname' => 'required|string|min:3|max:255',
        'email' => 'required|email|max:255|min:3',
        'phone' => 'required|numeric|min:10',
        'selectedService' => 'required',
        'message' => 'required|string|min:5',
    ];





    protected function messages()
    {
        return [
            'fname.required' => 'The first name is required.',
            'fname.string' => 'The first name must be a valid string.',
            'fname.min' => 'The first name must be at least 3 characters.',
            'fname.max' => 'The first name may not be greater than 255 characters.',

            'lname.required' => 'The last name is required.',
            'lname.string' => 'The last name must be a valid string.',
            'lname.min' => 'The last name must be at least 3 characters.',
            'lname.max' => 'The last name may not be greater than 255 characters.',

            'email.required' => 'The email address is required.',
            'email.email' => 'The email address must be a valid email.',
            'email.min' => 'The email address must be at least 3 characters.',
            'email.max' => 'The email address may not be greater than 255 characters.',

            'phone.required' => 'The phone number is required.',
            'phone.numeric' => 'The phone number must be a valid number.',
            'phone.min' => 'The phone number must be at least 10 digits.',

            'selectedService.required' => 'Please select a service.',

            'message.required' => 'The message is required.',
            'message.string' => 'The message must be a valid string.',
            'message.min' => 'The message must be at least 5 characters.',
        ];
    }


    public function mount()
    {

        $this->services = Service::where('is_active', 1)->get();
        $this->testimonials = Testimonial::where('is_active', 1)->get();
        $this->featuresSections = FeaturesSection::all();
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
    }

    public function render()
    {

        return view('livewire.home-page');
    }
}
