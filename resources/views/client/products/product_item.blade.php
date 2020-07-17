<div class="col-md-4 product-men mt-5">
    <div class="men-pro-item simpleCart_shelfItem">
        <div class="men-thumb-item text-center">
            <img src="{{asset('client/images/m3.jpg')}}" alt="">
            <div class="men-cart-pro">
                <div class="inner-men-cart-pro">
                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                </div>
            </div>
            <span class="product-new-top">New</span>

        </div>
        <div class="item-info-product text-center border-top mt-4">
            <h4 class="pt-1">
                <a href="single.html">{{$product->name}}</a>
            </h4>
            <div class="info-product-price my-2">
                <span class="item_price">{{"$".$product->price."0"}}</span>
                <del>{{"$".($product->price + rand(500,2000))}}</del>
            </div>
            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                <form action="#" method="post">
                    <fieldset>
                        <input type="hidden" name="cmd" value="_cart" />
                        <input type="hidden" name="add" value="1" />
                        <input type="hidden" name="business" value=" " />
                        <input type="hidden" name="item_name" value="Apple iPhone X" />
                        <input type="hidden" name="amount" value="280.00" />
                        <input type="hidden" name="discount_amount" value="1.00" />
                        <input type="hidden" name="currency_code" value="USD" />
                        <input type="hidden" name="return" value=" " />
                        <input type="hidden" name="cancel_return" value=" " />
                        <input type="submit" name="submit" value="Add to cart" class="button btn" />
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
