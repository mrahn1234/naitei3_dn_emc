 <!-- navigation -->
 <div class="navbar-inner">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="agileits-navi_search">
                <form action="#" method="post">
                    <select id="agileinfo-nav_search" name="agileinfo_search" class="border" required="">
                        <option value="">{{ trans('navigation.allCategory') }}</option>
                        <option value="Televisions">Televisions</option>
                        <option value="Headphones">Headphones</option>
                        <option value="Computers">Computers</option>
                        <option value="Appliances">Appliances</option>
                        <option value="Mobiles">Mobiles</option>
                        <option value="Fruits &amp; Vegetables">Tv &amp; Video</option>
                        <option value="iPad & Tablets">iPad & Tablets</option>
                        <option value="Cameras & Camcorders">Cameras & Camcorders</option>
                        <option value="Home Audio & Theater">Home Audio & Theater</option>
                    </select>
                </form>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto text-center mr-xl-5">
                    <li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
                        <a class="nav-link" href="{{route('home')}}">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    {{-- each category --}}
                    @if (Helper::main_categories())
                        @each('client.layouts.shared.main_cate', Helper::main_categories(), 'category')
                    @endif
                    {{-- each category --}}
                    <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                        <a class="nav-link" href="about.html">{{trans('navigation.aboutUs')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">{{ trans('navigation.contact') }}</a>
                    </li>
                    @if (Auth::check())
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('list_order', Auth::user()->id)}}">{{ trans('navigation.order-history') }}</a>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- //navigation -->
