@extends('admin.layouts.main')
@section('content')
    <form method="POST" action="">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="title">
        </div>
        <div class="mb-lg-3">
            <label for="exampleFormControlInput1" class="form-label">Category</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="category">
        </div>
        <div class="mb-lg-3">
            <label for="exampleFormControlInput1" class="form-label">Tag</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="tag">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="mb-lg-3">
            <label for="exampleFormControlInput1" class="form-label">Image</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="image">
        </div>
        <button class="btn btn-success">create</button>
    </form>
@endsection
