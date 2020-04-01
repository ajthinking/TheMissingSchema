<?php

namespace TheMissingSchema;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use TheMissingSchema\Commands\SchemaCommand;

class ServiceProvider extends BaseServiceProvider
{
    public function register()
    {
        $this->registerCommands();
    }

    public function boot()
    {
        //
    }

    protected function registerCommands()
    {
        $this->commands([
            SchemaCommand::class,
        ]);
    }
}