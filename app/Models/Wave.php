<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wave extends Model {
    protected $fillable = ['fk_heat', 'fk_surfer'];

    public function heat() {
        return $this->belongsTo(Heat::class, 'fk_heat', 'id');
    }

    public function surfer() {
        return $this->belongsTo(Surfer::class, 'fk_surfer', 'id');
    }

    public function scores() {
        return $this->hasMany(Score::class, 'fk_wave', 'id');
    }
}
