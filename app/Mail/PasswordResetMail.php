<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PasswordResetMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($sendArray)
    {
        //
        $this->sendArray = $sendArray;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $sendArray = $this->sendArray;
        return $this
            ->from('example@example.com')
            ->subject('【wakuwakuBlog】パスワード再設定フォーム')
            ->text('mail.PasswordReset')
            ->with(['sendArray' => $sendArray]);
    }
}
