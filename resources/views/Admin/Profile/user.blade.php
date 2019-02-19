@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Product List</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Products</h3>

            <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
                <tbody><tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                @foreach($profiles as $profile)
                <tr>
                   <td>{{$profile->id}}</td>
                    <td>{{$profile->name}}</td>
                    <td>{{$profile->email}}</td>
                    
                    <td>
                        <form action="{{route('profile.destroy',[$profile->id])}}" method="POST">
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
        <!-- /.box-body -->
    </div>
@stop

