@section('title', 'Change Password')
@section('loading')
    @include('livewire.loading-component')
@endsection
<div>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Change Password
                    </div>
                    <div class="panel-body">
                        @if (Session::has('change_password_error'))
                            <div class="alert alert-danger" role="alert">
                                {{ Session::get('change_password_error') }}
                            </div>
                        @endif
                        @if (Session::has('change_password_success'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('change_password_success') }}
                            </div>
                        @endif
                        <form class="form-horizontal" wire:submit.prevent="changePassword">
                            @csrf
                            <div class='form-group'>
                                <label for="" class="col-md-4 control-label">Current Password</label>
                                <div class="col-md-4">
                                    <input type="password" placeholder="Current Password" class="form-control input-md"
                                        name="current_password" wire:model="current_password" />
                                    @error('current_password')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class='form-group'>
                                <label for="" class="col-md-4 control-label">New Password</label>
                                <div class="col-md-4">
                                    <input type="password" placeholder="New Password" class="form-control input-md"
                                        name="password" wire:model="password" />
                                    @error('password')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class='form-group'>
                                <label for="" class="col-md-4 control-label">Confirm Password</label>
                                <div class="col-md-4">
                                    <input type="password" placeholder="Confirm Password" class="form-control input-md"
                                        name="confirm_password" wire:model="confirm_password" />
                                    @error('confirm_password')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class='form-group'>
                                <label for="" class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Change Password</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
