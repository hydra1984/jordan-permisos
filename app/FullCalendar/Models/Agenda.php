<?php

namespace App\FullCalendar\Models;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $table = "agendas";
    protected $fillable = [
        'usuario_id', 'fecha', 'hora_inicio', 'hora_fin', 'estado', 
    ];

    public static $rules = [
        //aqui irian las reglas de validacion
    ]
}
