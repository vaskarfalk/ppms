<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\HtmlString;

class HomeEnquiryForm extends Notification
{
    use Queueable;
    public $data;

    /**
     * Create a new notification instance.
     */
    public function __construct($data)
    {
        //
        $this->data = $data;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        if ($this->data['user_notification'] ?? false) {
            return (new MailMessage)
                ->subject('Thank you for your enquiry')
                ->line(new HtmlString('<img src="https://project-testing.website/website/plymouth-property-maintenance-services/check.gif" alt="Website Logo" style="width: 250px;">'))
                ->greeting('Hello ' . $this->data['name'] . '!')
                ->line('Thank you for reaching out to us. We have received your enquiry and will get back to you shortly.')
                ->action('View Enquiry', url('/'))
                ->line('Thank you for using our application!');
        }

        return (new MailMessage)

            ->subject('New Home Enquiry Form Submission')
            ->line(new HtmlString('<img src="https://project-testing.website/website/plymouth-property-maintenance-services/logo-02.png" alt="Website Logo" style="height: 50px;">'))
            ->greeting('Hello Admin!')
            ->line('You have received a new enquiry from the contact form:')
            ->line(new HtmlString('<strong>Name:  </strong>' . $this->data['name']))
            ->line(new HtmlString('<strong>Email: </strong> ' . $this->data['email']))
            ->line(new HtmlString('<strong>Phone:  </strong>' . $this->data['phone']))
            ->line(new HtmlString('<strong>Services: </strong> ' . $this->data['services']))
            ->line(new HtmlString('<strong>Message:  </strong>' . $this->data['message']));
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
