@extends('startbootstrap-clean-blog-gh-pages.layouts.main')
@section('content')
    @foreach($blogs as $blog)
        <p> {{$blog->title}}</p>
    @endforeach
@endsection
