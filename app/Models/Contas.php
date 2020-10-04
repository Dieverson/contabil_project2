<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contas extends Model
{
   protected $fillable = [
        'numero_da_conta',
        'nome_da_conta',
        'sub_grupos_idsub_grupos',
        'natureza_idnatureza'
   ];
}
