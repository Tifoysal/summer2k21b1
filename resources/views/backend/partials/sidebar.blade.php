<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            @if(auth()->user()->role=='admin')
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">
                    <span data-feather="home"></span>
                    {{auth()->user()->name}}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('category.list')}}">
                    <span data-feather="file"></span>
                    Category
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="{{route('product.list')}}">
                    <span data-feather="shopping-cart"></span>
                    Products
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file"></span>
                    Orders
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('customer.list')}}">
                    <span data-feather="users"></span>
                    Customers
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('user.list')}}">
                    <span data-feather="users"></span>
                    Users
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="bar-chart-2"></span>
                    Reports
                </a>
            </li>
            @endif
            @if(auth()->user()->role=='manager')
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file"></span>
                            Orders
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('product.list')}}">
                            <span data-feather="shopping-cart"></span>
                            Products
                        </a>
                    </li>

                @endif
        </ul>


    </div>
</nav>
