@extends('layouts.app')

@section('content')
<div class="container reset">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel-reset">
                <div class="panel-head-reset">REINITIALISATION MOT DE PASSE</div>
                <div class="panel-bodyReset">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="lab-Reset">
                                <label for="email" class="col-md-4 control-label, Resetlabel">Addresse E-Mail </label>
                            </div>


                            <div class="col-md-6 input-reset">
                                <input id="email" type="email" class="formReset" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="reset-password">
                                    <button type="submit" class="btn btn-primary, bouton">
                                        Demande De Nouveau Mot De Passe                                    </button>
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
