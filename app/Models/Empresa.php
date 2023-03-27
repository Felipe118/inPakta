<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'website'
    ];

    public function funcionarios()
    {
        return $this->hasMany(Funcionario::class);
    }
}
