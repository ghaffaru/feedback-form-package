<?php

namespace Ghaff\Feedback\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class FeedbackMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $message;
    public $subject;
    public $name;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message, $subject, $name)
    {
        //
        $message = $this->message;
        $subject = $this->subject;
        $name = $this->name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->subject)->markdown('feedback::feedback.email')
                    ->with([
                        'message' => $this->message,
                        'name' => $this->name
                        ]);
    }
}
