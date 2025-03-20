<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ContactFormMessage;

class ContactFormMessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $messages = [
        [
            'email' => 'john.doe@example.com',
            'subject' => 'Issue with Login',
            'message' => 'I am unable to log into my account. Can you please assist?',
            'is_read' => false,
        ],
        [
            'email' => 'jane.smith@example.com',
            'subject' => 'Password Reset Request',
            'message' => 'I forgot my password and need help resetting it.',
            'is_read' => false,
        ],
        [
            'email' => 'mark.jones@example.com',
            'subject' => 'Feature Suggestion',
            'message' => 'It would be great if you could add a dark mode to the website.',
            'is_read' => true,
        ],
        [
            'email' => 'lisa.wilson@example.com',
            'subject' => 'Account Deactivation',
            'message' => 'I would like to deactivate my account. Please guide me through the process.',
            'is_read' => false,
        ],
        [
            'email' => 'mike.taylor@example.com',
            'subject' => 'Billing Issue',
            'message' => 'I was charged twice for my subscription. Can you help with a refund?',
            'is_read' => true,
        ],
        [
            'email' => 'emily.davis@example.com',
            'subject' => 'Website Feedback',
            'message' => 'I love your website, but it loads a bit slowly on my phone.',
            'is_read' => false,
        ],
        [
            'email' => 'david.johnson@example.com',
            'subject' => 'Support Needed',
            'message' => 'My app is crashing frequently. Can you help troubleshoot the issue?',
            'is_read' => true,
        ],
        [
            'email' => 'sarah.lee@example.com',
            'subject' => 'Unable to Verify Email',
            'message' => 'I didn\'t receive the email verification link. Can you resend it?',
            'is_read' => false,
        ],
        [
            'email' => 'kevin.miller@example.com',
            'subject' => 'Subscription Inquiry',
            'message' => 'What are the available subscription plans?',
            'is_read' => false,
        ],
        [
            'email' => 'olivia.clark@example.com',
            'subject' => 'Bug Report',
            'message' => 'There is a glitch when trying to upload a profile picture. Can you check?',
            'is_read' => true,
        ],
        [
            'email' => 'noah.roberts@example.com',
            'subject' => 'Login Attempt Blocked',
            'message' => 'My account was temporarily locked due to suspicious login attempts. What should I do next?',
            'is_read' => false,
        ],
        [
            'email' => 'chris.evans@example.com',
            'subject' => 'Update My Information',
            'message' => 'I need to update my email address in my profile. How do I do that?',
            'is_read' => true,
        ],
        [
            'email' => 'ava.williams@example.com',
            'subject' => 'Compliment on Your Service',
            'message' => 'I just wanted to say that your support team is amazing. Thank you!',
            'is_read' => false,
        ],
        [
            'email' => 'ethan.brown@example.com',
            'subject' => 'Request for More Information',
            'message' => 'Can you provide more details about the premium membership benefits?',
            'is_read' => true,
        ],
        [
            'email' => 'mia.white@example.com',
            'subject' => 'Re: Technical Issue',
            'message' => 'Thanks for resolving my issue so quickly. Everything works perfectly now!',
            'is_read' => true,
        ],
    ];

        foreach ($messages as $message) {
            ContactFormMessage::create($message);
        }
    }
}
