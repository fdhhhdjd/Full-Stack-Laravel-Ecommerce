<div class="wrap-search center-section">
    <div class="wrap-search-form">
        <form action={{ route('product.search') }} id="form-search-top" name="form-search-top">
            <input type="text" name="search" value="{{ $search }}" placeholder="Search here...">
            <button form="form-search-top" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            <div class="wrap-list-cate">
                <input type="hidden" name="product_cat" value="{{ $product_cat }}" id="product-cat">
                <input type="hidden" name="product_cat_id" value="{{ $product_cat_id }}" id="product-cat-id">
                <a href="#" class="link-control">{{ str_split($product_cat, 12)[0] }}</a>
                <ul class="list-cate">
                    <li class="level-0">All Category</li>
                    @foreach ($categories as $category)
                        <li class="level-1" data-id="{{ $category->id }}">{{ $category->name }}</li>
                    @endforeach

                </ul>
            </div>
        </form>
    </div>
</div>
{{-- <select name="product_cat" class="list-cate" id="">
                    <option class="level-0" value="All Category">aa</option>
                    @foreach ($categories as $category)
                        <option class="level-1" value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select> --}}
