@extends('layout')

@section('ajouter')

       <a href="{{ url('animation/create') }}" class="link-header">ajouter</a>
@endsection
@section('content')

    @if (session('success'))
        <div class="message">{{ session('success') }}></div>
    @endif



        <section id="fiche">

            @foreach($animations as $animation)

                <div class="movie">
                    <div class="title-synopsis-img">
                        <div class="movie-img">
                            <img src="{!! $animation['image'] !!}">
                        </div>

                        <div class="movie-title">
                            <h2>{!! $animation['titre'] !!}</h2>
                        </div>

                        <div class="synopsis">
                            <p>{!! $animation['synopsis'] !!}</p>
                        </div>
                    </div> <!-- title-synopsis-img-->

                    @if (Auth::check() && Auth::user()->profil == 1)
                   <div class="ajout-supp">
                        <div class="up">
                            <a href="{{route('animation.update',['id' => $animation['id']])}}">update</a>
                        </div>
                        <div class="remove">
                            <a href="{{route('animation.remove',['id' => $animation['id']])}}">supprimer</a>
                        </div>
                    </div>
                    @endif

                    <div class="trailer-info">
                        <div class="movie-trailer">
                            <iframe src="{!! $animation['trailer'] !!}" frameborder="0" allowfullscreen></iframe>
                        </div>

                        <div class="movie-info">
                            <div class="movie-acteur">
                                <p>{!! $animation['acteur'] !!}</p>
                                <p>{!! $animation['realisateur'] !!}</p>
                            </div>
                            <div class="movie-type">
                                <p>{!! $animation['type'] !!}</p>
                            </div>

                            <div class="movie-dist">
                                <p>{!! $animation['distributeur'] !!}</p>
                            </div>

                            <div class="dateSortie">
                                <p>{!! Carbon\Carbon::parse($animation['date'])->format('d/m/Y')  !!}</p>
                            </div>
                        </div><!--movie-info-->
                    </div><!--trailer-info-->
                </div> <!-- .movie -->

            @endforeach
        </section>

        @if(count($errors->all()))
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

@endsection