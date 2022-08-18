@section('title', 'Add Product')
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
                                Add New Product
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.products') }}" class="btn btn-success pull-right">All
                                    Product</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('message') }}
                            </div>
                        @endif
                        <form action="" class="form-horizontal" wire:submit.prevent="addProduct"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Product Name</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Product Name" class="form-control input-md"
                                        wire:model="name" wire:keyup="generateslug" />
                                    @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Product Slug</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Product Slug" class="form-control input-md"
                                        wire:model="slug" disabled />
                                    @error('slug')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Product Description</label>
                                <div class="col-md-4">
                                    <textarea class="form-control" placeholder="Product Description" wire:model="short_description"></textarea>
                                    @error('short_description')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Product Description</label>
                                <div class="col-md-4">
                                    <textarea class="form-control" placeholder="Product Description" wire:model="description"></textarea>

                                    @error('description')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Regular Price</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Regular Price" class="form-control input-md"
                                        wire:model="regular_price" />
                                    @error('regular_price')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Sale Price</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Sale Price" class="form-control input-md"
                                        wire:model="sale_price" />
                                    @error('sale_price')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">SKU</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="SKU" class="form-control input-md"
                                        wire:model="SKU" />
                                    @error('SKU')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Stock</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="stock_status">
                                        <option value="instock">InStock</option>
                                        <option value="outofstock">Out Of Stock</option>
                                    </select>
                                    @error('stock_status')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Feature</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="featured">
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                    @error('featured')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Quantity</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Quantity" class="form-control input-md"
                                        wire:model="quantity" />
                                    @error('quantity')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Image</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model="image" />
                                    @if ($image)
                                        <img src="{{ $image->temporaryUrl() }}" width="120">
                                    @endif
                                    @error('image')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            {{-- multiple Image --}}
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Product Gallery</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model="images" multiple />
                                    @if ($images)
                                        @foreach ($images as $image)
                                            <img src="{{ $image->temporaryUrl() }}" width="120">
                                        @endforeach
                                    @endif
                                    @error('images')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Category</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="category_id"
                                        wire:change="changeSubcategory">
                                        <option value="0">Select Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">SubCategory</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="scategory_id">
                                        <option value="0">Select Category</option>
                                        @foreach ($scategories as $scategory)
                                            <option value="{{ $scategory->id }}">{{ $scategory->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('scategory_id')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Attribute</label>
                                <div class="col-md-3">
                                    <select class="form-control" wire:model="attr">
                                        <option value="0">Select Atribute</option>
                                        @foreach ($pattributes as $pattribute)
                                            <option value="{{ $pattribute->id }}">{{ $pattribute->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('attr')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                </div>
                                <div class="col-md-1">
                                    <button type="button" class="btn btn-info"
                                        wire:click.prevent="add">Add</button>
                                </div>
                            </div>
                            @foreach ($inputs as $key => $value)
                                <div class="form-group">
                                    <label for=""
                                        class="col-md-4 control-label">{{ $pattribute->where('id', $attribute_arr[$key])->first()->name }}</label>
                                    <div class="col-md-3">
                                        <input type="text"
                                            placeholder="{{ $pattribute->where('id', $attribute_arr[$key])->first()->name }}"
                                            class="form-control input-md"
                                            wire:model="attribute_value.{{ $value }}" />
                                    </div>
                                    <div class="col-md-1">
                                        <button type="button" class="btn btn-danger btn-sm"
                                            wire:click.prevent="remove({{ $key }})">Remote</button>
                                    </div>
                                </div>
                            @endforeach
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
