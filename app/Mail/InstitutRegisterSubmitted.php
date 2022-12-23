<?php

namespace App\Mail;
use App\Models\InstitutonRegister;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InstitutRegisterSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $InstitutonRegister;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(InstitutonRegister $InstitutonRegister)
    {
        //
        $this->InstitutonRegister = $InstitutonRegister;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data['HOCD'] = $this->InstitutonRegister->HOCD;
        return $this->view('institution.emails.InstitutRegisterSubmitted', $data);
    }
}
