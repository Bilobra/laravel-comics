
@extends('layouts.app')

@section('metaTitle',$comic['title'])
@section('content')

    {{-- @dump($comic) --}}
    <div class="">
        <div class="container">
           

                <div class="card_product">
            
                    {{-- <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}"> --}}
                    <div class="row">
                        <div class="col col_description">
                            <h3 class="title">{{ $comic['title'] }}</h3>
                            <div class="avaiable">
                                <div class="price_wrapper">

                                    <h4>U.S. Price: </h4>
                                    <p class="price">{{ $comic['price'] }}</p>
                                </div>
                                <h5>avaiable</h5>
                                <select name="" id="">
                                    <option value="Check Avaiability">Check Avaiability</option>
                                </select>
                            </div>
                            <div>
                                <p class="description">
                                    {{$comic['description']}}
                                </p>
                            </div>

                        </div>
                        <div class="col">
                            <p class="add_description">Advertisement</p>
                            <div class="add_img">
                                <img src="{{asset('img/adv.jpg')}}" alt="img_add">
                            </div>
                        </div>
                    </div>
            
                    
                </div>
            
        </div>

        <div class="section">
            <div class="container">
                <div class="row row_info">
                    <div class="col">
                        <h4 class="title">Talent</h4>
                        <div class="artists">
                            <p>Art By:</p>
                            <p>
                                {{$comic['type']}}
                                {{-- @forelse ($comics as $comic)
                                    <p>
                                        {{$comic['title']}}
                                    </p>
                                @empty
                                    <p>non ci sono artisti</p>
                                @endforelse --}}
                            </p>
                        </div>
                        <div class="authors">
                            <p>Written by:</p>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection