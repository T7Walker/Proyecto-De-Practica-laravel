<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class provider extends Model
{
    use HasFactory;

    protected $table = 'providers'; // Asegúrate de que este nombre coincide con el de la tabla en la base de datos

    protected $fillable = ['name', 'Empresa']; // Añade aquí los campos que vas a llenar
}
