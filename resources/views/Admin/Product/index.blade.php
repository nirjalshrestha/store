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
                    <th>Title</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Brand</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>id</td>
                    <td>Samsung X</td>
                    <td>This is the desscription</td>
                    <td>Phone</td>
                    <td>Samsung</td>
                    <td>20000</td>
                    <td>Image photo</td>
                    <td><span class="label label-success">Edit</span></td>
                </tr>

                </tbody></table>
        </div>
        <!-- /.box-body -->
    </div>
@stop

