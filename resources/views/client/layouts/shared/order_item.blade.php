<tr class="total">
    <th>{{1}}</th>
    <td>
        <img class="mr-2" src="{{asset('client/images/m2.jpg')}}" width="40px"alt="">
        {{$item->product->name}}
    </td>
    <td><input type="number" value="{{$item->quantity}}" name="quantity" id="item-quantity"
            pattern="[1-9]*"></td>
    <td>
        <i>{{"$".$item->product->price}}</i>
    </td>
    <td>
        <a><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a>
    </td>
</tr>
