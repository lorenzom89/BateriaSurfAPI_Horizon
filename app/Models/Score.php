<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model {
    protected $fillable = ['fk_wave', 'partialScore1', 'partialScore2', 'partialScore3'];

    public function wave() {
        return $this->belongsTo(Wave::class, 'fk_wave', 'id');
    }
}
