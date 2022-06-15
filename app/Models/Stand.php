<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stand extends Model
{
    use HasFactory;
    public function menber(){
        return $this->belongsTo(Menber::class);
    }

    public function sanctions(){
        return $this->hasMany(Sanction::class);
    }
}
