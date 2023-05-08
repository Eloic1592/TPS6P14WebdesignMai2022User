<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    protected $table = "utilisateur";
    protected $fillable = ['id','nom','prenom','email','password'];
    //POUR EVITER L'INSERTION DES COLONNES : UPDATE_AT, CREATE_AT
    public $timestamps = false;
}
