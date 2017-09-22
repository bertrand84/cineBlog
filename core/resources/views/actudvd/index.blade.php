@extends('layout')

@section('ajouter')

    <a href="{{url('actudvd/create') }}" class="link-header">ajouter</a>
@endsection

@section('content')
    @if (session('success'))
        <div class="message">{{ session('success') }}></div>
    @endif



    <section id="fiche">
        @foreach($actudvds as $actudvd)

            <div class="movie">
                <div class="title-synopsis-img">
                    <div class="movie-img">
                        <img src="{!! $actudvd['image'] !!}">
                    </div>

                    <div class="movie-title">
                        <h2>{!! $actudvd['titre'] !!}</h2>
                    </div>


                    <div class="synopsis">
                        <p>{!! $actudvd['synopsis'] !!}</p>
                    </div>
                </div>

                @if (Auth::check() && Auth::user()->profil == 1)
                <div class="ajout-supp">
                    <div class="up">
                        <a href="{{route('actudvd.update',['id' => $actudvd['id']])}}">update</a>
                    </div>
                    <div class="remove">
                        <a href="{{route('actudvd.remove',['id' => $actudvd['id']])}}">supprimer</a>
                    </div>
                </div>
                @endif

                <div class="trailer-info">
                    <div class="movie-trailer">
                        <iframe src="{!! $actudvd['trailer'] !!}" frameborder="0" allowfullscreen></iframe>
                    </div>

                    <div class="movie-info">

                        <div class="movie-acteur">
                            <p>{!! $actudvd['acteur'] !!}</p>
                            <p>{!! $actudvd['realisateur'] !!}</p>
                        </div>
                        <div class="movie-type">
                            <p>{!! $actudvd['type'] !!}</p>
                        </div>

                        <div class="movie-dist">
                            <p>{!! $actudvd['distributeur'] !!}</p>
                        </div>

                        <div class="support">
                            <p>{!! $actudvd['support'] !!}</p>
                        </div>

                        <div class="dateSortie">
                            <p>{!! Carbon\Carbon::parse($actudvd['date'])->format('d/m/Y') !!}</p>
                        </div>
                    </div><!--MOVIE INFO-->
                </div><!--TRAILER INFO-->
            </div> <!--MOVIE-->

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