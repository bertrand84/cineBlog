@extends('layout')

@section('content')
    <div id="form-contact">
        <form id="myform" novalidate method="post" action="{{ route('contact.postContact') }}" enctype="multipart/form-data">
            {{ csrf_field() }}

                    <div class="contact">
                        <label class="lab-contact" for="nomContact">Nom : </label>
                        <input type="text" class="form-contact" id="nomContact" name="nomContact">
                    </div>

                    <div class="contact">
                        <label class="lab-contact" for="mailContact">Mail : </label>
                        <input type="text" class="form-contact" id="mailContact" name="mailContact">
                    </div>

                    <div class="contact">
                        <label class="lab-contact" for="messageContact">Message : </label>
                        <textarea class="form-contact" id="messageContact" name="messageContact"></textarea>
                    </div>

                <div class="validation-button"><input type="submit" class="btn btn-success, bouton"></div>

            </div>

        </form>



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

    
    
