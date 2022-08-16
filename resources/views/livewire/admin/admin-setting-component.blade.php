<div>
    @section('title', 'Setting')
    @section('loading')
        @include('livewire.loading-component')
    @endsection
    <div>
        <div class="container" style="padding:30px 0;">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Setting
                        </div>
                        <div class="panel-body">
                            @if (Session::has('message'))
                                <div class="alert alert-success" role="alert">
                                    {{ Session::get('message') }}
                                </div>
                            @endif
                            <form class="form-horizontal" wire:submit.prevent="saveSetting">
                                @csrf
                                <div class='form-group'>
                                    <label for="" class="col-md-4 control-label">Email</label>
                                    <div class="col-md-4">
                                        <input type="email" placeholder="Email" class="form-control input-md"
                                            name="current_password" wire:model="email" />
                                        @error('email')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label for="" class="col-md-4 control-label">Phone</label>
                                    <div class="col-md-4">
                                        <input type="number" placeholder="Phone" class="form-control input-md"
                                            name="phone" wire:model="phone" />
                                        @error('phone')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label for="" class="col-md-4 control-label">Phone2</label>
                                    <div class="col-md-4">
                                        <input type="number" placeholder="Phone2" class="form-control input-md"
                                            name="phone2" wire:model="phone2" />
                                        @error('phone2')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label for="" class="col-md-4 control-label">Address</label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Address" class="form-control input-md"
                                            name="address" wire:model="address" />
                                        @error('address')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label for="" class="col-md-4 control-label">Map</label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Map" class="form-control input-md"
                                            name="map" wire:model="map" />
                                        @error('map')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label for="" class="col-md-4 control-label">Twitter</label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Twitter" class="form-control input-md"
                                            name="twitter" wire:model="twitter" />
                                        @error('twitter')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label for="" class="col-md-4 control-label">Facebook</label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Facebook" class="form-control input-md"
                                            name="facebook" wire:model="facebook" />
                                        @error('facebook')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label for="" class="col-md-4 control-label">Pinterest</label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Pinterest" class="form-control input-md"
                                            name="pinterest" wire:model="pinterest" />
                                        @error('pinterest')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label for="" class="col-md-4 control-label">Instagram</label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Instagram" class="form-control input-md"
                                            name="instagram" wire:model="instagram" />
                                        @error('instagram')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label for="" class="col-md-4 control-label">Youtube</label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Youtube" class="form-control input-md"
                                            name="youtube" wire:model="youtube" />
                                        @error('youtube')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label for="" class="col-md-4 control-label"></label>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
