<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Medico;

class MedicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*$medico2 = new medico;
        $medico2->nombre_apellido = "Dr ivan";
        $medico2->ci = "1234";
        $medico2->correo = "medico2@test.com";
        $medico2->telefono = 12345;
        $medico2->password = "1234";
        $medico2->save();*/

        $medicos = [
            [
                'nombre_apellido' => 'Dr. Ivan',
                'ci' => '1234',
                'correo' => 'medico2@test.com',
                'telefono' => 12345,
                'password' => '1234', // No cifres la contraseña aquí
            ],
            // Agrega más médicos si es necesario
        ];

        // Inserta los datos en la tabla de médicos
        foreach ($medicos as $medicoData) {
            $medicoData['password'] = Hash::make($medicoData['password']); // Cifra la contraseña antes de asignarla
            Medico::create($medicoData);
    }
}
}
