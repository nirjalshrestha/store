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

                            <th>id</th>
                            <th>title</th>
                            <th>action</th>


                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->title}}</td>
                            <td><a href="{{route('category.edit',[$category->id])}}">EDIT</a></td>

                            <form action="{{route('category.destroy',[$category->id])}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-primary">Delete</button>
                            </form>

                        </tr>

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
