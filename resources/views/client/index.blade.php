<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Ecommerce Website</title>
    <!-- //Meta tag Keywords -->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Custom-Files -->
	<link href="{{asset('client/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- Bootstrap css -->
	<link href="{{asset('client/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- Main css -->
	<link rel="stylesheet" href="{{asset('client/css/fontawesome-all.css')}}">
	<!-- Font-Awesome-Icons-CSS -->
	<link href="{{asset('client/css/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- pop-up-box -->
	<link href="{{asset('client/css/menu.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- menu style -->
	<!-- //Custom-Files -->

	<!-- web fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //web fonts -->
</head>

<body>

    <!-- top-header -->
    @include('client.layouts.shared.header')
    <!-- //top-header -->

    <!-- top Products -->
    <div class="ads-grid py-sm-5 py-4">
        <div class="container py-xl-4 py-lg-2">

            <div class="row">
                <!-- product left -->
                <div class="agileinfo-ads-display col-lg-9">
                    <div class="wrapper">
                        @yield('content')
                    </div>
                </div>
                <!-- //product left -->
                @include('client.layouts.shared.slidebar')

            </div>
        </div>
    </div>
    <!-- //top products -->

    <!-- middle section -->
    <div class="join-w3l1 py-sm-5 py-4">
        <div class="container py-xl-4 py-lg-2">
            <div class="row">
                <div class="col-lg-6">
                    <div class="join-agile text-left p-4">
                        <div class="row">
                            <div class="col-sm-7 offer-name">
                                <h6>Smooth, Rich & Loud Audio</h6>
                                <h4 class="mt-2 mb-3">Branded Headphones</h4>
                                <p>Sale up to 25% off all in store</p>
                            </div>
                            <div class="col-sm-5 offerimg-w3l">
                                <img src="{{asset('client/images/off1.png')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-5">
                    <div class="join-agile text-left p-4">
                        <div class="row ">
                            <div class="col-sm-7 offer-name">
                                <h6>A Bigger Phone</h6>
                                <h4 class="mt-2 mb-3">Smart Phones 5</h4>
                                <p>Free shipping order over $100</p>
                            </div>
                            <div class="col-sm-5 offerimg-w3l">
                                <img src="{{asset('client/images/off2.png')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- middle section -->

    <!-- footer -->
    @include('client.layouts.shared.footer')
    <!-- //footer -->


    <!-- js-files -->
    <!-- jquery -->
    <script src="{{asset('client/js/jquery-2.2.3.min.js')}}"></script>
    <!-- //jquery -->

    <!-- popup modal (for location)-->
    <script src="j{{asset('client/s/jquery.magnific-popup.js')}}"></script>
    <!-- //popup modal (for location)-->

    <!-- cart-js -->
    <script src="{{asset('client/js/minicart.js')}}"></script>
    <!-- //cart-js -->

    <!-- scroll seller -->
    <script src="{{asset('client/js/scroll.js')}}"></script>
    <!-- //scroll seller -->

    <!-- smoothscroll -->
    <script src="{{asset('client/js/SmoothScroll.min.js')}}"></script>
    <!-- //smoothscroll -->

    <!-- start-smooth-scrolling -->
    <script src="{{asset('client/js/move-top.js')}}"></script>
    <script src="{{asset('client/js/easing.js')}}"></script>
    <!-- //end-smooth-scrolling -->

    <!-- for bootstrap working -->
    <script src="{{asset('client/js/bootstrap.js')}}"></script>
    <script src="{{asset('client/js/preprocess.js')}}"></script>
    <!-- //for bootstrap working -->
    <!-- //js-files -->
</body>

</html>
