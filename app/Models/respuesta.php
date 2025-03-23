<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comentario;
use app\Models\User;

class Respuesta extends Model
{
    /** @use HasFactory<\Database\Factories\RespuestaFactory> */
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function comentario(){
        return $this->belongsTo(Comentario::class);
    }
}
