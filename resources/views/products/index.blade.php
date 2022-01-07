@extends("layouts.default")

@section('page_title', 'Prodotti DC comics')

@section('jumbotron-content')

    <div class="blue-space-jumbotron">
        <div class="container-img-product">
            <img src="{{asset($comic['thumb'])}}" alt="">
        </div>
    </div>
    
@endsection

@section('main-content')
    @include('partials/details_product') 
@endsection

