@extends('adminlte::page')

@section('content_header')
    <nav aria-label="breadcrumb" style="font-size: 15pt">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/admin') }}" style="color:#ff9204">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/admin/products') }}" style="color:#ff9204">Products</a></li>
            <li class="breadcrumb-item status" aria-current="page">Product Details</li>
        </ol>
    </nav>
    <hr>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header bg-orange">
                    <h3 class="card-title"><b>Data registered for this particular product</b></h3>
                </div>

                <div class="card-body" style="display:block;">

                        <div class="row">
                            <!-- Left section -->
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="category_id">Category</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-tags"></i></span>
                                                </div>
                                                <select name="category_id" id="category_id" class="form-control" disabled>
                                                    <option value="">{{ $product->category->name }}</option>
                                                   
                                                </select>
                                            </div>
                                            @error('category_id')
                                                <small style="color: red">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="code">Code</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-barcode"></i></span>
                                                </div>
                                                <input type="text" value="{{ $product->code }}" class="form-control" id="code" name="code" placeholder="Enter the code for the product" readonly>
                                            </div>
                                            @error('code')
                                                <small style="color: red">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-box"></i></span>
                                                </div>
                                                <input type="text" value="{{ $product->name }}" class="form-control" id="name" name="name" placeholder="Enter the name for the product" readonly>
                                            </div>
                                            @error('name')
                                                <small style="color: red">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                    <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="description" style="color: #ff9204">Description</label>
                                            <div class="">
                                                <p>{!! $product->description !!}</p>
                                            </div>
                                            @error('description')
                                                <small style="color: red">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="purchase_price">Purchase Price</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-money-bill-wave"></i></span>
                                                </div>
                                                <input type="number" value="{{ $product->purchase_price }}" class="form-control" id="purchase_price" name="purchase_price" placeholder="Enter the purchase price for the product" readonly>
                                            </div>
                                            @error('purchase_price')
                                                <small style="color: red">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="sale_price">Sale Price</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-money-bill-wave"></i></span>
                                                </div>
                                                <input type="number" value="{{ $product->purchase_price }}" class="form-control" id="sale_price" name="sale_price" placeholder="Enter the sale price for the product" readonly>
                                            </div>
                                            @error('sale_price')
                                                <small style="color: red">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="unit_of_measurement">Unit of Measurement</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-balance-scale"></i></span>
                                                </div>
                                                <select name="unit_of_measurement" id="unit_of_measurement" class="form-control" disabled>
                                                    <option value="">{{ $product->unit_of_measurement }}</option>
                                                   
                                                </select>
                                                
                                            </div>
                                            @error('unit_of_measurement')
                                                <small style="color: red">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="minimum_stock">Minimum Stock</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-arrow-down"></i></span>
                                                </div>
                                                <input type="number" value="{{ $product->minimum_stock}}" class="form-control" id="minimum_stock" name="minimum_stock" placeholder="Enter the minimum stock for the product" readonly>
                                            </div>
                                            @error('minimum_stock')
                                                <small style="color: red">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="maximum_stock">Maximum Stock</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-arrow-up"></i></span>
                                                </div>
                                                <input type="number" value="{{ $product->maximum_stock }}" class="form-control" id="maximum_stock" name="maximum_stock" placeholder="Enter the sale price for the product" readonly>
                                            </div>
                                            @error('maximum_stock')
                                                <small style="color: red">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="status">Product Status</label>
                                            <div class="input-group mb-3 form-control" style="border-color: #ffff">
                                                 @if($product->status == '1')
                                                    <span class="badge badge-success">In Stock</span>
                                                 @else
                                                    <span class="badge badge-danger">Out of Stock</span>
                                                 @endif
                                            </div>
                                            

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Right section (Image preview) -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="image">Image</label>
                                
                                    <img id="img-preview" src="{{ asset('storage/' . $product->image) }}" alt="" style="width:100%; border-radius:8px; margin-top:10px;">
                                    @error('image')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="{{ url('/admin/products') }}" class="btn btn-default">Go Back</a>
                                    
                                </div>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')

@stop

@section('js')

@stop
