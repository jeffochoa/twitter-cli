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
    protected $signature = 'tweet
                                {text : The tweet string}
                                {img=false : Image path}';

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
    public function handle() : void
    {
        try {
            if (empty($this->argument('img'))) {
                SendTo::Twitter($this->argument('text'));
                $this->info("Tweet published: {$this->argument('text')}!");
                return;
            }
            if ($this->isValidImage($this->argument('img'))) {
                SendTo::Twitter($this->argument('text'), [$this->argument('img')]);
                $this->info("Tweet published: {$this->argument('text')} {$this->argument('img')}!");
                return;
            }
        } catch (\Throwable $e) {
            $this->error('Oops! Something went wrong, please check the arguments.');
        }
    }

    /**
     * Check if the given path is a valid image file
     *
     * @param string $path
     * @return boolean
     */
    private function isValidImage($path) : bool
    {
        if (empty($path)) {
            return false;
        }

        if (!empty($path) && !file_exists($path)) {
            $this->line('');
            $this->error('File not found: '.$this->argument('img'));
            $this->line('');
            return false;
        }

        $file_parts = pathinfo($path);

        if (!in_array(strtolower($file_parts['extension']), ['jpg', 'jpeg', 'png', 'gif'])) {
            $this->line('');
            $this->error('File not found: '.$this->argument('img'));
            $this->line('');
            return false;
        }

        return true;
    }
}
