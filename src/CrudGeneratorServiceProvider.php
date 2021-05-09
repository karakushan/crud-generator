<?php


namespace Karakushan\CrudGenerator;

use Illuminate\Support\ServiceProvider;
use Karakushan\CrudGenerator\Commands\CrudGenerateCommand;


class CrudGeneratorServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/crud-generator.php' => config_path('crud-generator.php'),
        ]);

        if ($this->app->runningInConsole()) {
            $this->commands([
                CrudGenerateCommand::class
            ]);
        }
    }
}
