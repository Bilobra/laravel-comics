
@php 
  $links = [
    [
      'text' => 'Characters',
    ],
    [
      'text' => 'Comics',
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
                    <!-- il primo giorno facciamo vedere come popolare il menu dinamicamente usando un array in data() -->
                    <li class="nav-link">
                        <a class="{{ $loop->first ? 'active' : '' }}">
                            {{ $link['text'] }}
                        </a>
                    </li>
                  @endforeach

                </ul>

            </nav>
        </div>
    </div>
</header>