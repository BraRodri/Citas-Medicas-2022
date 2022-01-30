<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'tipo_documento' => 'Cédula de Ciudadanía',
            'numero_documento' => '100498577',
            'nombres' => 'Administrador',
            'fecha_nacimiento' => '1994-07-14',
            'genero' => 'Masculino',
            'telefono' => '3144520454',
            'direccion' => 'Medellín, Antioquia',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
            'active' => 1,
            'video_confirm' => 1,
            'confirm_edad' => 1,
            'avatar' => ''
        ])->assignRole('Admin');
    }
}
