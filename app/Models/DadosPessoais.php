<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DadosPessoais extends Model
{
    public $timestamps = false;

    protected $primaryKey = 'usuario_id';
    protected $table = 'usuarios';
    protected $fillable = ['tipoConta'];

    use HasFactory;
}
