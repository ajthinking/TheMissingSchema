<?php

namespace TheMissingSchema\Commands;

use Illuminate\Console\Command;

class SchemaCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'migrate:schema';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Extract schema';

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
        dd("Woah! A schema!");
    }
}
