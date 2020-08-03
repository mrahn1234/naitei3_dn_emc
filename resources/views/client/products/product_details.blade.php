@extends('client.index')

@section('content')

<div class="banner-bootom-w3-agileits py-5">
    <div class="container py-xl-4 py-lg-2">
        <!-- tittle heading -->
        <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
            <span>{{ trans('product_detail.o') }}</span>{{ trans('product_detail.rder') }}
            <span>{{ trans('product_detail.n') }}</span>{{ trans('product_detail.ow') }}</h3>
        <!-- //tittle heading -->
        <div class="row">
            <div class="col-md-6 single-right-left ">
                <div class="grid images_3_of_2">
                    <div class="flexslider">

                        <div class="clearfix"></div>
                        <div class="flex-viewport" style="overflow: hidden; position: relative;">
                            <ul class="slides"
                                style="width: 1000%; transition-duration: 0s; transform: translate3d(-437px, 0px, 0px);">
                                <li data-thumb="images/si3.jpg" class="clone" aria-hidden="true"
                                    style="width: 437px; margin-right: 0px; float: left; display: block;">
                                    <div class="thumb-image">
                                        <img src="{{asset('client/images/si3.jpg')}}" data-imagezoom="true"
                                            class="img-fluid" alt="" draggable="false"> </div>
                                </li>
                                <li data-thumb="{{asset('client/images/si1.jpg')}}"
                                    style="width: 437px; margin-right: 0px; float: left; display: block;"
                                    class="flex-active-slide" data-thumb-alt="">
                                    <div class="thumb-image">
                                        <img src="{{asset('client/images/si1.jpg')}}" data-imagezoom="true"
                                            class="img-fluid" alt="" draggable="false"> </div>
                                </li>
                                <li data-thumb="{{asset('client/images/si2.jpg')}}" data-thumb-alt="" class=""
                                    style="width: 437px; margin-right: 0px; float: left; display: block;">
                                    <div class="thumb-image">
                                        <img src="{{asset('client/images/si2.jpg')}}" data-imagezoom="true"
                                            class="img-fluid" alt="" draggable="false"> </div>
                                </li>
                                <li data-thumb="{{asset('client/images/si3.jpg')}}" data-thumb-alt="" class=""
                                    style="width: 437px; margin-right: 0px; float: left; display: block;">
                                    <div class="thumb-image">
                                        <img src="{{asset('client/images/si3.jpg')}}" data-imagezoom="true"
                                            class="img-fluid" alt="" draggable="false"> </div>
                                </li>
                                <li data-thumb="{{asset('client/images/si1.jpg')}}"
                                    style="width: 437px; margin-right: 0px; float: left; display: block;" class="clone"
                                    aria-hidden="true">
                                    <div class="thumb-image">
                                        <img src="{{asset('client/images/si1.jpg')}}" data-imagezoom="true"
                                            class="img-fluid" alt="" draggable="false"> </div>
                                </li>
                            </ul>
                        </div>
                        <ol class="flex-control-nav flex-control-thumbs">
                            <li><img src="{{asset('client/images/si1.jpg')}}" class="flex-active" draggable="false">
                            </li>
                            <li><img src="{{asset('client/images/si2.jpg')}}" draggable="false" class=""></li>
                            <li><img src="{{asset('client/images/si3.jpg')}}" draggable="false" class=""></li>
                        </ol>
                        <ul class="flex-direction-nav">
                            <li class="flex-nav-prev"><a class="flex-prev" href="#">Previous</a></li>
                            <li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6 single-right-left simpleCart_shelfItem">
                <h3 class="mb-3">{{$product->name}}</h3>
                <p class="mb-3">
                    <span class="item_price">{{"$".$product->price}}</span>
                    <del class="mx-2 font-weight-light">{{"$".($product->price + rand(500, 2000))}}</del>
                    <label>{{ trans('product_detail.Free delivery') }}</label>
                </p>
                <div class="single-infoagile">
                    <ul>
                        <li class="mb-3">
                            {{ trans('product_detail.Cash on Delivery Eligible.') }}
                        </li>
                        <li class="mb-3">
                            {{ trans('product_detail.Shipping Speed to Delivery.') }}
                        </li>
                        <li class="mb-3">
                            {{ trans('product_detail.EMIs from $655/month.') }}
                        </li>
                        <li class="mb-3">
                            {{ trans('product_detail.Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardTC') }}
                        </li>
                        <li class="mb-3">
                            <h6 class="remaining">{{ trans('product_detail.Remaining:') }} </h6>
                            <b>{{$product->quantity}}</b>
                        </li>
                        <li class="mb-3">
                            <ul id="stars" value="{{$rating_score}}">
                                <li id="s1" class="mb-3 star" value="1" onclick="rating(event, {{Auth::check()? Auth::user()->id : null}}, {{$product->id}})">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </li>
                                <li id="s2" class="mb-3 star" value="2" onclick="rating(event, {{Auth::check()? Auth::user()->id : null}}, {{$product->id}})">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </li>
                                <li id="s3" class="mb-3 star" value="3" onclick="rating(event, {{Auth::check()? Auth::user()->id : null}}, {{$product->id}})">
                                    <i class="fa fa-star" aria-hidden="true" ></i>
                                </li>
                                <li id="s4" class="mb-3 star" value="4" onclick="rating(event, {{Auth::check()? Auth::user()->id : null}}, {{$product->id}})">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </li>
                                <li id="s5" class="mb-3 star" value="5" onclick="rating(event, {{Auth::check()? Auth::user()->id : null}}, {{$product->id}})">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="product-single-w3l">
                    <p class="my-3">
                        <i class="far fa-hand-point-right mr-2"></i>
                        <label>{{ trans('product_detail.1 Year') }}</label>{{ trans('product_detail.Manufacturer Warranty') }}
                    </p>
                    <ul>
                        @foreach (explode('. ', $product->description) as $des)
                        <li class="mb-1">
                            {{$des}}
                        </li>
                        @endforeach
                    </ul>
                    <p class="my-sm-4 my-3">
                        <i
                            class="fas fa-retweet mr-3"></i>{{ trans('product_detail.Net banking Credit/ Debit/ ATM card') }}
                    </p>
                </div>
                <div class="occasion-cart">
                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                        <form action="#" method="post">
                            <fieldset>
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="add" value="1">
                                <input type="hidden" name="business" value=" ">
                                <input type="hidden" name="item_name" value="Samsung Galaxy J7 Prime">
                                <input type="hidden" name="amount" value="200.00">
                                <input type="hidden" name="discount_amount" value="1.00">
                                <input type="hidden" name="currency_code" value="USD">
                                <input type="hidden" name="return" value=" ">
                                <input type="hidden" name="cancel_return" value=" ">
                                <input type="button" name="add_to_cart" value="Add to cart"
                                    onclick="addTocart({{$product->id}})" class="button add_to_cart">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Comment --}}
    <div class="container">
        <div class="card mt-3 mb-3">
            <div class="card-body">
                <div id="comment-containter">
                    @if (!$collection_comment->isEmpty())
                        @each('client.comments.comment_content', $collection_comment, 'comment_content')
                    @else
                        <h5>{{trans('comment.comment-yet')}}</h5>
                    @endif
                </div>
            </div>
        </div>
        @if (Auth::check())
            <div class="card mt-3 mb-3">
                <div class="card-body">
                    <form action="" method="POST">
                        <label class="col-form-label">{{"Please review something this product!"}}</label>
                        <textarea class="form-control" id="comment-content" name="comment" cols="50" rows="3"></textarea>
                        <p>
                            <button type="submit" onclick="postComment({{Auth::user()->id}}, {{$product->id}})" id='submit-comment' class="float-right text-light btn btn-success ml-2 mt-2 mb-2"> <i class="fa fa-comments"></i>{{trans('comment.comment')}}</button>
                        </p>
                    </form>
                </div>
            </div>
        @else
            <h5>{{trans('comment.please-comment')}}</h5>
        @endif

    </div>
    {{-- Comment --}}
</div>

@endsection
