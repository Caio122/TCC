<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $table = 'noticias';
    use HasFactory;
    protected $fillable = [
        'titulo',
        'sbtitulo',
        'texto',
        'fonte',
    ];

    public function user(){
        return $this->BelongsTo('App\Models\User');
    }

}
