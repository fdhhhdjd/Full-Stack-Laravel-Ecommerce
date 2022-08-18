@section('title', 'Edit Attribute')
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
                                Edit Attribute
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.attributes') }}" class="btn btn-success pull-right">All
                                    Attribute</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('message') }}
                            </div>
                        @endif
                        <form action="" class="form-horizontal" wire:submit.prevent="updateAttribute">
                            @csrf
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Attribute Name</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Category Name" class="form-control input-md"
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
