 <!-- banner -->
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <!-- Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item item1 active">
            <div class="container">
                <div class="w3l-space-banner">
                    <div class="carousel-caption p-lg-5 p-sm-4 p-3">
                        <p>{{trans('banner.get-now')}}
                            <span>10%</span> {{trans('banner.cashback')}}</p>
                        <h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">The
                            <span>{{trans('banner.big')}}</span>
                            {{trans('banner.sale')}}
                        </h3>
                        <a class="button2" href="product.html">{{trans('banner.shop-now')}} </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item item2">
            <div class="container">
                <div class="w3l-space-banner">
                    <div class="carousel-caption p-lg-5 p-sm-4 p-3">
                        <p>{{trans('banner.get-now')}}
                            <span>{{trans('banner.wireless')}}</span> {{trans('banner.earbuds')}}</p>
                        <h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">{{trans('banner.best')}}
                            <span>{{trans('banner.headphone')}}</span>
                        </h3>
                        <a class="button2" href="product.html">{{trans('banner.shop-now')}} </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item item3">
            <div class="container">
                <div class="w3l-space-banner">
                    <div class="carousel-caption p-lg-5 p-sm-4 p-3">
                        <p>{{trans('banner.get-now')}}
                            <span>10%</span> {{trans('banner.cashback')}}</p>
                        <h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">{{trans('banner.new')}}
                            <span>{{trans('banner.standard')}}</span>
                        </h3>
                        <a class="button2" href="product.html">{{trans('banner.shop-now')}}  </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item item4">
            <div class="container">
                <div class="w3l-space-banner">
                    <div class="carousel-caption p-lg-5 p-sm-4 p-3">
                        <p>{{trans('banner.get-now')}}
                            <span>40%</span> {{trans('banner.discount')}}</p>
                        <h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">{{trans('banner.today')}}
                            <span>{{trans('banner.discount')}}</span>
                        </h3>
                        <a class="button2" href="product.html">{{trans('banner.shop-now')}}  </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">{{ trans('banner.previous') }}</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">{{ trans('banner.next') }}</span>
    </a>
</div>
<!-- //banner -->
