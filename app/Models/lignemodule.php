<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lignemodule extends Model
{
    use HasFactory;
    protected $guarded = [];
Public function professeur()
{
return $this -> belongsTo(Professeur::class) ; }
  Public function module()
{
return $this -> belongsTo(Module::class) ; }

Public function user()
{
return $this -> belongsTo(User::class) ; }
}
