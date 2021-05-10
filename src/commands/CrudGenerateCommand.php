<?php

namespace Karakushan\CrudGenerator\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class CrudGenerateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crud:controller {name} {--model=} {--dir=}';

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
     *
     * @param $text
     * @return string
     */
    public function human_name($text)
    {
        $data = preg_split('/(?=[A-Z])/', $text);

        $string = implode(' ', $data);

        return trim(ucwords($string));
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $name = $this->argument('name');
        $human_name = $this->human_name($name);
        $model = $this->option('model') ? $this->option('model') : $name;
        $dir = $this->option('dir')
            ? $this->option('dir')
            : config('crud-generator.view_base_path') . '.' . Str::kebab($name);

        $controller = file_get_contents(__DIR__ . '/../stubs/Controller.stub');
        $controller = str_replace(
            ['{{modelName}}', '{{controllerName}}', '{{viewBase}}', '{{humanName}}', '{{humanNamePlural}}'],
            [$model, $name, $dir, $human_name, Str::plural($human_name)],
            $controller
        );
        file_put_contents(app_path("/Http/Controllers/{$name}Controller.php"), $controller);

        $this->info('Контроллер успешно создан!');
    }
}
