<?php

namespace App\Mail;

use App\Models\CareerApplication;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CareerApplicationSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public CareerApplication $application,
        public string $cvUrl
    ) {}

    public function build()
    {
        return $this
            ->subject('New Career Application: '.$this->application->full_name)
            ->view('emails.careers.submitted', [
                'application' => $this->application,
                'cvUrl' => $this->cvUrl,
            ]);
    }
}
