<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = "article";
    protected $fillable = ['id', 'categorie', 'titre', 'resume', 'image', 'contenu', 'idauteur'];
    //POUR EVITER L'INSERTION DES COLONNES : UPDATE_AT, CREATE_AT
    public $timestamps = false;

    public function getAuteurnameAttribute(){
        $auteur=Auteur::find($this->attributes['idauteur']);
        return "<td>".$auteur->nom.' '.$auteur->prenom."</td>";
    }

    public function getPhotoAttribute(){
        if($this->attributes['image']){
            $asset = route('storage', ['filename' => $this->attributes['image']]);
            return  "<img src='".$asset."' class='card-img-top'>";
        }


}
    public function getDetailsAttribute(){

        $url = route('article.detailsarticle', ['id' => $this->attributes['id']]);
        return  "<button type='button' class='btn btn-outline-primary'><a href='" . $url . "'>Details</a></button>";
}


    public function getModifierAttribute(){

            $url = url('/Article/getmodif/' . $this->attributes['id']);
            return  "<button type='button' class='btn btn-primary'><a style='color:white; href='"  . $url . "'>Modifier</a></button>";
    }
    public function getPublierattribute(){

        $Publication=Publication::where('idarticle', $this->attributes['id'])->first();

        if($Publication->etat==1){
            $url = url('/Article/publier/' . $this->attributes['id']);
            return "<button type='button' class='btn btn-secondary'><a style='color:white;' href='" . $url . "'>Publier</a></button>";
        }
        return '<span class="badge bg-danger">Deja publie</span>';
    }

    public function getDatepublicAttribute(){
        $Publication=Publication::where('idarticle', $this->attributes['id'])->first();
        return " <p><span class='badge bg-light text-dark'>Publie le ".$Publication->created_at."</span></p>";
        }

}
