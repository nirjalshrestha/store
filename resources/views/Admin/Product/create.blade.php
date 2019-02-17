@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Create Product</h1>
@stop

@section('content')
    <div class="box box-warning">

        <!-- /.box-header -->
        <div class="box-body">
            <form role="form">
                <!-- text input -->
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" placeholder="Enter ...">
                </div>

                <!-- textarea -->
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>

                <!-- select -->
                <div class="form-group">
                    <label>Category</label>
                    <select class="form-control">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Brand</label>
                    <select class="form-control">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input type="float" class="form-control" placeholder="Enter ...">
                </div>
                <button type="submit" class="btn btn-info pull-right">Save</button>

            </form>
        </div>
        <!-- /.box-body -->
    </div>

@stop
