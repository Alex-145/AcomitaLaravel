<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{

    use HasFactory;
    protected $guarded=['id'];
    public function user(){
        return $this->belongsTo(User::class);
    }



    //hasmany

    public function attendances(){
        return $this->hasMany(Attendance::class);
    }
    public function collections(){
        return $this->hasMany(Collection::class);
    }
}
