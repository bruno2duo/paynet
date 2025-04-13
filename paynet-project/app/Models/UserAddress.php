<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    protected $table = 'user_address';

    protected $fillable = ['user_id', 'logradouro', 'numero', 'cep', 'bairro', 'cidade', 'estado'];
}
