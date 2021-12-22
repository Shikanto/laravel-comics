@php
    $blue_links= [
        [
          "url_img"=> "img/buy-comics-digital-comics.png",
          "alt"=> "digital comics",
          "text"=> "DIGITAL COMICS",
        ],
        [
          "url_img"=> "img/buy-comics-merchandise.png",
          "alt"=> "dc merchandise",
          "text"=> "DC MERCHANDISE",
        ],
        [
          "url_img"=> "img/buy-comics-subscriptions.png",
          "alt"=> "subscription",
          "text"=> "SUBSCRIPTION",
        ],
        [
          "url_img"=> "img/buy-comics-shop-locator.png",
          "alt"=> "digital comics",
          "text"=> "COMIC SHOP LOCATOR",
        ],
        [
          "url_img"=> "img/buy-dc-power-visa.svg",
          "alt"=> "dc power visa",
          "text"=> "DC POWER VISA",
        ],
    ]

@endphp

<div class="section-nav-blue">
    <div class="container-blue-nav">
      <div class="blu-container">
          @foreach ($blue_links as $link_blue)
          <div class="card">
            <img src="{{$link_blue['url_img']}}" alt="{{$link_blue['alt']}}" />
            <h4>{{strtoupper($link_blue['text'])}}</h4>
          </div>
          @endforeach
      </div>
    </div>
  </div>