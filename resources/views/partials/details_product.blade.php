<section>
    <div class="container-product">
        <div class="details-comic">
            <h1>{{$comic['title']}}</h1>
            <div class="container-price-availability">
                <div class="price-availability">
                    <div class="price-comic">
                        U.S. Price: <span>{{$comic['price']}}</span>
                    </div>
                    <div class="availability-comic">
                        AVAILABLE
                    </div>
                </div>
                <div class="availability-check">
                    Check availability  <i class="fas fa-sort-down"></i>
                </div>
            </div>
            <div class="container-description-comic">
               {{!! $comic['description'] !!}}
            </div>
        </div>
        <div class="advertsiment">
            <h3>ADVERTSIMENT</h3>
            <div>
                <img src="{{asset('img/adv.jpg')}}" alt="adv">
            </div>
        </div>
    </div>
</section>
@include("partials/table_details_product")