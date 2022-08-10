@section('title', 'Home Category')
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
                        Manager Home Category
                    </div>

                    <div class="panel-body">
                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('message') }}
                            </div>
                        @endif
                        <form action="" class="form-horizontal" wire:submit.prevent="updateHomeCategory">
                            @csrf
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">
                                    Choose Category
                                </label>
                                <div class="col-md-4" wire:ignore>
                                    <select class="sel_categories form-control" name="categories[]" multiple="multiple"
                                        wire:model="selected_categories">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">
                                    No Of Products
                                </label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder=" No Of Products"
                                        wire:model="numberofproducts" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">
                                    No Of Products
                                </label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        $(document).ready(function() {
            $('.sel_categories').select2();
            $('.sel_categories').on('change', function() {
                var data = $('.sel_categories').select2('val');
                @this.set('selected_categories', data);
            })

        });
    </script>
@endpush
