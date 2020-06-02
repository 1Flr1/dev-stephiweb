<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propriete extends Model
{
    protected $fillable =[
        'user_id','type','surface', 'prix', 'adresse', 'chambres', 'salles_de_bains', 'balcons', 'piscines', 'jardin', 'garages', 'description',
    ];
}
