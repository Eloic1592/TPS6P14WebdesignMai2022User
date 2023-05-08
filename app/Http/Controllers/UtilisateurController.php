<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redirect;

class UtilisateurController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function accueil()
    {
        $liste_article=Article::simplePaginate(6);
        return view('acc-user',[
        'liste_article'=>$liste_article,
        'pagination'=>$liste_article->links(),
        ]);
    }

    public function login(Request $request)
    {
        $Utilisateur = Utilisateur::where('email',$request->input('email'))->where('password', md5($request->input('password')))->first();

        if($Utilisateur){
            session()->put('utilisateur', $Utilisateur);

                $liste_article=Article::simplePaginate(3);
                return  redirect()->route('utilisateur.accueilutilisateur');
            }
            return redirect()->back()->with('failure', 'Email ou mot de passe incorrect');
    }

    // Deconnexion
    public function deconnexion(){
        session()->forget('utilisateur');
        return view('login');
    }

    public function loginuser()
    {
        return view('login');
    }

}
