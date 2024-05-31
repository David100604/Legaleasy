<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DadosCurriculares extends Model
{
    public $timestamps = false;

    protected $primaryKey = 'advogado_id';
    protected $table = 'advogados';
    protected $fillable = ['usuario_id', 'OAB', 'tipoAdvogado'];

    use HasFactory;

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }
}
