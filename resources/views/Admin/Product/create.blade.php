@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Create Product</h1>
@stop

@section('content')
    <div class="box box-warning">

        <!-- /.box-header -->
        <div class="box-body">
            <form role="form"  method="post" action="{{route('product.store')}}">
                @csrf

                <!-- text input -->
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Enter ...">
                </div>

                <!-- textarea -->
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" rows="3" name="description" placeholder="Enter ..."></textarea>
                </div>

                <!-- select -->
                <div class="form-group">
                    <label>Category</label>
                    <select class="form-control" name="category_id">
                        @foreach ($cetegories as $category)
                            <option value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach

                    </select>
                </div>
                <div class="form-group">
                    <label>Brand</label>
                    <select class="form-control" name="brand">

                            <option >Option 1</option>



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
