<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Heat;

class HeatSeeder extends Seeder {
    public function run() {
        Heat::create(['fk_surfer_a' => 1, 'fk_surfer_b' => 2]);
        Heat::create(['fk_surfer_a' => 3, 'fk_surfer_b' => 4]);
        Heat::create(['fk_surfer_a' => 5, 'fk_surfer_b' => 6]);
        Heat::create(['fk_surfer_a' => 7, 'fk_surfer_b' => 8]);
        Heat::create(['fk_surfer_a' => 9, 'fk_surfer_b' => 10]);
    }
}