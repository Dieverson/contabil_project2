<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupos extends Model
{
    protected $fillable = [
        'numero_da_conta',
        'natureza_idnatureza',
        'id_plano_de_contas',
        'nome_da_conta'

   ];
}
