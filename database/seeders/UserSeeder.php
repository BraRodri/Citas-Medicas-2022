<?php

namespace Database\Seeders;

use DateTime;
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
            'nombres' => 'Admin',
            'fecha_nacimiento' => '15/08/1994',
            'genero' => 'Másculino',
            'telefono' => '3144520454',
            'direccion' => 'Medellín, Antioquia',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
        ])->assignRole('Admin');
    }
}
