@extends('backend.master')
@section('content')

    <h1>Create category</h1>

    {{-- hidden,email , text, file, password, submit, number--}}
    {{--     1. Form Level validation       --}}
    {{--     1. Server side validation       --}}

    <form action="{{route('category.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Enter Category Name</label>
            <input name="category_name" id="name" type="text" class="form-control" placeholder="Enter Category Name">
        </div>

        <div class="form-group">
            <label for="d">Description</label>
            <textarea class="form-control" name="description" id="d" placeholder="Enter Description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
