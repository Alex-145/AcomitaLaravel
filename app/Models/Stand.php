<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stand extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    public function sanctions(){
        return $this->hasMany(Sanction::class);
    }
}
