<?php

use Illuminate\Database\Seeder;

class FuckSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Fuck::class, 20)->create()->each(function($f){
            $f->confirm();
        });
    }
}
