@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Create Product</h1>
@stop

@section('content')
    <div class="box box-warning">

        <!-- /.box-header -->
        <div class="box-body">
            <form role="form"  method="POST" action="{{route('product.store')}}">
                @csrf

                <!-- text input -->
                <div class="form-group">
                    <label for="title">Title </label>
                    <input type="text" class="form-control" name="title" placeholder="Enter ...">
                </div>

                <!-- textarea -->
                <div class="form-group">
                    <label for="description">Description </label>
                    <textarea class="form-control" rows="3" name="description" placeholder="Enter ..."></textarea>
                </div>

                <!-- select -->
                <div class="form-group">
                    <label for="category_id">Category </label>
                    <select class="form-control" name="category_id">
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach

                    </select>
                </div>
                <div class="form-group">
                    <label>Brand</label>
                    <select class="form-control" name="brand">

                            <option >Option 1</option>

                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach


                    </select>
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input type="float" class="form-control" name="price" placeholder="Enter ...">
                </div>
                <button type="submit" class="btn btn-info pull-right">Save</button>

            </form>
        </div>
        <!-- /.box-body -->
    </div>

@stop
