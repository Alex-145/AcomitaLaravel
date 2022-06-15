<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    public function menber(){
        return $this->belongsTo(Menber::class);
    }
    public function activity(){
        return $this->belongsTo(Activity::class);
    }


    ///hasmany

    public function penalties(){
        return $this->hasMany(Penalty::class);
    }

}
