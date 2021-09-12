@extends('frontend.master')

@section('contents')
    <!-- New Arrivals section start -->
    <div class="collection_text">Search Result</div>

    <div class="layout_padding gallery_section">
        <div class="container">
            <div class="row">
                @if($products->count()>0)
                    @foreach($products as $data)
                        <div class="col-sm-4">
                            <div class="best_shoes">
                                <p class="best_text">{{$data->name}}</p>
                                <div class="shoes_icon"><img src="images/shoes-img4.png"></div>
                                <div class="star_text">
                                    <div class="left_part">
                                        <ul>
                                            <li><a href="#"><img src="images/star-icon.png"></a></li>
                                            <li><a href="#"><img src="images/star-icon.png"></a></li>
                                            <li><a href="#"><img src="images/star-icon.png"></a></li>
                                            <li><a href="#"><img src="images/star-icon.png"></a></li>
                                            <li><a href="#"><img src="images/star-icon.png"></a></li>
                                        </ul>
                                    </div>
                                    <div class="right_part">
                                        <div class="shoes_price">$ <span style="color: #ff4e5b;">{{$data->price}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                @else
                    <div>
                        <h2>No products found</h2>
                    </div>
                @endif
            </div>

            <div class="buy_now_bt">
                <button class="buy_text">Buy Now</button>
            </div>
        </div>
    </div>
    <!-- New Arrivals section end -->
@endsection
