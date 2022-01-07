@php

function setFormatDate($date){
    $new_date = \Carbon\Carbon::createFromFormat('Y-m-d', $date)
                    ->format('M d Y');
    return $new_date;
}
    
@endphp

<div class="container-details-product">
    <div class="info-details">
        <div class="talent-info">
            <h2>Talent</h2>
            <div class="container">
                <h4>Art by:</h4>
                <div class="artists">
                    {{collect($comic['artists'])->implode(', ')}}
                </div>
            </div>
            <div class="container">
                <h4>Written by:</h4>
                <div class="writers">
                    {{collect($comic['writers'])->implode(', ')}}
                </div>
            </div>
        </div>
        <div class="specs-info">
            <h2>Specs</h2>
            <div class="container">
                <h4>Series</h4>
                <div class="series">
                   ACTION COMICS
                </div>
            </div>
            <div class="container">
                <h4>U.S. Price:</h4>
                <div class="price">
                    {{$comic['price']}}
                </div>
            </div>
            <div class="container">
                <h4>On Sale Date:</h4>
                <div class="sale-date">
                    {{setFormatDate($comic['sale_date'])}}
                </div>
            </div>
        </div>
    </div>
</div>
@include("partials/navbar_products")