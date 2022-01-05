<div class="shell-nav-products">
    <div class="nav-products">
        @foreach ($white_links as $link_white)
        <div class="container">
            <h3>{{strtoupper($link_white['text'])}}</h3>
            <img src="{{$link_white['url_img']}}" alt="{{$link_white['alt']}}">
        </div>   
        @endforeach
    </div>
</div>