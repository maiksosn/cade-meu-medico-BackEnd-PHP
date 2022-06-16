<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'CRM',
        'nome',
        'endereco',
        'bairro',
        'email',
        'atendeporconvenio',
        'temclinica',
        'websiteblog',
    ];
    public $timestamps = false;
}
