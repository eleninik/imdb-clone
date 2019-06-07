<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SeedIndex extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'seed:index';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Seeds Index-page with popular, now playing and upcoming movies';

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
     * @return mixed
     */
    public function handle()
    {
        app()->call('App\Http\Controllers\Admin\ApiController@store');
    }
}
