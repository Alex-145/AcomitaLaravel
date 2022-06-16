<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Son extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    //belongsto
    public function menber(){
        return $this->belongsTo(Menber::class);
    }

}
