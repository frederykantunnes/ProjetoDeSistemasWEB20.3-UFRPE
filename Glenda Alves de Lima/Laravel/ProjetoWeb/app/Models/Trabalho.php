<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabalho extends Model
{

    use HasFactory;
    protected $fillable = ['titulo', 'autor', 'tipoDocumento','area', 'descricao', 'ano','documento', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
