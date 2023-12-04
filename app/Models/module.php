<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class module extends Model
{
    protected $guarded = [];
Public function lignemodule()
{
return $this -> hasMany(Lignemodule::class) ; 
}
}
