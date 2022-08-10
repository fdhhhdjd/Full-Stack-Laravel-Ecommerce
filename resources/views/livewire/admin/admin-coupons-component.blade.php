@section('title', 'Coupons')
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
                                All Coupons

                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.addcoupons') }}" class="btn btn-success pull-right">Add New</a>

                            </div>
                        </div>
                    </div>

                    <div class="panel-body">
                        @if (Session::has('message_coupon'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('message_coupon') }}
                            </div>
                        @endif

                        <table class="table table-striped ">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Coupons Code</th>
                                    <th>Coupons Type</th>
                                    <th>Coupons Value</th>
                                    <th>Cart Value</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($coupons as $coupon)
                                    <tr>
                                        <td>{{ $coupon->id }}</td>
                                        <td>{{ $coupon->code }}</td>
                                        @if ($coupon->type == 'fixed')
                                            <td>{{ $coupon->type }}</td>
                                        @else
                                            <td>{{ $coupon->type }} %</td>
                                        @endif
                                        <td>{{ $coupon->value }}</td>
                                        <td>{{ $coupon->cart_value }}</td>
                                        <td>
                                            <a href="{{ route('admin.editcoupons', ['coupon_id' => $coupon->id]) }}"
                                                style="margin-right:1rem">
                                                <i class="fa fa-edit fa-2x"></i></a>
                                            <a href="#"
                                                onclick="return confirm('Are you sure?') || event.stopImmediatePropagation()"
                                                wire:click="deleteCoupon({{ $coupon->id }})">
                                                <i class="fa fa-times fa-2x text-danger"></i></a>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $coupons->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- wire:click="deleteCategory({{ $coupon->id }})" --}}
