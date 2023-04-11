@extends('forme')

@section('title')  Details Article @endsection

@section('content')
    <div class="pagetitle">
        <h1>Details de l'article</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">{{ $article->titre }}</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row align-items-top">
            <div class="col-lg-12">
                <!-- Default Card -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->titre }}</h5>
                        <div ><emp>{{ $article->resume }}</emp></div>
                        {!! $article->contenu !!}
                    </div>
                </div><!-- End Default Card -->
            </div>
        </div>
    </section>

@endsection