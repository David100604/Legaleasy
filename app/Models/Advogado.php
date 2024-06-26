<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advogado extends Model
{
    use HasFactory;

    protected $primaryKey = 'usuario_id';
    protected $table = 'advogados';
    protected $fillable = ['usuario_id', 'OAB', 'tipoAdvogado'];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }
}
