<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caso extends Model
{
    public $timestamps = false;

    protected $primaryKey = 'caso_id';
    protected $table = 'casos';
    protected $fillable = ['titulo', 'descricao', 'tipoCaso', 'arquivo', 'cliente'];

    use HasFactory;

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }
}
