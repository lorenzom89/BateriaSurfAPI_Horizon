<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surfer extends Model {
    protected $fillable = ['name', 'country'];

    public function heats() {
        return $this->hasMany(Heat::class, 'fk_surfer_1', 'id')
                    ->orWhere('fk_surfer_2', $this->id);
    }
}
