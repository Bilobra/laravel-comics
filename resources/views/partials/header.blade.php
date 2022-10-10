
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
      'routeName' => null,

    ],
    [
      'text' => 'Tv',
      'routeName' => null,

    ],
    [
      'text' => 'Games',
      'routeName' => null,

    ],
    [
      'text' => 'Collectibles',
      'routeName' => null,

    ],
    [
      'text' => 'Videos',
      'routeName' => null,

    ],
    [
      'text' => 'Fans',
      'routeName' => null,

    ],
    [
      'text' => 'News',
      'routeName' => null,

    ],
    [
      'text' => 'Shop',
      'routeName' => null,

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