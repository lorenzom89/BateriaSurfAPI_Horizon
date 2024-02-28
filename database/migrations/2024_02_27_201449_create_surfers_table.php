<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurfersTable extends Migration {
    public function up() {
        Schema::create('surfers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('country');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('surfers');
    }
}
