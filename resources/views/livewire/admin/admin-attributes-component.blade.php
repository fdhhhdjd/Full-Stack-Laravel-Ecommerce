@section('title', 'Admin Attribute')
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

        .sclist {
            list-style: none;
        }

        .sclist li {
            line-height: 33px;
            border-bottom: 1px solid #ccc
        }
    </style>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-4">
                                All Attributes
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="" id="" class="form-control"
                                    placeholder="Search..." wire:model="searchTerm" />
                            </div>
                            <div class="col-md-4">
                                <a href="{{ route('admin.add_attributes') }}" class="btn btn-success pull-right">Add
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
                                    <th> Name</th>
                                    <th>Created-At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pattributes as $pattribute)
                                    <tr>
                                        <td>{{ $pattribute->id }}</td>
                                        <td>{{ $pattribute->name }}</td>
                                        <td>{{ $pattribute->created_at }}</td>
                                        <td>
                                            <a href="{{ route('admin.edit_attributes', ['attribute_id' => $pattribute->id]) }}"
                                                style="margin-right:1rem">
                                                <i class="fa fa-edit fa-2x"></i></a>
                                            <a href="#"
                                                onclick="return confirm('Are you sure?') || event.stopImmediatePropagation()"
                                                wire:click="deleteAttribute({{ $pattribute->id }})">
                                                <i class="fa fa-times fa-2x text-danger"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $pattributes->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
