<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Heat extends Model {
    protected $fillable = ['fk_surfer_a', 'fk_surfer_b'];

    public function surfers() {
        return $this->hasMany(Surfer::class, 'id', 'fk_surfer_a')
                    ->orWhere('id', $this->fk_surfer_b);
    }

    public function waves() {
        return $this->hasMany(Wave::class, 'fk_heat', 'id');
    }
}

