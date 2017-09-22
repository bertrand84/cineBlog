


    @extends('layout')

    @section('ajouter')

        <a href="{{ url('film/create') }}" class="link-header">ajouter</a>
    @endsection

    @section('content')

        @if (session('success'))
            <div class="message">{{ session('success') }}></div>
        @endif



        <section id="fiche">
            @foreach($films as $film)

                <div class="movie">
                    <div class="title-synopsis-img">
                        <div class="movie-img">
                            <img src="{!! $film['image'] !!}">
                        </div>

                        <div class="movie-title">
                            <h2>{!! $film['titre'] !!}</h2>
                        </div>

                        <div class="synopsis">
                            <p>{!! $film['synopsis'] !!}</p>
                        </div>
                    </div>

                    @if (Auth::check() && Auth::user()->profil == 1)
                    <div class="ajout-supp">
                        <div class="up">
                            <a href="{{route('film.update',['id' => $film['id']])}}">update</a>
                        </div>
                        <div class="remove">
                            <a href="{{route('film.remove',['id' => $film['id']])}}">supprimer</a>
                        </div>

                    </div>
                    @endif

                    <div class="trailer-info">
                        <div class="movie-trailer">
                            <iframe src="{{ $film['trailer'] }}" frameborder="0" allowfullscreen></iframe>
                        </div>

                        <div class="movie-info">
                            <div class="movie-acteur">
                                <p>{!! $film['acteur'] !!}</p>
                                <p>{!! $film['realisateur'] !!}</p>
                            </div>
                            <div class="movie-type">
                                <p>{!! $film['type'] !!}</p>
                            </div>

                            <div class="movie-dist">
                                <p>{!! $film['distributeur'] !!}</p>
                            </div>

                            <div class="dateSortie">
                                <p>{!! Carbon\Carbon::parse($film['date'])->format('d/m/Y')  !!}</p>
                            </div>
                        </div>
                    </div>
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




