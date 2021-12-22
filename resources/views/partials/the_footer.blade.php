@php
     $list_comics= [
        [
          "title"=> "Characters",
          "href"=> "#",
        ],
        [
          "title"=> "Comics",
          "href"=> "#",
        ],
        [
          "title"=> "Movies",
          "href"=> "#",
        ],
        [ 
          "title"=> "TV",
          "href"=> "#",
        ],
        [
          "title"=> "Games",
          "href"=> "#",
        ],
        [
          "title"=> "Video",
          "href"=> "#",
        ],
        [
          "title"=> "News",
          "href"=> "#", 
        ],
    ];

    $list_shop= [
        [
          "title"=> "Shop DC",
          "href"=> "#",
        ],
        [
          "title"=> "Shop DC Collectibles",
          "href"=> "#",
        ],
    ];

    $list_dc= [
        [
          "title"=> "Terms Of Use",
          "href"=> "#",
        ],
        [
          "title"=> "Privacy policy (New)",
          "href"=> "#",
        ],
        [
          "title"=> "Ad Choices",
          "href"=> "#",
        ],
        [
          "title"=> "Advertising",
          "href"=> "#",
        ],
        [
          "title"=> "Jobs",
          "href"=> "#",
        ],
        [
          "title"=> "Subscriptions",
          "href"=> "#",
        ],
        [
          "title"=> "Talent Workshops",
          "href"=> "#",
        ],
        [
          "title"=> "CPSC Certificates",
          "href"=> "#",
        ],
        [
          "title"=> "Ratings",
          "href"=> "#",
        ],
        [
          "title"=> "Shop Help",
          "href"=> "#",
        ],
        [
          "title"=> "Contact Us",
          "href"=> "#",
        ],
    ];

    $list_sites= [
        [
          "title"=> "DC",
          "href"=> "#",
        ],
        [
          "title"=> "MAD Magazine",
          "href"=> "#",
        ],
        [
          "title"=> "DC Kids",
          "href"=> "#",
        ],
        [
          "title"=> "DC Universe",
          "href"=> "#",
        ],
        [
          "title"=> "DC Power Visa",
          "href"=> "#",
        ],
    ];

    $list_social= [
        [
          "url_img"=> "img/footer-facebook.png",
          "alt" => "Facebook Icon",
        ],
        [
          "url_img"=> "img/footer-twitter.png",
          "alt"=> "Twitter Icon",
        ],
        [
          "url_img"=> "img/footer-youtube.png",
          "alt"=> "Youtube Icon",
        ],
        [
          "url_img"=> "img/footer-pinterest.png",
          "alt"=>"Pinterest Icon",
        ],
        [
          "url_img"=> "img/footer-periscope.png",
          "alt"=> "Periscope Icon",
        ],
    ];
@endphp

<footer>
    <div class="top-footer">
      <div class="container-footer">
        <div class="list-container">
          <div class="list-footer">
            <div class="col-list">
              <h2>DC COMICS</h2>
              <ul class="ul-footer">

                @foreach ($list_comics as $link_comic)
                <li>
                    <a href="{{$link_comic['href']}}">{{ $link_comic['title'] }}</a>
                  </li>     
                @endforeach
                
              </ul>
              <h2>SHOP</h2>
              <ul class="ul-footer">
                @foreach ($list_shop as $link_shop)
                <li>
                    <a href="{{$link_shop['href']}}">{{ $link_shop['title'] }}</a>
                  </li>     
                @endforeach
              </ul>
            </div>
            <div class="col-list">
              <h2>DC</h2>
              <ul class="ul-footer">
                @foreach ($list_dc as $link_dc)
                <li>
                    <a href="{{$link_dc['href']}}">{{ $link_dc['title'] }}</a>
                  </li>     
                @endforeach
              </ul>
            </div>
            <div class="col-list">
              <h2>SITES</h2>
              <ul class="ul-footer">
                @foreach ($list_sites as $link_sites)
                <li>
                    <a href="{{$link_sites['href']}}">{{ $link_sites['title'] }}</a>
                  </li>     
                @endforeach
              </ul>
            </div>
          </div>
          <div class="content-cookies">
            <p>All Site Content TM and © 2020 DC Entertainment, unless otherwise <a href="">noted here</a>. <br> All rights reserved.
            <br><a href="">Cookies Settings</a>
            </p>
          </div>
        </div>
        <div class="jumbo-logo-footer">
          <h1></h1>
        </div>
      </div>
    </div>
    <div class="bot-footer">
      <div class="container-footer">
        <div class="sign-up">
          <a href="#">SIGN-UP NOW!</a>
        </div>
        <div class="follow-us">
          <div>
            <h2>FOLLOW US</h2>
          </div>
          @foreach ($list_social as $link_social)
          <div>
            <img class="img-footer" src="{{$link_social['url_img']}}" alt="" />
          </div>
          @endforeach
          
        </div>
      </div>
    </div>
  </footer>