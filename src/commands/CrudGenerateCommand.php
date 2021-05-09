<?php

namespace Karakushan\CrudGenerator\Commands;

use Illuminate\Console\Command;

class CrudGenerateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crud:controller';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates a controller';

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
    public function handle()
    {
        return 0;
    }
}
