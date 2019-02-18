@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Create Category</h1>
@stop

@section('content')
    <div class="box box-warning">

        <!-- /.box-header -->
        <div class="box-body">
            <form role="form" method="post" action="{{route('category.store')}}">
                @csrf
                <!-- text input -->
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Enter ...">
                </div>

                <button type="submit" class="btn btn-info pull-right">Save</button>

            </form>
        </div>
        <!-- /.box-body -->
    </div>

@stop
