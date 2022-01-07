@php
    $white_links= [
        [
          "url_img"=> "img/chat-icons.png",
          "alt"=> "chat icon",
          "text"=> "DIGITAL COMICS",
        ],
        [
          "url_img"=> "img/books-icons.png",
          "alt"=> "books icon",
          "text"=> "SHOP DC",
        ],
        [
          "url_img"=> "img/position-icons.png",
          "alt"=> "position icon",
          "text"=> "COMIC SHOP LOCATOR",
        ],
        [
          "url_img"=> "img/shirt-icons.png",
          "alt"=> "shirt subscription icon",
          "text"=> "SUBSCRIPTION",
        ],
    ]

@endphp

<div class="shell-nav-products">
    <div class="nav-products">
        @foreach ($white_links as $link_white)
        <div class="container">
            <h3>{{strtoupper($link_white['text'])}}</h3>
            <img src="{{asset($link_white['url_img'])}}" alt="{{$link_white['alt']}}">
        </div>   
        @endforeach
    </div>
</div>