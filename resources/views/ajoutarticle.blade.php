@extends('forme')

@section('content')
<section class="section">
        <div class="row">
            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Ajouter Article</h5>

                        <!-- Floating Labels Form -->
                        <form class="row g-3" action="{{ url('Article/newArticle') }}" method="POST">
                            @csrf
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text"  name="titre" class="form-control" id="floatingPassword" placeholder="Titre de l'article" required/>
                                <label for="floatingPassword">Titre de l'article</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <select class="form-select"  name="idcategorie"  id="floatingSelect" aria-label="State">
                                @foreach($categorie as $categorie)
                                    <option value="{{ $categorie->id }}">{{ $categorie->categorie }}</option>
                                @endforeach
                                </select>
                                <label for="floatingSelect">Categorie</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" name="resume" class="form-control" id="floatingZip" placeholder="Resume de l'article" required/>
                                <label for="floatingZip">Resume</label>
                            </div>
                        </div>

                        <h5 class="card-title">Contenu de l'article</h5>
                        <!-- TinyMCE Editor -->
                        <textarea class="tinymce-editor" name="contenu" required>
                        </textarea><!-- End TinyMCE Editor -->

                            <div class="col-md-12">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Valider</button>
                                </div>

                            </div>
                        </form><!-- End floating Labels Form -->
                        @if(session()->has('success'))
                        @section('message')
                        @section('type_message')alert alert-success alert-dismissible fade show @endsection
                            Information enregistree!
                        @endsection
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection