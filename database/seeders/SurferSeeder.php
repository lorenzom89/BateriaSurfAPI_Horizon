<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Surfer;

class SurferSeeder extends Seeder {
    public function run() {
        Surfer::create(['name' => 'Marcos', 'country' => 'Brasil']);
        Surfer::create(['name' => 'John', 'country' => 'EUA']);
        Surfer::create(['name' => 'Luke', 'country' => 'Australia']);
        Surfer::create(['name' => 'Matthew', 'country' => 'Inglaterra']);
        Surfer::create(['name' => 'Juan', 'country' => 'Argentina']);
        Surfer::create(['name' => 'Amon', 'country' => 'Egito']);
        Surfer::create(['name' => 'Kowalski', 'country' => 'Polonia']);
        Surfer::create(['name' => 'Niels', 'country' => 'Dinamarca']);
        Surfer::create(['name' => 'Ming', 'country' => 'China']);
        Surfer::create(['name' => 'Tanaka', 'country' => 'Japao']);
    }
}