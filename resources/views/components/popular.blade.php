<div class="widget mercado-widget widget-product">
    <h2 class="widget-title">Popular Products</h2>
    <div class="widget-content">
        <ul class="products">
            {{-- {{ dd($popular_products_list) }} --}}
            @foreach ($popular_products_list as $p_product)
                <li class="product-item">
                    <div class="product product-widget-style">
                        <div class="thumbnnail">
                            <a href="{{ route('product.details', ['slug' => $p_product->slug]) }}"
                                title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                <figure><img src="{{ asset('assets/images/products') }}/{{ $p_product->image }}"
                                        alt="{{ $p_product->name }}"></figure>
                            </a>
                        </div>
                        <div class="product-info">
                            <a href="{{ route('product.details', ['slug' => $p_product->slug]) }}"
                                class="product-name"><span>{{ $p_product->name }}</span></a>
                            <div class="wrap-price"><span class="product-price">{{ $p_product->regular_price }}</span>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach

        </ul>
    </div>
</div><!-- brand widget-->
