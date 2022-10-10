
@extends('layouts.app')

@section('metaTitle',$comic['title'])
@section('content')

   
    <div class="">
        <div class="banner">
            <div class="img_comic">
                <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">

            </div>
        </div>
        <div class="container">
           
                <div class="card_product">
            
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
                            <div class="artists_wrapper">
                                @forelse ($comic['artists'] as $artist)
                               
                                    
                                <a href="#">{{$artist}},</a> 
                                    
                                
                                @empty
                                    <p>non ci sono artisti</p>
                                @endforelse
                            </div>
                        </div>
                        <div class="authors">
                            <p>Written by:</p>
                            <div class="authors_wrapper">
                                @forelse ($comic['writers'] as $writer)
                                
                                   <a href="#">{{$writer}},</a> 
                                
                                @empty
                                    <p>non ci sono autori</p>
                                @endforelse
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <h4 class="title">Specs</h4>
                        <div class="series">
                            <p>Series:</p>
                            <div><a href="#" class="series_comic">{{$comic['series']}}</a></div>
                        </div>
                        <div class="price">
                            <p>U.S. Price: </p>
                            <div>{{$comic['price']}}</div>
                        </div>
                        <div class="date">
                            <p>On Sale Date:</p>
                            <div>{{$comic['sale_date']}}</div>
                        </div>
    
                    </div>
                </div>
                
            </div>
        </div>

    </div>

@endsection