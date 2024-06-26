<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public $timestamps = false;

    protected $primaryKey = 'usuario_id';
    protected $table = 'usuarios';
    protected $fillable = ['tipoConta', 'nomeUsuario', 'nome', 'senha', 'cpf', 'email', 'telefone', 'foto', 'descricao'];

    use HasFactory;

    public function tipoConta()
    {
        return $this->belongsTo(TipoConta::class, 'tipoConta_id');
    }

    public function endereco()
    {
        return $this->hasOne(Endereco::class, 'endereco_id');
    }

    public function caso()
    {
        return $this->hasOne(Caso::class, 'caso_id');
    }

    public function dadosCurriculares()
    {
        return $this->hasOne(dadosCurriculares::class, 'advogado_id');
    }

    public function advogado()
    {
        return $this->hasOne(Advogado::class, 'usuario_id');
    }
}
