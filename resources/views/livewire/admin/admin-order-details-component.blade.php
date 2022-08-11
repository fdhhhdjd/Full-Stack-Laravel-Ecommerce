@section('title', 'Detail' . ' ' . $order->firstname . ' ' . $order->lastname)
@section('loading')
    @include('livewire.loading-component')
@endsection
<div>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Orders - {{ $order->firstname . ' ' . $order->lastname }}
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.orders') }}" class="btn btn-success pull-right">All Orders
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>Order Id</th>
                                <td>{{ $order_id }}</td>
                                <th>Order Date</th>
                                <td>{{ $order->created_at }}</td>
                                <th>Status</th>
                                <td>{{ $order->status }}</td>
                                @if ($order->status == 'delivered')
                                    <th>Delivery Date</th>
                                    <td>{{ $order->delivered_date }}</td>
                                @else
                                    <th>Canceled Date</th>
                                    <td>{{ $order->canceled_date }}</td>
                                @endif
                            </tr>

                        </table>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Detail order - {{ $order->firstname . ' ' . $order->lastname }}
                            </div>

                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="wrap-iten-in-cart">
                            <h3 class="box-title">Products Name</h3>
                            <ul class="products-cart">
                                @foreach ($order->orderItems as $item)
                                    <li class="pr-cart-item">
                                        <div class="product-image">
                                            <figure><img
                                                    src="{{ asset('assets/images/products') }}/{{ $item->product->image }}"
                                                    alt="">
                                            </figure>
                                        </div>
                                        <div class="product-name">
                                            <a class="link-to-product"
                                                href="{{ route('product.details', ['slug' => $item->product->slug]) }}">{{ $item->product->name }}</a>
                                        </div>
                                        <div class="price-field produtc-price">
                                            <p class="price">${{ $item->price }}</p>
                                        </div>
                                        <div class="quantity">
                                            <h5>{{ $item->quantity }}</h5>
                                        </div>
                                        <div class="price-field sub-total">
                                            <p class="price">$ {{ $item->price * $item->quantity }}</p>
                                        </div>

                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="summary">
                            <div class="order-summary">
                                <h4 class="title-box">
                                    Order Summary
                                </h4>
                                <p class="summary-info"><span class="title">Subtotal</span><b class="index">$
                                        {{ number_format($order->subtotal, 2) }}</b></p>
                                <p class="summary-info"><span class="title">Tax</span><b class="index">$
                                        {{ number_format($order->tax, 2) }}</b></p>
                                <p class="summary-info"><span class="title">Shipping</span><b class="index">$
                                        Free Shipping</b></p>
                                <p class="summary-info"><span class="title">Total</span><b class="index">$
                                        {{ number_format($order->total, 2) }}</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Billing Details
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>OrderId</th>
                                    <th>Subtotal</th>
                                    <th>Discount</th>
                                    <th>Tax</th>
                                    <th>Total</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>ZipCode</th>
                                    <th>Status</th>
                                    <th>Order Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->subtotal }}</td>
                                    <td>{{ $order->discount }}</td>
                                    <td>{{ $order->tax }}</td>
                                    <td>{{ $order->total }}</td>
                                    <td>{{ $order->firstname }}</td>
                                    <td>{{ $order->lastname }}</td>
                                    <td>{{ $order->mobile }}</td>
                                    <td>{{ $order->email }}</td>
                                    <td>{{ $order->zipcode }}</td>
                                    <td>{{ $order->status }}</td>
                                    <td>{{ $order->created_at }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @if ($order->is_shipping_different)
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Shipping Details
                        </div>
                        <div class="panel-body">
                            <table class="table">
                                <thead>
                                    <tr>

                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>Line1</th>
                                        <th>Line2</th>
                                        <th>City</th>
                                        <th>Province</th>
                                        <th>Country</th>
                                        <th>ZipCode</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                        <td>{{ $order->shipping->firstname }}</td>
                                        <td>{{ $order->shipping->lastname }}</td>
                                        <td>{{ $order->shipping->mobile }}</td>
                                        <td>{{ $order->shipping->email }}</td>
                                        <td>{{ $order->shipping->line1 }}</td>
                                        <td>{{ is_null($order->shipping->line2) ? 'Empty' : $order->shipping->line2 }}
                                        </td>
                                        <td>{{ $order->shipping->city }}</td>
                                        <td>{{ $order->shipping->province }}</td>
                                        <td>{{ $order->shipping->country }}</td>
                                        <td>{{ $order->shipping->zipcode }}</td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Transaction Details
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>Transaction Mode</th>
                                <td>{{ $order->transaction->mode }}</td>
                            </tr>
                            <tr>
                                <th>Transaction Status</th>
                                <td>{{ $order->transaction->status }}</td>
                            </tr>
                            <tr>
                                <th>Transaction Date</>
                                <td>{{ $order->transaction->created_at }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
