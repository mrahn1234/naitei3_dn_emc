<div class="agile-main-top">
    <div class="container-fluid">
        <div class="row main-top-w3l py-2">
            <div class="col-lg-4 header-most-top">
                <p class="text-white text-lg-left text-center">Offer Zone Top Deals & Discounts
                    <i class="fas fa-shopping-cart ml-1"></i>
                </p>
            </div>
            <div class="col-lg-8 header-right mt-lg-0 mt-2">
                <!-- header lists -->
                <ul>
                    <li class="text-center border-right text-white">
                        <a class="play-icon popup-with-zoom-anim text-white" href="#small-dialog1">
                            <i class="fas fa-map-marker mr-2"></i>Select Location</a>
                    </li>
                    <li class="text-center border-right text-white">
                        <a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
                            <i class="fas fa-truck mr-2"></i>Track Order</a>
                    </li>
                    <li class="text-center border-right text-white">
                        <i class="fas fa-phone mr-2"></i> 001 234 5678
                    </li>
                    @guest
                        @if (Route::has('login'))
                        <li class="text-center border-right text-white">
                            <a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
                                <i class="fas fa-sign-in-alt mr-2"></i> {{ trans('login.login') }} </a>
                        </li>
                        @endif
                        @if (Route::has('register'))
                            <li class="text-center text-white">
                                <a href="#" data-toggle="modal" data-target="#exampleModal2" class="text-white">
                                    <i class="fas fa-user-plus mr-2"></i>{{ trans('register.register') }} </a>
                            </li>
                        @endif
                    @endguest
                    @if (Auth::check())
                        <li class="text-center text-white">
                        <a class="text-white" href="{{route('users.detail', Auth::user()->id)}}">
                            <i class="fa fa-user-circle" aria-hidden="true"></i>{{Auth::user()->name}}
                            </a>
                        </li>
                        <li class="text-center text-white">
                            <a href="{{route('logout')}}" class="text-white">
                                <i class="fas fa-sign-out-alt mr-2"></i>{{ trans('register.logout') }} </a>
                        </li>
                    @endif

                </ul>
                <!-- //header lists -->
            </div>
        </div>
    </div>
</div>
