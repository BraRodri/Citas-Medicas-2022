<?php

namespace Database\Seeders;

use App\Models\Medico;
use App\Models\Paciente;
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
            'avatar' => '',
            'pais' => 'Colombia',
            'departamento' => 'Bogotá D.C.',
            'ciudad' => 'Bogotá D.C.'
        ])->assignRole('Admin');

        $paciente = User::create([
            'tipo_documento' => 'Cédula de Ciudadanía',
            'numero_documento' => '888888888',
            'nombres' => 'Manuel Cardenas',
            'fecha_nacimiento' => '1994-07-14',
            'genero' => 'Masculino',
            'telefono' => '3144520454',
            'direccion' => 'Medellín, Antioquia',
            'email' => 'paciente@gmail.com',
            'password' => bcrypt('12345678'),
            'active' => 1,
            'video_confirm' => 1,
            'confirm_edad' => 1,
            'avatar' => '',
            'pais' => 'Colombia',
            'departamento' => 'Bogotá D.C.',
            'ciudad' => 'Bogotá D.C.'
        ])->assignRole('Paciente');

        Paciente::create([
            'users_id' => $paciente->id,
            'enfermedad' => 'Ninguna'
        ]);

        $medico = User::create([
            'tipo_documento' => 'Cédula de Ciudadanía',
            'numero_documento' => '888888888',
            'nombres' => 'Katherine Diaz',
            'fecha_nacimiento' => '1994-07-14',
            'genero' => 'Masculino',
            'telefono' => '3144520454',
            'direccion' => 'Medellín, Antioquia',
            'email' => 'medico@gmail.com',
            'password' => bcrypt('12345678'),
            'active' => 1,
            'video_confirm' => 1,
            'confirm_edad' => 1,
            'avatar' => '',
            'pais' => 'Colombia',
            'departamento' => 'Bogotá D.C.',
            'ciudad' => 'Bogotá D.C.'
        ])->assignRole('Medico');

        Medico::create([
            'users_id' => $medico->id,
            'especialidad' => 'Cirujano',
            'correo_empresarial' => 'cirujano@gmail.com'
        ]);
    }
}
