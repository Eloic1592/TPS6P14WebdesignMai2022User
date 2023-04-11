<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class listearticle extends Model
{

    protected $table = "listearticle";
    protected $fillable = ['id' , 'titre', 'resume', 'idcategorie', 'contenu', 'categorie'];
    //POUR EVITER L'INSERTION DES COLONNES : UPDAT,E_AT, CREATE_AT
    public $timestamps = false;
}
?>
