<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $table = "article";
    protected $fillable = ['id' , 'titre' , 'resume' , 'idcategorie' , 'contenu'];
    //POUR EVITER L'INSERTION DES COLONNES : UPDATE_AT, CREATE_AT
    public $timestamps = false;
}
?>
