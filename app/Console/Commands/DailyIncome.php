<?php

namespace App\Console\Commands;

use App\Service\TransactionService;
use Illuminate\Console\Command;

class DailyIncome extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'daily:income';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send daily income to users';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        TransactionService::sendMoney();
    }
}
