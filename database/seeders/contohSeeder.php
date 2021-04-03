<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\fakerSeeder;

class contohSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
        for($i=0;$i<20;$i++)
        {
            $table = new fakerSeeder;
            $table->name = $faker->name;
            $table->age = rand(20,30);
            $table->save();
        }
    }
}
