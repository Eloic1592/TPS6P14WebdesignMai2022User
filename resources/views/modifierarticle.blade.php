@extends('forme')

@section('content')
<section class="section">
        <div class="row">
            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Ajouter Article</h5>

                        <!-- Floating Labels Form -->
                        <form class="row g-3" action="{{ url('Article/editarticle') }}" method="POST">
                            @csrf
                        <input type="hidden"  name="id" class="form-control" id="floatingPassword" value="{{$article->id}}" required/>

                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text"  name="titre" class="form-control" id="floatingPassword"  value="{{$article->titre}}" placeholder="Titre de l'article" required/>
                                <label for="floatingPassword">Titre de l'article</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" name="resume" class="form-control" id="floatingZip"  value="{{$article->resume}}" placeholder="Resume de l'article" required/>
                                <label for="floatingZip">Resume</label>
                            </div>
                        </div>

                        <h5 class="card-title">Contenu de l'article</h5>
                        <!-- TinyMCE Editor -->
                        <textarea class="tinymce-editor" name="contenu" required>
                                 {!!$article->contenu!!}
                        </textarea><!-- End TinyMCE Editor -->

                            <div class="col-md-12">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Valider</button>
                                </div>

                            </div>
                        </form><!-- End floating Labels Form -->
                        @if(session()->has('success'))
                        @section('message')
                        @section('type_message')alert alert-warning alert-dismissible fade show @endsection
                            Information modifiee avec succes!
                        @endsection
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection