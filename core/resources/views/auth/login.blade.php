@extends('layouts.app')

@section('content')
<div class="container">
    <div id="formLogin" class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel-log">
                <div class="panel-head">SE CONNECTE</div>
                <div class="panel-bodyLog">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label, lab-log-register">Addresse E-Mail </label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="formLog" name="email" value="{{ old('email') }}" required autofocus>
                                <p class="error-mail error-toggle">Veuillez entrer un mail valide.</p>

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
                                <input id="password" type="password" class="formLog" name="password" required>
                                <p class="error-password error-toggle">Le mot de passe doit contenir au moins 1 lettre, 1 chiffre et un caractère spécial (#_&^*£§,;./:!"'|()\?+=-$%) 
                                et faire au moins 8 caractères.</p>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="checkbox">
                                    <div class="label-check">
                                        <label>
                                            Se souveinr de moi                                      </label>
                                    </div>
                                    <div class="checkboxInput">
                                        <input class="check-log" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="log">
                                    <button type="submit" class="btn btn-primary bouton btn-login">
                                        Connectez-vous                                   </button>
                                </div>

                                <div class="reset-password">
                                    <a id="pass" class="btn btn-link bouton" href="{{ url('/password/reset') }}">
                                        Mot de passe oublie ?
                                    </a>
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
