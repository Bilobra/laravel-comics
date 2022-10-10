
@php 
  $links = [
    [
      'text' => 'Characters',
    ],
    [
      'text' => 'Comics',
      'routeName' => 'prodotti',
    ],
    [
      'text' => 'Movies',
    ],
    [
      'text' => 'Tv',
    ],
    [
      'text' => 'Games',
    ],
    [
      'text' => 'Collectibles',
    ],
    [
      'text' => 'Videos',
    ],
    [
      'text' => 'Fans',
    ],
    [
      'text' => 'News',
    ],
    [
      'text' => 'Shop',
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
                        <a class="{{ $loop->first ? 'active' : '' }}" href="{{isset($link['routeName'])? route($link['routeName']) : '/' }}">
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