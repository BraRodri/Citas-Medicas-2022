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
            'tipo_documento' => 'Cedula de Ciudadanía',
            'numero_documento' => '100498577',
            'nombres' => 'Administrador',
            'fecha_nacimiento' => '1994/07/14',
            'genero' => 'Másculino',
            'telefono' => '3144520454',
            'direccion' => 'Medellín, Antioquia',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
        ])->assignRole('Admin');
    }
}
