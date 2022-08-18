@section('title', 'Manger orders')
@section('loading')
    @include('livewire.loading-component')
@endsection
<div>
    <style>
        nav svg {
            height: 20px;
        }

        nav .hidden {
            display: block !important;
        }
    </style>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                All Orders
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="" id="" class="form-control"
                                    placeholder="Search..." wire:model="searchTerm" />
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (Session::has('order_message'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('order_message') }}
                            </div>
                        @endif
                        <table class="table table-striped ">
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
                                    <th colspan="2" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
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
                                        <td>
                                            <a href="{{ route('admin.orderdetals', ['order_id' => $order->id]) }}"
                                                class="btn btn-info btn-sm">Detail</a>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-success btn-sm dropdown-toggle"
                                                    data-toggle="dropdown" type="button">Status
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#"
                                                            wire:click.prevent="updateOrderStatus({{ $order->id }},'delivered')">Delevered</a>
                                                    </li>
                                                    <li><a href="#"
                                                            wire:click.prevent="updateOrderStatus({{ $order->id }},'canceled')">Canceled</a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $orders->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- wire:click="delete$order({{ $$order->id }})" --}}
