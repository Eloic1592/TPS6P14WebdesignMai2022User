@extends('forme.forme')
@section('title') Liste des articles @endsection

@section('content')
<div class="pagetitle">
      <h1>Liste des articles</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Liste des articles</a></li>

        </ol>
      </nav>
    </div>


    <p><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal"><a style="color:white;">Rechercher un article</a></button></p>
              <div class="modal fade" id="largeModal" tabindex="-1">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Rechercher un article</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form class="row g-3" action="{{ url('Article/recherchearticle') }}" method="POST">
                    @csrf
                    <div class="col-md-6">
                            <div class="form-floating">
                            <input type="text" name="categorie" class="form-control" id="floatingZip" placeholder="Categorie de l' article"  />
                                <label for="floatingZip">Categorie du  article</label>
                            </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                        <input type="text" name="titre" class="form-control" id="floatingZip" placeholder="Titre de l' article"  />
                            <label for="floatingZip">Titre de l' article</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating">
                        <input type="text" name="contenu" class="form-control" id="floatingZip" placeholder="Contenu de  l' article"  />
                            <label for="floatingZip">Contenu de  l' article</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                      <input type="submit" class="btn btn-primary" value="Valider">
                    </div>
                </form>
                  </div>
                </div>
            </div><!-- End Large Modal-->
              </div>


    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    @foreach ($liste_article as $liste_article)
                    <div class="col-lg-4">
                            <div class="card">
                                {!! $liste_article->Photo !!}
                                <div class="card-body">
                                <h5 class="card-title">{{ $liste_article->titre }}</h5>
                                <p class="card-text">{{ $liste_article->resume }}</p>
                                {!! $liste_article->Details !!}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                {!! $pagination !!}
            </div>
        </div>

        @if(session()->has('recherchearticle'))

        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    @foreach (session('recherchearticle') as $liste_article)
                    <div class="col-lg-4">
                            <div class="card">
                                {!! $liste_article->Photo !!}
                                <div class="card-body">
                                <h5 class="card-title">{{ $liste_article->titre }}</h5>
                                <p class="card-text">{{ $liste_article->resume }}</p>
                                {!! $liste_article->Details !!}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                {!! $pagination !!}
            </div>
        </div>

    @endif
    </section>

@endsection

