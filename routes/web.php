<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', \App\Http\Controllers\UtilisateurController::class . '@index')->name('index');

Route::get('/mainpage',[\App\Http\Controllers\UtilisateurController::class, 'accueil'])->name('utilisateur.accueilutilisateur');

Route::get('/detailsarticle=ART/{id}article',[\App\Http\Controllers\ArticleController::class, 'details'])->name('article.detailsarticle');

Route::get('/storage/{filename}', function ($filename)
{
    $path = storage_path('app/public/assets/img/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
})->name('storage');


// Fonction post generalisee
Route::post('/{controller}/{method}', function ($controller, $method, Request $request) {
    $controller = app()->make("App\\Http\\Controllers\\{$controller}Controller");
    return $controller->$method($request);
});

