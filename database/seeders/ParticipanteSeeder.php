<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Participante;

class ParticipanteSeeder extends Seeder
{
    public function run(): void
    {
        Participante::create([
            'evento_id'=>1,
            'certificado'=>'9087013.pdf',
            'carnet'=>'9087013',
            'nombre'=>'JOSE',
            'paterno'=>'APAZA',
            'materno'=>'SAAVEDRA',
            'correo'=>'jos123apaza@gmail.com',
            'telefono'=>'72533597',
        ]);
        Participante::create([
            'evento_id'=>1,
            'certificado'=>'12345.pdf',
            'carnet'=>'12345',
            'nombre'=>'MARIA',
            'paterno'=>'LOZA',
            'materno'=>'CONDORI',
            'correo'=>'marialoza@gmail.com',
            'telefono'=>'7255478',
        ]);
        Participante::create([
            'evento_id'=>1,
            'certificado'=>'54321.pdf',
            'carnet'=>'54321',
            'nombre'=>'CARLOS',
            'paterno'=>'MAMANI',
            'materno'=>'',
            'correo'=>'',
            'telefono'=>'72536987',
        ]);
        Participante::create([
            'evento_id'=>2,
            'certificado'=>'9087013.pdf',
            'carnet'=>'9087013',
            'nombre'=>'JOSE',
            'paterno'=>'APAZA',
            'materno'=>'SAAVEDRA',
            'correo'=>'jos123apaza@gmail.com',
            'telefono'=>'72533597',
        ]);
        Participante::create([
            'evento_id'=>2,
            'certificado'=>'987654.pdf',
            'carnet'=>'987654',
            'nombre'=>'FLORA',
            'paterno'=>'SAAVEDRA',
            'materno'=>'TRUJILLO',
            'correo'=>'florasaavedra@gmail.com',
            'telefono'=>'78987456',
        ]);
    }
}
