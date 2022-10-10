
@php 
  $links = [
    [
      'text' => 'Characters',
      'routeName' => 'home',

    ],
    [
      'text' => 'Comics',
      'routeName' => 'prodotti',
    ],
    [
      'text' => 'Movies',
      'routeName' => 'movies',

    ],
    [
      'text' => 'Tv',
      'routeName' => 'tv',

    ],
    [
      'text' => 'Games',
      'routeName' => 'games',

    ],
    [
      'text' => 'Collectibles',
      'routeName' => 'collectibles',

    ],
    [
      'text' => 'Videos',
      'routeName' => 'videos',

    ],
    [
      'text' => 'Fans',
      'routeName' => 'fans',

    ],
    [
      'text' => 'News',
      'routeName' => 'news',

    ],
    [
      'text' => 'Shop',
      'routeName' => 'shop',

    ],
  ];
@endphp

<header>
    <div class="container">

        <div class="nav-wrapper">

            <div class="logo">
                <img src="{{asset('img/dc-logo.png')}}" alt="logo dc">
            </div>
            <nav class="nav">
               
                <ul>
                    @foreach($links as $link)
                    
                    <li class="nav-link">
                        <a class="{{ Route::currentRouteName() === $link['routeName'] ? 'active' : '' }}" href="{{isset($link['routeName'])? route($link['routeName']) : '/' }}">
                            {{ $link['text'] }}
                        </a>
                    </li>
                  @endforeach

                </ul>

            </nav>
        </div>
    </div>
</header>

{{-- Request::route()->getName() === $link['routeName'] ? 'active' : '' --}}
{{-- Route::currentRouteName() === $link['routeName'] --}}
{{-- Route::currentRouteName() --}}