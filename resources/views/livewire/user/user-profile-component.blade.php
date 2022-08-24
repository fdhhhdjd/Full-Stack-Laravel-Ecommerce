@section('title', 'Profile User')
@section('loading')
    @include('livewire.loading-component')
@endsection
<div>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Profile User
                        <div class="panel-body">
                            @if (Session::has('editprofile'))
                                <div class="alert alert-success" role="alert">
                                    {{ Session::get('editprofile') }}
                                </div>
                            @endif
                            <div class="col-md-4">
                                @if ($user->image)
                                    <img src="{{ asset('assets/images/profile') }}/{{ $user->image }}" alt=""
                                        width="100%">
                                @else
                                    <img src="{{ asset('assets/images/profile/dumy.jpg') }}" alt=""
                                        width="100%">
                                @endif
                            </div>
                            <div class="col-md-8">
                                <p><b>Name: </b> {{ $user->name }}</p>
                                <p><b>User Name: </b> {{ $user->user_name }}</p>
                                <p><b>Email: </b> {{ $user->email }}</p>
                                <p><b>Phone: </b> {{ $user->mobile }}</p>
                                <hr>
                                <p><b>Line1: </b> {{ $user->line1 }}</p>
                                <p><b>Line2: </b> {{ $user->line2 }}</p>
                                <p><b>City: </b> {{ $user->city }}</p>
                                <p><b>Provice: </b> {{ $user->province }}</p>
                                <p><b>Country: </b> {{ $user->country }}</p>
                                <p><b>Zip Code: </b> {{ $user->zipcode }}</p>
                                <a href="{{ route('user.editprofile') }}" class="btn btn-info pull-right">Edit
                                    Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
