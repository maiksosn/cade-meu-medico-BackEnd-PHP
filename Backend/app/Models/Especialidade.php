<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialidade extends Model
{
    use HasFactory;
    protected $fillable = [
        'especialidades',
    ];

    public function medicos()
    {
        return $this->belongsToMany(Medico::class, 'medicos_especialidades', 'especialidade_id', 'medico_id')->withTimestamps();
    }
}
