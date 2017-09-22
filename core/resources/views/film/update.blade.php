@extends('layout')

@section('content')

    <!--PAGE DES UP-DATE FILM-->

    <div class="form-up"> <!--DEBUT DIV FORM-UP-->
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    @endif
    <!--DEBUT "UP-FORM-->
        <form id="up-form" novalidate method="post" action="{{route('film.update',['id' => $film['id']])}}" enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="update">
                <label class="labUpdate">IMAGE</label>
                <input class="up-date" type="text" name="image" value="{!! $film['image'] !!}">
            </div>

            <div class="update">
                <label class="labUpdate">TITRE</label>
                <input class="up-date" type="text" name="titre" value="{!! $film['titre'] !!}">
            </div>

            <div class="update">
                <label class="labUpdate">SYNOPSIS</label>
                <input class="up-date" type="text" name="synopsis" value="{!! $film['synopsis'] !!}">
            </div>

            <div class="update">
                <label class="labUpdate">TRAILER</label>
                <input class="up-date" type="text" name="trailer" value="{!! $film['trailer'] !!}">
            </div>

            <div class="update">
                <label class="labUpdate">TYPE</label>
                <input class="up-date" type="text" name="type" value="{!! $film['type'] !!}">
            </div>

            <div class="update">
                <label class="labUpdate">ACTEUR</label>
                <input class="up-date" type="text" name="acteur" value="{!! $film['acteur'] !!}">
            </div>

              <div class="update">
                <label class="labUpdate">REALISATEUR</label>
                <input class="up-date" type="text" name="realisateur" value="{!! $film['realisateur'] !!}">
            </div>

            <div class="update">
                <label class="labUpdate">DATE</label>
                <input class="up-date calendar" name="date" value="{!! $film['date'] !!}">
            </div>

            <div class="update">
                <label class="labUpdate">DISTRIBUTEUR</label>
                <input class="up-date" type="text" name="distributeur" value="{!! $film['distributeur'] !!}">
            </div>

            <div class="update">
                <label class="labUpdate">VALIDATION</label>
                <input class="bouton-update" type="submit" value="validez">
            </div>
        </form><!-- FIN UP-FORM-->
    </div> <!--FIN DIV FORM-UP-->

@endsection