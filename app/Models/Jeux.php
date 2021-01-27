<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jeux extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'description',
        'date_sortie',
        'editeur_dev',
        'photo',
        'quantite',
        'prix',
        'code_activation',
        'ps4',
        'ps5',
        'xbox_one',
        'xbox_serie_x',
        'switch',
        'pc',
        'action',
        'aventure',
        'jeu_de_tir',
        'rpg',
        'horreur',
        'sport',
        'combat',
        'course',
        
    ];
}
