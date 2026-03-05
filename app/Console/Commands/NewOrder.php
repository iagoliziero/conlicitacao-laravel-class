<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Events\NewOrderEvent;

class NewOrder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:neworder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $email = 'iago.liziero@conlicitacao.com.br';
        NewOrderEvent::dispatch($email);
    }
}