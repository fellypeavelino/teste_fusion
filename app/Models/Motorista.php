<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motorista extends Model
{
    use HasFactory;

    protected $table = 'motoristas';
    public $timestamps = true;

    protected $fillable = [
        'nome',	'cpf', 'email', 'situacao', 'status'
    ];
}
