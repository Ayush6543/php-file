<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\personalinfo;
use Faker\Factory as Faker;


class PersonalSeeder extends Seeder

{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker=Faker::create();

        for($i=0;$i<=100;$i++){
        personalinfo::create([
            'name' => $faker->name,
            'email' => $faker->email,
            'age' => $faker->numberBetween(20,60),
            'mobile' => $faker->phoneNumber,
        ]);
    }
}
}
