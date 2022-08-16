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
                                @if ($user->profile->image)
                                    <img src="{{ asset('assets/images/profile') }}/{{ $user->profile->image }}"
                                        alt="" width="100%">
                                @else
                                    <img src="{{ asset('assets/images/profile/dumy.jpg') }}" alt=""
                                        width="100%">
                                @endif
                            </div>
                            <div class="col-md-8">
                                <p><b>Name: </b> {{ $user->name }}</p>
                                <p><b>User Name: </b> {{ $user->user_name }}</p>
                                <p><b>Email: </b> {{ $user->email }}</p>
                                <p><b>Phone: </b> {{ $user->profile->mobile }}</p>
                                <hr>
                                <p><b>Line1: </b> {{ $user->profile->line1 }}</p>
                                <p><b>Line2: </b> {{ $user->profile->line2 }}</p>
                                <p><b>City: </b> {{ $user->profile->city }}</p>
                                <p><b>Provice: </b> {{ $user->profile->province }}</p>
                                <p><b>Country: </b> {{ $user->profile->country }}</p>
                                <p><b>Zip Code: </b> {{ $user->profile->zipcode }}</p>
                                <a href="{{ route('user.editprofile') }}" class="btn btn-info pull-right">Edit
                                    Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
