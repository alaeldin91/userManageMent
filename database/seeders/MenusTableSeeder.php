<?php

namespace Database\Seeders;

use App\Models\Catogry;
use Faker\Factory;
use Illuminate\Database\Seeder;


class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()


    {

        $catogries = \App\Models\Catogry::factory()->count(5)->create();
        $catogries->each(function($catogry){
            \App\Models\Menu::factory()->count(3)->create([
                'catogry_id'=>$catogry->id
            ]);
       
        });
       // \App\Models\Menu::factory()->count(10)->create();


    }
}
