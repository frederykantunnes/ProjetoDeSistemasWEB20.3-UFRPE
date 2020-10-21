<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    use HasFactory;

    protected $fillable = ['name','image','curso','detalhes','ch','tp1nome','tp1conteudo','tp1link','tp2nome','tp2conteudo','tp2link','tp3nome','tp3conteudo','tp3link','tp4nome','tp4conteudo','tp4link'];
}
