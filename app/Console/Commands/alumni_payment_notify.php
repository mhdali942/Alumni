<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\alumni;
use Mail;



class alumni_payment_notify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Monthly_Payment_Notify:alumni_payment_notify';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'alumni monthly payment reminder';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle( request $request)
    {

        $alumnis= alumni::select('email')->get();

        foreach ($alumnis as  $value) {
            



             Mail::send('emails.alumnis-payment-reminder',[

                  'name'=> $value->fulname], function($mail) use($request){

                    $mail->from('al.kabiri@mediu.edu.my');

                    $mail->to($value->all)->subject('Membership Payment Reminder');
                  });


        }


    }
}
