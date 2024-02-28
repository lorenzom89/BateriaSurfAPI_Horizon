<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeatsTable extends Migration {
    public function up() {
        Schema::create('heats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fk_surfer_a')->constrained('surfers');
            $table->foreignId('fk_surfer_b')->constrained('surfers');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('heats');
    }
}
