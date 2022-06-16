<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menber extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    //belongsto
    //relacion uno a muchos inversa
    public function user(){
        return $this->belongsTo(User::class);
    }



    //hasmany
    //relacion uno a muchos
    public function sons(){
        return $this->hasMany(Son::class);
    }
    //RELACION UNO A UNO
    public function spouse(){
        return $this->hasOne(Spouse::class);
    }
    public function stands(){
        return $this->hasMany(Stand::class);
    }
    public function attendances(){
        return $this->hasMany(Attendance::class);
    }
    public function sanctions(){
        return $this->hasMany(Sanction::class);
    }
    public function collections(){
        return $this->hasMany(Collection::class);
    }
    public function charges(){
        return $this->hasMany(Charge::class);
    }

}
