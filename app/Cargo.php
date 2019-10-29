<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $fillable = ['nombre'];

  
    public function cargos()
    {
    	return $this->hasMany(Persona::class);
    }
}
