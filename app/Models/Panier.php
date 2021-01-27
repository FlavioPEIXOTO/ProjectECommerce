<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    use HasFactory;

    protected $fillable =[
        'user_id',
        'jeu1',
        'jeu2',
        'jeu3',
        'jeu4',
        'jeu5',
    ];
}
