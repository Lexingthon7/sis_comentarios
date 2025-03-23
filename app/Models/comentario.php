<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\respuesta;
use App\Models\User;
class comentario extends Model
{
    /** @use HasFactory<\Database\Factories\ComentarioFactory> */
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function respuestas(){
        return $this->hasMany(respuesta::class);
    }
}
