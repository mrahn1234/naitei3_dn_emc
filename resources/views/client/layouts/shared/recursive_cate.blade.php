<div class="col-sm-6 multi-gd-img">
    <ul class="multi-column-dropdown">
        <li class="dropdown-item">
            @if ($sub->children()->count() > 0)
                <a href="product.html">{{$sub->name}}</a>
                @each('client.layouts.shared.recursive_cate', $sub->children()->get(), 'sub')
            @else
                <a href="product.html">{{$sub->name}}</a>
            @endif
        </li>
    </ul>
</div>
