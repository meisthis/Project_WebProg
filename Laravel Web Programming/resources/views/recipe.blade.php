@extends('welcome')

@section('title', 'Recipe Page')

@section('content')
    <h1>Recipes</h1>
    <hr>

    <div class="recipes">
        <div>
            @foreach($recipes as $recipe)
                <div>
                    {{--buat nongolin data di database--}}
                    <span>{{$recipe->Recipe_Name}}</span>
                    <span>{{$recipe->Recipe_Name}}</span>
                    <span>{{$recipe->Recipe_Name}}</span>
                </div>
            @endforeach
        </div>
        {{--percobaan image--}}
        {{--nanti tinggal di looping aja, tiap 3 gambar dia pindah ke baris berikutnya--}}
        {{--total gambar yang bisa ditampung 9, dibikin paginating aja kalau resepnya lebih banyak--}}
        {{--atau ga heightnya dibikin dinamis, makin banyak makin panjang kebawah pagenya--}}
        <img src="{{asset('img/brownies.jpg')}}">
        <img src="{{asset('img/nasi goreng.jpg')}}">
        <img src="{{asset('img/Sandwich.jpg')}}">
        <img src="{{asset('img/Spaghetti bolognese.jpg')}}">
    </div>


@endsection