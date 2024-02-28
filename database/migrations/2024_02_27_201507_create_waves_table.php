<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWavesTable extends Migration {
    public function up() {
        Schema::create('waves', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fk_heat')->constrained('heats');
            $table->foreignId('fk_surfer')->constrained('surfers');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('waves');
    }
}
