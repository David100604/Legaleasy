<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    public $timestamps = false;

    protected $primaryKey = 'endereco_id';
    protected $table = 'enderecos';
    protected $fillable = ['CEP', 'UF', 'cidade', 'bairro', 'rua', 'numero', 'edificio', 'complemento'];

    use HasFactory;
}
