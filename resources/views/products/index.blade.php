@extends('layouts.app')
@section('metaTitle', 'I nostri fumetti!')

@section('content')
<section class="black_section">
    <div class="container">
        <div class="main_content">
            @forelse ($comics as $key => $comic)
            <div class="card">

                <a href="{{route('prodotto', ['id' => $loop->index])}}">

                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                    <h3>{{ $comic['title'] }}</h3>
                    <h4>{{ $comic['price'] }}</h4>
    
                   
    
                </a>

            </div>
            @empty
                <p>non ci sono prodotti</p>
            @endforelse

            {{-- @forelse ($comics as $key => $comic)
            <div class="card">

                <a href="{{route('prodotto', ['id' => $key])}}">

                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                    <h3>{{ $comic['title'] }}</h3>
                    <h4>{{ $comic['price'] }}</h4>
    
                   
    
                </a>

            </div>
            @empty
                <p>non ci sono prodotti</p>
            @endforelse --}}
            


        </div>
    </div>

</section>
@endsection