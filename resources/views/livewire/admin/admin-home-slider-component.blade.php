@section('title', 'Slider')
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
                            <div class="col-md-4">
                                All Sliders

                            </div>
                            <div class="col-md-4">
                                <input type="text" name="" id="" class="form-control"
                                    placeholder="Search..." wire:model="searchTerm" />
                            </div>
                            <div class="col-md-4">
                                <a href="{{ route('admin.addhomeslider') }}" class="btn btn-success pull-right">Add
                                    New</a>

                            </div>
                        </div>
                    </div>

                    <div class="panel-body">
                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('message') }}
                            </div>
                        @endif
                        <table class="table table-striped ">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Subtitle</th>
                                    <th>Price</th>
                                    <th>Link</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sliders as $slider)
                                    <tr>
                                        <td>{{ $slider->id }}</td>
                                        <td><img src="{{ asset('assets/images/sliders') }}/{{ $slider->image }}"
                                                alt="{{ $slider->title }}" width="60"></td>
                                        <td>{{ $slider->title }}</td>
                                        <td>{{ $slider->subtitle }}</td>
                                        <td>{{ $slider->price }}</td>
                                        <td>{{ $slider->link }}</td>
                                        <td>{{ $slider->status == 1 ? 'Active' : 'Inactive' }}</td>
                                        <td>{{ $slider->created_at }}</td>
                                        <td>
                                            <a href="{{ route('admin.edithomeslider', ['slide_id' => $slider->id]) }}"
                                                style="margin-right:1rem">
                                                <i class="fa fa-edit fa-2x"></i></a>
                                            <a href="#"
                                                onclick="return confirm('Are you sure?') || event.stopImmediatePropagation()"
                                                wire:click="deleteSlider({{ $slider->id }})">
                                                <i class="fa fa-times fa-2x text-danger"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $sliders->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
