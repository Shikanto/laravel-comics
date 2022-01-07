@php

function checkTitle($titleComic){
    

    if(strstr($titleComic,'#')){
        $stringToReplace = substr($titleComic, strpos($titleComic, '#'));
        $newTitle = str_replace($stringToReplace, ' ', $titleComic);
        return $newTitle;
        
    } elseif (strstr($titleComic, 'Vol.')) {
        $stringToReplace = substr($titleComic, strpos($titleComic, 'Vol.'));
        $newTitle = str_replace($stringToReplace, ' ', $titleComic);
        return $newTitle;
        
    }else {
        return $titleComic;
    }
    
}       
@endphp
@extends("layouts.default")

@section('page_title', 'Homepage DC comics')

@section('hero-content')
<div class="container-series">
    <div class="series">
      <h1>CURRENT SERIES</h1>
    </div>
    <div class="card-comics-container" >
        @foreach ($dati_comics as $info_comic)
        <div class="card-comics">
            <a href="{{ route('products.index', ["id" => $loop -> index]) }}">
              <img src="{{$info_comic['thumb']}}" alt="{{$info_comic['title']}}" />
              <h4 class="title-comics">{{strtoupper(checkTitle($info_comic['title']))}}</h4>
            </a>
        </div>
        @endforeach
      </div>
    <div class="loadBtn"> 
      <a >LOAD MORE</a>
    </div>
  </div>
</div>
@include("partials/fast_nav_blue")
@endsection

