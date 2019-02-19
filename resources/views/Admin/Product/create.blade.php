@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1>Create Product</h1>
@stop

@section('content')
<div class="box box-warning">

    <!-- /.box-header -->
    <div class="box-body">
        <form role="form" method="POST" action="{{isset($product)? route('product.update',[$product->id]) : route('product.store')}}">
            @csrf
            @if(isset($product))
            @method('PATCH');
            @endif();
            <!-- text input -->
            <div class="form-group">
                <label for="title">Title </label>
                <input type="text" class="form-control" name="title" placeholder="Enter ..." value="{{isset($product) ? $product->title:''}}">
            </div>

            <!-- textarea -->
            <div class="form-group">
                <label for="description">Description </label>
                <textarea class="form-control" rows="3" name="description" placeholder="Enter ...">{{isset($product) ? $product->description:''}}</textarea>
            </div>

            <!-- select -->
            <div class="form-group">
                <label for="category_id">Category </label>
                <select class="form-control" name="category_id">

                    @foreach ($categories as $category)
                    @if(isset($product))
                        <option value="{{$category->id}}"{{$product->category == $category->id ? " selected" :  null}}>{{$category->title}}</option>
                    @else
                        <option value="{{$category->id}}">{{$category->title}}</option>
                    @endif
                    @endforeach

                </select>
            </div>
            <div class="form-group">
                <label>Brand</label>
                <select class="form-control" name="brand">


                    @foreach ($brands as $brand)
                    <option value="{{$brand->id}}">{{$brand->title}}</option>
                    @endforeach


                </select>
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="float" class="form-control" name="price" placeholder="Enter ..." value="{{isset($product) ? $product->price:''}}">
            </div>
            <button type="submit" class="btn btn-info pull-right">Save</button>

        </form>
    </div>
    <!-- /.box-body -->
</div>

@stop
