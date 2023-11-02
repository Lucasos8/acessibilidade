<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gravacao extends Model
{
    use HasFactory;
    protected $primaryKey='id';
    protected $fillable = ['id_cliente', 'id_atendente', 'id_cliente', 'id_atendente'];

}