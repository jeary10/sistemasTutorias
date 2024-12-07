<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Opinion extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['session_id', 'calificacion', 'comentario'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function session_tutoria()
    {
        return $this->belongsTo(\App\Models\SessionTutoria::class, 'session_id', 'id');
    }
    
}
