@extends('startbootstrap-clean-blog-gh-pages.layouts.main')
@section('content')
    @foreach($blogs as $blog)

        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="">
                            <h2 class="post-title">{{$blog->title}}</h2>
                            <h3 class="post-subtitle">{{$blog->category}}</h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">{{$blog->tag}}</a>
                            {{$blog->created_at}}
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Pager-->
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
