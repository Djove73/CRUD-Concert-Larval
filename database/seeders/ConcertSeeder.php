<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConcertSeeder extends Seeder
{
    public function run()
{
    $bands = Band::factory(10)->create();

    Concert::factory(20)->create()->each(function ($concert) use ($bands) {
        $concert->bands()->attach($bands->random(rand(3, 10)));
    });
}
}
