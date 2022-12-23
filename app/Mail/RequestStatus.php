<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use App\Models\data;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RequestStatus extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(data $data)
    {
        //
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data['HOCD'] = $this->data->HOCD;
        $data['status'] = $this->data->status;
        return $this->view('institution.emails.ApprovedStatue', $data);
    }
}
