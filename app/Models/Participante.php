<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Participante extends Model
{
    use HasFactory;
    protected $table = 'participantes';
    protected $fillable = [
        'evento_id',
        'certificado',
        'carnet',
        'nombre',
        'paterno',
        'materno',
        'correo',
        'telefono',
    ];
    public function eventos(): BelongsTo
    {
        return $this->belongsTo(Evento::class, 'evento_id');
    }
}
