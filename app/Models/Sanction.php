<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sanction extends Model
{
    use HasFactory;
    public function menber(){
        return $this->belongsTo(Menber::class);
    }
    public function stand(){
        return $this->belongsTo(Stand::class);
    }
}
