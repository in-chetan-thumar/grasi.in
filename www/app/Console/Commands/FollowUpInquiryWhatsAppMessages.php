<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class FollowUpInquiryWhatsAppMessages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'follow-up-inquiry:send-messages';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send whatsApp messages for follow-up inquiry';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        if (strtoupper(env('APP_ENV')) === 'PRODUCTION') {
            $result = app('common-helper')->getYesterdayLastHourInquiryDataAndSendMessages();
            if ($result) {
                $this->info('Messages have been sent for inquiries made in the past hour.');
            } else {
                $this->error('Failed to send messages for inquiries made in the past hour.');
            }
        }
    }
}
