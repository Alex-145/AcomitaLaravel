<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    use HasFactory;

    protected $guarded=['id'];
    public function managements(){
        return $this->hasMany(Management::class);
    }

}
