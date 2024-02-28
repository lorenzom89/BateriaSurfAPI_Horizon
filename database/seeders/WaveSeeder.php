<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Wave;

class WaveSeeder extends Seeder {
    public function run() {
        Wave::create(['fk_heat' => 1, 'fk_surfer' => 1]);
        Wave::create(['fk_heat' => 1, 'fk_surfer' => 1]);
        Wave::create(['fk_heat' => 1, 'fk_surfer' => 2]);
        Wave::create(['fk_heat' => 1, 'fk_surfer' => 2]);

        Wave::create(['fk_heat' => 2, 'fk_surfer' => 3]);
        Wave::create(['fk_heat' => 2, 'fk_surfer' => 3]);
        Wave::create(['fk_heat' => 2, 'fk_surfer' => 4]);
        Wave::create(['fk_heat' => 2, 'fk_surfer' => 4]);

        Wave::create(['fk_heat' => 3, 'fk_surfer' => 5]);
        Wave::create(['fk_heat' => 3, 'fk_surfer' => 5]);
        Wave::create(['fk_heat' => 3, 'fk_surfer' => 6]);
        Wave::create(['fk_heat' => 3, 'fk_surfer' => 6]);

        Wave::create(['fk_heat' => 4, 'fk_surfer' => 7]);
        Wave::create(['fk_heat' => 4, 'fk_surfer' => 7]);
        Wave::create(['fk_heat' => 4, 'fk_surfer' => 8]);
        Wave::create(['fk_heat' => 4, 'fk_surfer' => 8]);

        Wave::create(['fk_heat' => 5, 'fk_surfer' => 9]);
        Wave::create(['fk_heat' => 5, 'fk_surfer' => 9]);
        Wave::create(['fk_heat' => 5, 'fk_surfer' => 10]);
        Wave::create(['fk_heat' => 5, 'fk_surfer' => 10]);
        
    }
}