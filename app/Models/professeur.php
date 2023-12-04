<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class professeur extends Model
{
    use HasFactory;
    protected $guarded = [];
Public function localite()
{
return $this -> belongsTo(Localite::class) ; }

Public function lignemodule()
{
return $this -> hasMany(Lignemodule::class) ; }   


  Public function user()
{
return $this -> belongsTo(User::class) ; }   
}

