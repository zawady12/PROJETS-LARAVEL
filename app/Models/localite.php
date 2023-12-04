<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class localite extends Model
{
    use HasFactory;
    protected $guarded = [];

Public function professeur()
{
return $this -> hasMany(Professeur::class) ; }
}
