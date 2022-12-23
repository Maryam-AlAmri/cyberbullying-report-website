<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use App\Models\victimsReport;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class victimReportSubmitted extends Mailable
{
    use Queueable, SerializesModels;
    public $victimsReport;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(victimsReport $victimsReport)
    {
        //
        $this->victimsReport = $victimsReport;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data['name'] = $this->victimsReport->name;
        return $this->view('victims.emails.ReportSubmitted ', $data);
    }
}
