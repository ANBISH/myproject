@extends('admin.layouts.main')
@section('content')

    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Category</th>
            <th scope="col">Tag</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
        </tr>
        </thead>

        <tbody>
        @foreach($blogs as $blog)
        <tr>
            <th scope="row">{{$blog->id}}</th>
            <td>{{$blog->title}}</td>
            <td>{{$blog->category}}</td>
            <td>{{$blog->tag}}</td>
            <td>{{$blog->description}}</td>
            <td>{{$blog->image}}</td>
            <td><a class="btn btn-success" href="{{route('create.index')}}">create</a></td>
            <td><a class="btn btn-danger" href="#">delete</a></td>
            <td><a class="btn btn-info" href="#">update</a></td>
        </tr>

        @endforeach
        </tbody>
    </table>
@endsection
