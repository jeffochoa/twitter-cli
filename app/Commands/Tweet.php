<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;
use Toolkito\Larasap\SendTo;

class Tweet extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tweet {text : The tweet string}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish tweets to your account';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(): void
    {
        $response = SendTo::Twitter($this->argument('text'));
        $this->info("Tweet published: {$this->argument('text')}!");
    }

    /**
     * Define the command's schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule $schedule
     *
     * @return void
     */
    public function schedule(Schedule $schedule): void
    {
        // $schedule->command(static::class)->everyMinute();
    }
}
