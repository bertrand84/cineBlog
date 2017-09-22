@extends("layout")

@section('content')

<main>

    <div class="carousel-presentation">
        <!--carouseL-->
        <div id="carousel" class="owl-carousel">
            @foreach($films as $film)
            <div class="item">
                <h3>{!! $film['titre'] !!}</h3>
                <p>Au cinema le: {!! Carbon\Carbon::parse($film['date'])->format('d/m/Y')  !!}</p>
                <img src="{!! $film['image'] !!}">
            </div>
            @endforeach

            @foreach($animations as $animation)
            <div class="item">
                <h3>{!! $animation['titre'] !!}</h3>
                <p>Au cinema le: {!! Carbon\Carbon::parse($animation['date'])->format('d/m/Y') !!}</p>
                <img src="{!! $animation['image'] !!}">
            </div>
            @endforeach
        </div>
        <!-- fin carousel -->
    </div>

</main>


@endsection