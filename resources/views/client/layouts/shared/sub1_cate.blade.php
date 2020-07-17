<h5 class="mb-3 mt-3">
    <a href="#">{{$subcate->name}}</a>
</h5>
<div class="row">
    @if ($subcate->children()->count() > 0)
        @each('client.layouts.shared.recursive_cate', $subcate->children()->get(), 'sub')
    @endif
</div>
