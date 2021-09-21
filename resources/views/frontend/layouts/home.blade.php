@extends('frontend.master')
@section('slider')
    @include('frontend.partials.slider')
@endsection
@section('contents')
    <form action="{{route('date.search')}}" method="post">
        @csrf
<div class="row" style="padding-left: 300px;padding-top: 100px;">

    <div class="col-md-4">
        <input name="from_date" type="date" class="form-control">
    </div>
    <div class="col-md-4">
        <input name="to_date" type="date" class="form-control">
    </div>
    <div class="col-md-4">
        <button class="btn btn-primary">Search</button>
    </div>



</div>
    </form>
    <!-- new collection section start -->
    <div class="layout_padding collection_section">
        <div class="container">
            <h1 class="new_text"><strong>New Collection</strong></h1>
            <p class="consectetur_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
            <div class="collection_section_2">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-img">
                            <button class="new_bt">New</button>
                            <div class="shoes-img"><img src="images/shoes-img1.png"></div>
                            <p class="sport_text">Men Sports</p>
                            <div class="dolar_text">$<strong style="color: #f12a47;">90</strong></div>
                            <div class="star_icon">
                                <ul>
                                    <li><a href="#"><img src="images/star-icon.png"></a></li>
                                    <li><a href="#"><img src="images/star-icon.png"></a></li>
                                    <li><a href="#"><img src="images/star-icon.png"></a></li>
                                    <li><a href="#"><img src="images/star-icon.png"></a></li>
                                    <li><a href="#"><img src="images/star-icon.png"></a></li>
                                </ul>
                            </div>
                        </div>
                        <button class="seemore_bt">See More</button>
                    </div>
                    <div class="col-md-6">
                        <div class="about-img2">
                            <div class="shoes-img2"><img src="images/shoes-img2.png"></div>
                            <p class="sport_text">Men Sports</p>
                            <div class="dolar_text">$<strong style="color: #f12a47;">90</strong></div>
                            <div class="star_icon">
                                <ul>
                                    <li><a href="#"><img src="images/star-icon.png"></a></li>
                                    <li><a href="#"><img src="images/star-icon.png"></a></li>
                                    <li><a href="#"><img src="images/star-icon.png"></a></li>
                                    <li><a href="#"><img src="images/star-icon.png"></a></li>
                                    <li><a href="#"><img src="images/star-icon.png"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="collection_section">
        <div class="container">
            <h1 class="new_text"><strong>Racing Boots</strong></h1>
            <p class="consectetur_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
        </div>
    </div>
    <div class="collectipn_section_3 layuot_padding">
        <div class="container">
            <div class="racing_shoes">
                <div class="row">
                    <div class="col-md-8">
                        <div class="shoes-img3"><img src="{{url('/frontend/images/shoes-img3.png')}}"></div>
                    </div>
                    <div class="col-md-4">
                        <div class="sale_text"><strong>Sale <br><span style="color: #0a0506;">JOGING</span>
                                <br>SHOES</strong></div>
                        <div class="number_text"><strong>$ <span style="color: #0a0506">100</span></strong></div>
                        <button class="seemore">See More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="collection_section layout_padding">
        <div class="container">
            <h1 class="new_text"><strong>New Arrivals Products</strong></h1>
            <p class="consectetur_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
        </div>
    </div>
    <!-- new collection section end -->
    <!-- New Arrivals section start -->
    <div class="layout_padding gallery_section">
        <div class="container">
            <div class="row">

                @foreach($products as $data)

                <div class="col-sm-4">
                    <a href="{{route('product.view',$data->id)}}">
{{--                    <a href="{{url('/product/'.$data->id)}}">--}}
                    <div class="best_shoes">
                        <p class="best_text">{{$data->name}} </p>
                        <div class="shoes_icon"><img width="150px" src="{{url('uploads/'.$data->image)}}"></div>
                        <div class="star_text">
                            <div class="left_part">

                            </div>
                            <div class="right_part">
                                <div class="shoes_price"> <span style="color: #ff4e5b;">{{$data->price}}</span></div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                @endforeach

            </div>
            <div class="buy_now_bt">
                <button class="buy_text">Buy Now</button>
            </div>
        </div>
    </div>
    <!-- New Arrivals section end -->
    <!-- contact section start -->
    <div class="layout_padding contact_section">
        <div class="container">
            <h1 class="new_text"><strong>Contact Now</strong></h1>
        </div>
        <div class="container-fluid ram">
            <div class="row">
                <div class="col-md-6">
                    <div class="email_box">
                        <div class="input_main">
                            <div class="container">
                                <form action="/action_page.php">
                                    <div class="form-group">
                                        <input type="text" class="email-bt" placeholder="Name" name="Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="email-bt" placeholder="Phone Numbar" name="Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="email-bt" placeholder="Email" name="Email">
                                    </div>

                                    <div class="form-group">
                                    <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment"
                                              name="Massage"></textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="send_btn">
                                <button class="main_bt">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="shop_banner">
                        <div class="our_shop">
                            <button class="out_shop_bt">Our Shop</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact section end -->

@endsection
