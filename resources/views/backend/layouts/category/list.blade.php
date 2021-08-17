@extends('backend.master')
@section('content')
<h1>Category List</h1>

<a href="{{route('category.create')}}" class="btn btn-info">
    <i class="bi bi-list-nested"></i>
    Create New Category</a>

<table class="table">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Category Name</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
{{--categories--}}
{{--@dd($categories)--}}
@foreach($categories as $category)
    <tr>
        <th scope="row">{{$category->id}}</th>
        <td>{{$category->name}}</td>
        <td>{{$category->status}}</td>
        <td>
            <a href="{{route('category.product',$category->id)}}" class="btn btn-primary">view</a>
        </td>
    </tr>
@endforeach
    </tbody>
</table>
@endsection
