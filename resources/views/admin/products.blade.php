@extends('layouts.dash')

@section('content')

    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="#">Home</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">All Products</a></li>
    </ul>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Products</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            @include('admin.include.errors')
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                    <thead>
                    <tr>
                        <th>Product Id</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Color</th>
                        <th>Size</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($products->count() > 0)
                        @foreach($products as $product)
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{$product->category->name}}</td>
                            <td><img src="{{ $product->image }}" width="80px" height="80px"></td>
                            <td>{{ $product->price }} Frw</td>
                            <td>{{ $product->color }}</td>
                            <td>{{ $product->size }}</td>
                            <td class="center">
                                <a class="btn btn-info" href="{{ route('product.edit', ['id' => $product->id]) }}">
                                    <i class="halflings-icon white edit"></i>
                                </a>
                                <a class="btn btn-danger" href="{{ route('product.delete', ['id' => $product->id]) }}">
                                    <i class="halflings-icon white trash"></i>
                                </a>
                            </td>
                            </tr>
                        @endforeach

                    @else
                        <tr>
                            <th colspan="11" class="text-center">No Products Yet</th>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div><!--/span-->
    </div><!--/row-->


@endsection