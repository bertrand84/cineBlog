@extends('layout')

@section('content')
    <div class="form-container2">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel-ajout">
                    <div class="head">AJOUT FILMS</div>
                    <div class="body-ajout">
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

                        <form id="ajout-films" novalidate method="post" action="{{route('actudvd.create')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-5">
                                    <label class="labAjout">titre</label>
                                </div>
                                <div class="col-md-6">
                                    <input class="movie-ajout" type="text" name="titre" >
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-5">
                                    <label class="labAjout">synopsis</label>
                                </div>
                                <div class="col-md-6">
                                    <input class="movie-ajout" type="longtext" name="synopsis">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-5">
                                    <label class="labAjout">image</label>
                                </div>
                                <div class="col-md-6">
                                    <input class="movie-ajout" type="text" name="image" src="image">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-5">
                                    <label class="labAjout">acteur</label>
                                </div>
                                <div class="col-md-6">
                                    <input class="movie-ajout" type="text" name="acteur">
                                </div>
                            </div>

                             <div class="row">
                                <div class="col-md-5">
                                    <label class="labAjout">realisateur</label>
                                </div>
                                <div class="col-md-6">
                                    <input class="movie-ajout" type="text" name="realisateur">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-5">
                                    <label class="labAjout">distributeur</label>
                                </div>
                                <div class="col-md-6">
                                    <input class="movie-ajout" type="text" name="distributeur">
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-5">
                                    <label class="labAjout">type</label>
                                </div>
                                <div class="col-md-6">
                                    <input class="movie-ajout" type="text" name="type">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-5">
                                    <label class="labAjout">trailer</label>
                                </div>
                                <div class="col-md-6">
                                    <input class="movie-ajout" type="text" name="trailer">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-5">
                                    <label class="labAjout">date</label>
                                </div>
                                <div class="col-md-6">
                                    <input class="calendar movie-ajout" name="date"> 
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-5">
                                    <label class="labAjout">support</label>
                                </div>
                                <div class="col-md-6">
                                    <input class="movie-ajout" type="text" name="support">
                                </div>
                            </div>

                            <div class="row">
                                <div id="val">
                                    <input class="valid" type="submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection