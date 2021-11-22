<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutorial extends Model
{
    protected $table = 'tutorials';
    use HasFactory;
    protected $fillable = [
        'titulo',
        'passou',
        'passod',
        'passot',
        'passoq',
        'passoc',
    ];

    public function user(){
        return $this->BelongsTo('App\Models\User');
    }
    
}
