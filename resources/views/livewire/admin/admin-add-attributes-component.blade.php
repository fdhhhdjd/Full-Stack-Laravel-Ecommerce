@section('title', 'Add Attribute')
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
                                Add New Attribute
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.attributes') }}" class="btn btn-success pull-right">All
                                    Attributes</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('message') }}
                            </div>
                        @endif
                        @if (Session::has('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ Session::get('error') }}
                            </div>
                        @endif
                        <form action="" class="form-horizontal" wire:submit.prevent="addAttribute">
                            @csrf
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Attribute Name</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Attribute Name" class="form-control input-md"
                                        wire:model="name" />
                                    @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
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
