
@extends('layouts.app')

@section('metaTitle',$comic['title'])
@section('content')

    {{-- @dump($comic) --}}
    <div class="black_section">
        <div class="container">
            <div class="main_content">

                <div class="card">
            
                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                    <h3>{{ $comic['title'] }}</h3>
                    <h4>{{ $comic['price'] }}</h4>
            
                    <p>
                        {{$comic['description']}}
                    </p>
                </div>
            </div>
        </div>

    </div>

@endsection