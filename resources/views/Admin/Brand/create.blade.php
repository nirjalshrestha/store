@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Create Brandt</h1>
@stop

@section('content')
    <div class="box box-warning">

        <!-- /.box-header -->
        <div class="box-body">
            <form role="form" action="{{isset($brand) ?route('brand.update',[$brand->id]) :route('brand.store')}}" method="POST">
                @csrf
                @method('PATCH');
                <!-- text input -->
                <div class="form-group">
                    <label>Brand Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Enter ..." value="{{isset($brand) ? $brand->title:''}}">
                </div>

                <button type="submit" class="btn btn-info pull-right">Save</button>

            </form>
        </div>
        <!-- /.box-body -->
    </div>

@stop
