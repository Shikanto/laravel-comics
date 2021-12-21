@php
  $nav_links = [
    [
      "text"=>"CHARACTERS",
      /* "route_name"=> "#", */
    ],
    [
      "text"=>"COMICS",
      /* "route_name"=> "#", */
    ],
    [
      "text"=>"MOVIES",
      /* "route_name"=> "#", */
    ],
    [
      "text"=>"TV",
      /* "route_name"=> "#", */
    ],
    [
      "text"=>"GAMES",
      /* "route_name"=> "#", */
    ],
    [
      "text"=>"COLLECTIBLES",
      /* "route_name"=> "#", */
    ],
    [
      "text"=>"VIDEOS",
      /* "route_name"=> "#", */
    ],
    [
      "text"=>"FANS",
      /* "route_name"=> "#", */
    ],
    [
      "text"=>"NEWS",
      /* "route_name"=> "#", */
    ],
    [
      "text"=>"SHOP",
      /* "route_name"=> "#", */
    ],
  ]
  
@endphp

<header>
<div class="top-header">
  <div class="container">
    <h4>DC POWER VISA </h4>
    <h4>ADDICTIONAL DC SITES </h4>
  </div>
</div>
  <div class="container">
    <div class="navbar">
      <img src="{{asset('img/dc-logo.png')}}" alt="DC logo" />
      <div class="nav-links" >
        <ul class="ul-header">
          @foreach ($nav_links as $link)
          <li >
            <a href="#{{-- {{route($link['route_name'])}} --}}">{{$link['text']}}</a>
          </li>
          @endforeach
    
        </ul>
      </div>
      <div class="search-container">
        <input class="search" type="text" placeholder="Search" name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
      </div>
    </div>
  </div>
</header>