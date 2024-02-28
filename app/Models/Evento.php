<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Evento extends Model
{
    use HasFactory;
    protected $table = 'eventos';
    protected $fillable = [
        'codigo',
        'evento',
        'detalle',
        'fecha',
    ];
    public function participantes(): HasMany
    {
        return $this->hasMany(Participante::class, 'evento_id');
    }
}
