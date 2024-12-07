<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class SessionTutoria extends Model
{
    protected $perPage = 20;

  
     
    protected $fillable = ['tutor_id', 'estudiante_id', 'materia', 'fecha', 'hora', 'estado'];

    
    public function tutor()
    {
        return $this->belongsTo(\App\Models\Usuario::class, 'tutor_id', 'id');
    }

  
    public function estudiante()
    {
        return $this->belongsTo(\App\Models\Usuario::class, 'estudiante_id', 'id');
    }

    
    public function opinions()
    {
        return $this->hasMany(\App\Models\Opinion::class, 'session_id', 'id');
    }
}


