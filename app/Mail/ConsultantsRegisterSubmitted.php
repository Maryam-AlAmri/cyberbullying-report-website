<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use App\Models\consultantRegister;



class ConsultantsRegisterSubmitted extends Mailable
{
    use Queueable, SerializesModels;
    public $consultantRegister;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(consultantRegister $consultantRegister)
    {
        //
        $this->consultantRegister = $consultantRegister;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data['drName'] = $this->consultantRegister->drName;
        return $this->view('consultant.emails.consultantRegisterSubmitted', $data);
    }
}
