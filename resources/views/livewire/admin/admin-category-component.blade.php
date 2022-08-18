@section('title', 'Category')
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
                                All Categories
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="" id="" class="form-control"
                                    placeholder="Search..." wire:model="searchTerm" />
                            </div>
                            <div class="col-md-4">
                                <a href="{{ route('admin.addcategory') }}" class="btn btn-success pull-right">Add
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
                                    <th>Category Name</th>
                                    <th>Slug</th>
                                    <th>Sub Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->slug }}</td>
                                        <td>
                                            @foreach ($category->subCategory as $scategory)
                                                @if ($scategory)
                                                    <ul class="sclist">
                                                        <li><i class="fa fa-caret-right"></i>{{ $scategory->name }}
                                                            <a
                                                                href="{{ route('admin.editcategory', ['category_slug' => $category->slug, 'scategory_slug' => $scategory->slug]) }}">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                            <a href="#"
                                                                onclick="return confirm('Are you sure?') || event.stopImmediatePropagation()"
                                                                wire:click.prevent="deleteSubcategory({{ $scategory->id }})">
                                                                <i class="fa fa-times text-danger"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.editcategory', ['category_slug' => $category->slug]) }}"
                                                style="margin-right:1rem">
                                                <i class="fa fa-edit fa-2x"></i></a>
                                            <a href="{{ route('admin.deletecategory', ['id' => $category->id]) }}"
                                                onclick="return confirm('Are you sure?')">
                                                <i class="fa fa-times fa-2x text-danger"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- wire:click="deleteCategory({{ $category->id }})" --}}
