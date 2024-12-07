<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    /**
     * Define la paginación por defecto para este modelo.
     *
     * @var int
     */
    protected $perPage = 20;

    /**
     * Los atributos que son asignables de forma masiva.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'email', 'contraseña', 'rol'];


    
    public function tutoriasComoEstudiante()
    {
        return $this->hasMany(\App\Models\SessionTutoria::class, 'estudiante_id', 'id');
    }

   
    public function tutoriasComoTutor()
    {
        return $this->hasMany(\App\Models\SessionTutoria::class, 'tutor_id', 'id');
    }

    
    public function esTutor(): bool
    {
        return $this->rol === 'tutor';
    }

   
    public function esEstudiante(): bool
    {
        return $this->rol === 'estudiante';
    }
}


