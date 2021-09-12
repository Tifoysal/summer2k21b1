<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="logo"><a href="#"><img src="images/logo.png"></a></div>
        </div>
        <div class="col-sm-9">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <form action="{{route('search')}}" method="get">
{{--                            @csrf--}}
                        <input style="width: 250px;" type="text" placeholder="Search" name="search" class="form-control">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-search"></i></button>
                        </form>
                        <a class="nav-item nav-link" href="{{route('home')}}">Home</a>
                        <a class="nav-item nav-link" href="collection.html">Collection</a>
                        <a class="nav-item nav-link" href="{{route('shoes')}}">Shoes</a>
                        @if(auth()->user())
                        <a class="nav-item nav-link" href="{{route('customer.logout')}}">Logout</a>
                        <a class="nav-item nav-link" href="">{{auth()->user()->name}}</a>
                        @else
                            <a class="nav-item nav-link" href="{{route('customer.login')}}">Login</a>
                            <a class="nav-item nav-link" href="{{route('user.signup')}}">Signup</a>

                            @endif
                        <a class="nav-item nav-link last" href="#"><img src="images/search_icon.png"></a>
                        <a class="nav-item nav-link last" href="contact.html"><img src="images/shop_icon.png"></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
