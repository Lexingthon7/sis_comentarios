<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Comentario;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $users = User::factory(10)
        ->hasComentarios(3)
        ->create();

        $comentarios = Comentario::get();

        foreach($comentarios as $comentario){
            \app\Models\respuesta::factory(rand(1, 3)) -> create([
                'comentario_id'=>$comentario->id,
                'user_id'=>$users.rand(1, 10)
            ]);
        }

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
