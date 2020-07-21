<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false">
        {{$category->name}}
    </a>
    <div class="dropdown-menu">
        <div class="agile_inner_drop_nav_info p-4">
            @if ($category->children()->count() > 0)
            <div class="row">
                <div class="col-sm-12">
                    @each('client.layouts.shared.sub1_cate', $category->children()->get(), 'subcate')
                </div>
            </div>
            @endif
        </div>
    </div>
</li>
