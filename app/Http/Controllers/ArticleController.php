<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\listearticle;
use App\Models\Categorie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

class ArticleController extends Controller
{
    public function index() {
        $articles = listearticle::simplePaginate(3);

        return view('index',[
            'articles' => $articles ,
            'link' => $articles->links() 
               ]);
    }

    public function getarticle($id) {
        $article = Cache::remember('article_' . $id, 60, function () use ($id) {
            return Article::find($id);
        });
    
        return view('Details', compact('article'));
    }
    public function newArticle(Request $request) {
        Article::create($request->all());    
        return redirect()->back()->with('success', 'L\'entrée a été enregistree avec succès.');
    }

    // Vers ajout articles
    public function redirectnewArticle() {
        $categorie = Categorie::all();
        return view('ajoutarticle',compact('categorie'));
        }  
        
    // Vers modif articles
    public function redirecteditArticle($id) {
        $article = Article::find($id);
        return view('modifierarticle',['article' => $article]);
        } 
        
    //  modif articles
        public function editarticle(Request  $request) {
            $article = Article::find(request('id')); // Trouver l'entrée dans la base de données
            $article->update($request->all());
            return redirect()->back()->with('success', 'L\'entrée a été mise à jour avec succès.');
        
        }   

    
    //  modif articles
        public function recherche(Request  $request) {
            $query = DB::table('listearticle');
            if ($request->has('titre')) {
                $query->where('titre', 'like', '%' . $request->input('titre') . '%');
            }
            if ($request->has('resume')) {
                $query->where('resume', 'like', '%' . $request->input('resume') . '%');
            }
            // ajouter une condition pour le champ "age" si le critère de recherche est fourni
            if ($request->has('contenu')) {
                $query->where('contenu','like', '%' . $request->input('contenu') . '%');
            }
            // exécuter la requête et récupérer les enregistrements correspondants
            $articles = $query->get();
            return view('resultat',['articles' => $articles]);   
            }   
    


}