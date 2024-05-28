<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoConta extends Model
{
    public $timestamps = false;

    protected $primaryKey = 'usuario_id';
    protected $table = 'tipoUsuarios';
    protected $fillable = ['tipoConta'];
    
    use HasFactory;
}
