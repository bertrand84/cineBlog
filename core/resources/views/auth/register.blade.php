@extends('layouts.app')

@section('content')
<div id="formRegister" class="container, Form-reg">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel-register">
                <div class="panel-head">CREER UN COMPTE</div>
                <div class="panel-bodyRegister">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label, lab-log-register">Nom</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-register" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label, lab-log-register">Addresse E-Mail </label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-register" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label, lab-log-register">Mot De Passe</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-register" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label, lab-log-register">Confirmation Mot De Passe</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-register" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="register">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary, bouton">
                                        Enregistre                                   </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
