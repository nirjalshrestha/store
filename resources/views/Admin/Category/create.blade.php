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
                    <label>Category Title</label>
                    <input type="text" class="form-control" placeholder="Enter ...">
                </div>

                <button type="submit" class="btn btn-info pull-right">Save</button>

            </form>
        </div>
        <!-- /.box-body -->
    </div>

@stop
