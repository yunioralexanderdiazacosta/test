<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $fillable = ['cedula','nombre', 'correo', 'cargo_id'];

    public function cargo()
    {
    	return $this->BelongsTo(Cargo::class, 'cargo_id');
    }
}
