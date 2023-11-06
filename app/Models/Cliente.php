<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $primaryKey='id';
    protected $table = 'cliente';
    protected $fillable = ['id', 'nome', 'login', 'senha', 'tipo_atendimento', 'id_sala'];

}
