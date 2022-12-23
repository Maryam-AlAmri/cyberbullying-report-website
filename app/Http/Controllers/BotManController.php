<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;

class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        $botman = app('botman');

        $botman->hears('{message}', function ($botman, $message) {

            $q1 = 'What are the punishments for cyberbullying in oman ?';
            $q2 = 'How I can report about cyberbullying ?';
            $q3 = 'What is process of my report ?';            
            $q4 = 'Hotline for reporting cyberbullying in the Sultanate of Oman ?';
            $q5 = 'What is cyber crime?';
            $q6 = 'Is hacking a Cybercrime?';
            $q7 = 'What is Cyberstalking?';
            $q8 = '';
            $q9 = '';
            $q10 = '';
            $q11 = '';
            $q12 = '';
            $q13 = '';


            if (str_contains($q1, $message)) {
                $botman->reply("Electronic extortion:<br>

                Imprisonment for a period of no less than a month and not exceeding 3 years,
                 and a fine of no less than 1,000 Omani riyals.
                
                 <br><br>Threaten or threaten mail via the Internet. Victim’s
                 photos and videos are published in internet especially on social media or websites:<br>
                
                Imprisonment for a period of 3-10 years and a fine of 3-10 thousand Omani riyals.");
            } 
            else if (str_contains($q2, $message))
            {
                $botman->reply("Go to the report field, a page will appear for you that you can fill
                 in with the required data, as shown as follows:
                    <ul>
                    <li>1- Choose the organization you belong to.</li>
                    <li>2- Choose the type (one or more) of bullying you were subjected to.</li>
                    <li>3- Choose the type of harm (one or more) that you suffer from (to help
                     your organization make the right decision).</li>
                    <li>4- Write some important details that you are exposed to during
                     the period of your exposure to bullying (such as the periods during
                      which you were most exposed to bullying, the bully (his account and relationship),
                       the reason for the bullying, if known, ... etc.)</li>
                    <li>5- Attach a PDF file (containing evidence of your exposure to cyberbullying such
                     as screenshots of conversations or tweets, etc.)</li>
                    <li>6- Make sure that you receive the email confirming that your institution 
                    has received the your report.</li>
                    </ul>");
            }
            else if (str_contains($q3, $message))
            {
                $botman->reply("After submitting the report, your report will be transferred to the institution to
                 which you belong. And with the rights they possess, the appropriate decision will be taken for your
                  case and for your benefit as soon as possible, and you will be informed of the decision via e-mail,
                   and if necessary, you will be contacted through the chat available on the site itself.");
            }
            else if (str_contains($q4, $message))
            {
                $botman->reply("In the event that you are exposed to any electronic extortion,
                 do not hesitate to seek help from the Economic Crimes Unit at <br><br> &#x1F46E 24569701");
            }
            else if (str_contains($q5, $message))
            {
                $botman->reply("Any criminal activity that uses a computer either as instrumentality,
                target or a means for perpetuating further crimes comes within the ambit of cyber crime.
                The term “cyber-crime” is not defined under the Information Technology Act, 2000.In simple
                terms cyber crime would be “unlawful acts wherein the computer is either a tool or a target or
                both”. It is also known as computer crime, e-crime and electronic crime.");
            }
            
            else if (str_contains($q6, $message))
            {
                $botman->reply("Hacking is amongst the gravest Cybercrimes known till date.
                In simple terms it means an illegal intrusion into a computer system and/or network.
                Every act committed towards breaking into a computer and/or network is hacking.
                Some hackers hack for personal monetary gains, such as to stealing the credit card information,
                transferring money from various bank accounts to their own account followed by withdrawal of money.");
            }
            else if (str_contains($q7, $message))
            {
                $botman->reply("Cyberstalking, which is simply an extension of the physical form of stalking,
                is where the electronic mediums such as the Internet are used to pursue, harass or contact another
                in an unsolicited fashion. Most often, given the vast distances that the Internet spans,
                this behaviour will never manifest itself in the physical sense but this does not mean that
                the pursuit is any less distressing. There are a wide variety of means by which individuals
                may seek out and harass individuals even though they may not share the same geographic borders,
                and this may present a range of physical, emotional, and psychological consequences to the victim.");
            }
            else if (str_contains($q8, $message))
            {
                $botman->reply("");
            }
            else if (str_contains($q9, $message))
            {
                $botman->reply("");
            }
            else if (str_contains($q10, $message))
            {
                $botman->reply("");
            }
            else if (str_contains($q11, $message))
            {
                $botman->reply("");
            }
            else if (str_contains($q12, $message))
            {
                $botman->reply("");
            }
            else if (str_contains($q13, $message))
            {
                $botman->reply("");
            }
            else if (str_contains($q14, $message))
            {
                $botman->reply("");
            }
            else if (str_contains($q15, $message))
            {
                $botman->reply("");
            }
            else
            {
                $botman->reply("");
            }
        });


        $botman->listen();
    }

    /**
     * Place your BotMan logic here.
     */
    public function askName($botman)
    {
        $botman->ask('Maryam', function (Answer $answer) {

            $name = $answer->getText();

            $this->say('Nice to meet you ' . $name);
        });
    }
}