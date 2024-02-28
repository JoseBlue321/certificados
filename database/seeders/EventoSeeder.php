<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Evento;

class EventoSeeder extends Seeder
{
    public function run(): void
    {
        Evento::create([
            'codigo'=>'100',
            'evento'=>'Curso de Capacitacion Remark',
            'detalle'=>'llevado a cabo en la sala de reuniones de la carrera de medicina',
            'fecha'=>'02/02/2024',
        ]);
        Evento::create([
            'codigo'=>'101',
            'evento'=>'Taller Medicina Natural',
            'detalle'=>'realizado por el comite de medicina en los predios de la facultad',
            'fecha'=>'02/02/2024',
        ]);
    }
}
