<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Score;

class ScoreSeeder extends Seeder {
    public function run() {

        Score::create(['fk_wave' => 1, 'partialScore1' => 9.0, 'partialScore2' => 8.5, 'partialScore3' => 8.0]);
        Score::create(['fk_wave' => 2, 'partialScore1' => 8.0, 'partialScore2' => 6.5, 'partialScore3' => 10.0]);
        Score::create(['fk_wave' => 3, 'partialScore1' => 2.3, 'partialScore2' => 7.8, 'partialScore3' => 4.5]);
        Score::create(['fk_wave' => 4, 'partialScore1' => 1.2, 'partialScore2' => 5.6, 'partialScore3' => 9.8]);
        Score::create(['fk_wave' => 5, 'partialScore1' => 6.7, 'partialScore2' => 3.4, 'partialScore3' => 7.1]);
        Score::create(['fk_wave' => 6, 'partialScore1' => 0.9, 'partialScore2' => 8.3, 'partialScore3' => 2.0]);
        Score::create(['fk_wave' => 7, 'partialScore1' => 4.5, 'partialScore2' => 1.0, 'partialScore3' => 6.2]);
        Score::create(['fk_wave' => 8, 'partialScore1' => 7.6, 'partialScore2' => 9.2, 'partialScore3' => 3.1]);
        Score::create(['fk_wave' => 9, 'partialScore1' => 5.3, 'partialScore2' => 0.8, 'partialScore3' => 4.0]);
        Score::create(['fk_wave' => 10, 'partialScore1' => 3.7, 'partialScore2' => 6.0, 'partialScore3' => 7.8]);
        Score::create(['fk_wave' => 11, 'partialScore1' => 8.4, 'partialScore2' => 2.5, 'partialScore3' => 5.3]);
        Score::create(['fk_wave' => 12, 'partialScore1' => 9.6, 'partialScore2' => 1.7, 'partialScore3' => 6.9]);
        Score::create(['fk_wave' => 13, 'partialScore1' => 7.0, 'partialScore2' => 4.2, 'partialScore3' => 8.7]);
        Score::create(['fk_wave' => 14, 'partialScore1' => 2.9, 'partialScore2' => 9.4, 'partialScore3' => 3.8]);
        Score::create(['fk_wave' => 15, 'partialScore1' => 6.4, 'partialScore2' => 7.3, 'partialScore3' => 1.5]);
        Score::create(['fk_wave' => 16, 'partialScore1' => 4.8, 'partialScore2' => 5.9, 'partialScore3' => 8.9]);
        Score::create(['fk_wave' => 17, 'partialScore1' => 3.2, 'partialScore2' => 0.5, 'partialScore3' => 7.5]);
        Score::create(['fk_wave' => 18, 'partialScore1' => 9.3, 'partialScore2' => 3.9, 'partialScore3' => 5.7]);
        Score::create(['fk_wave' => 19, 'partialScore1' => 1.8, 'partialScore2' => 6.6, 'partialScore3' => 9.5]);
        Score::create(['fk_wave' => 20, 'partialScore1' => 5.1, 'partialScore2' => 8.2, 'partialScore3' => 2.6]);
    }
}