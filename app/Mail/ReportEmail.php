<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ReportEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The demo object instance.
     *
     * @var Demo
     */
    public $client;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($client)
    {
        $this->client = $client;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('sender@example.com')
            ->view('mails.report')
            ->text('mails.report_plain')
            ->subject('Project Progress Report')
            ->attach($this->client['document']->getRealPath(),
                [
                    'as' => $this->client['document']->getClientOriginalName(),
                    'mime' => $this->client['document']->getClientMimeType(),
                ]);
    }
}