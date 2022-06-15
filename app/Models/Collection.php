<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;
    public function menber(){
        return $this->belongsTo(Menber::class);
    }
    public function activity(){
        return $this->belongsTo(Activity::class);
    }
}
