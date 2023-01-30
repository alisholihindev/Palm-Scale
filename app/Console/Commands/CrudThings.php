<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class CrudThings extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:crudthings {name} {--options=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Membuat Kebutuhan Untuk Crud Laravel contoh: generate:crudthings nama --options=m-c-r-s. m(Model & Table) c(Controller) r(Request) s(Seeder)';

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
        if (empty($this->options('options')['options'])) {
            $this->info('Gagal, Option tidak boleh kosong');
            return false;
        }

        $this->makeArtisanCall();
    }

    public function getArrayOptions($options)
    {
        $exploded = explode('-', $options['options']);

        return $exploded;
    }

    public function makeArtisanCall()
    {
        foreach ($this->getArrayOptions($this->options('options')) as $key => $option) {
            switch ($option) {
                case 'm':
                    Artisan::call('make:model', ['name' => 'Models\\'.ucwords($this->argument('name')), '--migration' => true]);
                    $this->info('Berhasil membuat Model & Table');
                    break;
                case 'c':
                    Artisan::call('make:controller', ['name' => ucwords($this->argument('name')).'Controller']);
                    $this->info('Berhasil membuat Controller');
                    break;
                case 'r':
                    Artisan::call('make:request',['name' => ucwords($this->argument('name')).'Request']);
                    $this->info('Berhasil membuat Request');
                    break;
                case 's':
                    Artisan::call('make:seeder',['name' => ucwords($this->argument('name')).'Seeder']);
                    $this->info('Berhasil membuat Seeder');
                    break;
                default:
                    $this->info('Option '.$option.' Tidak Dikenal');
                    break;
            }
        }
    }
}
