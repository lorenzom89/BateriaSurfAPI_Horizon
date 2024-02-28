<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoresTable extends Migration {
    public function up() {
        Schema::create('scores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fk_wave')->constrained('waves');
            $table->float('partialScore1');
            $table->float('partialScore2');
            $table->float('partialScore3');            
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('scores');
    }
}
