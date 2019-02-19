@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1>All Categories</h1>
@stop

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">All Categories</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>id no.</th>
                            <th>title</th>
                            <th>description</th>
                            <th>category_id</th>
                            <th>brand</th>
                            <th>price</th>
                            <th>Action</th>


                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->title}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->category}}</td>
                            <td>{{$product->brand}}</td>
                            <td>{{$product->price}}</td>
                            <td><a href="{{route('product.edit',[$product->id])}}">Edit</a></td>
                            <td>
                                <form action="{{route('product.destroy',[$product->id])}} " method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-primary">Delete</button>
                            </td>
                        </tr>
                        </form>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@stop
