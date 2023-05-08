@extends('forme.forme')
@section('title') Details de l'article @endsection

@section('content')
<div class="pagetitle">
      <h1>Details de l'article</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Details de l'article</a></li>

        </ol>
      </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{$Article->titre}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{$Article->resume}}</h6>
                            {!!$Article->contenu!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

