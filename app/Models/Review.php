<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews';
    use HasFactory;
    protected $fillable = [
        'titulo',
        'sbtitulo',
        'texto',
    ];

    public function user(){
        return $this->BelongsTo('App\Models\User');
    }
    
}
