<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Mailer extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Notificacion')
            ->view('mail/default')
            ->attach(storage_path('app/public') . '/dummy-protegido.pdf', [
                'as' => 'Cuenta_caja_popular.pdf',
                'mime' => 'application/pdf',
            ]);
    }
}
