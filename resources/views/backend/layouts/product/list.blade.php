@extends('backend.master')
@section('content')
    <h1>Products</h1>

    <div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
        <i class="bi bi-alarm"></i>
        Create Product
    </button>
    </div>
    @if(session()->has('message'))
        <div class="row" style="padding: 10px;">
            <span class="alert alert-success">{{session()->get('message')}}</span>
        </div>
    @endif

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Product image</th>
            <th scope="col">Product Name</th>
            <th scope="col">Category Name</th>
            <th scope="col">Price</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
        <tr>
            <th scope="row">{{$product->id}}</th>
            <td>
                <img src="{{url('/uploads/'.$product->image)}}" width="100px" alt="product image">
            </td>
            <td>{{$product->name}}</td>
            <td>{{$product->category->name}}</td>
            <td>{{$product->price}} .BDT</td>
            <td >
                {{$product->status}}
                </td>
            <td>
                <a href="" class="btn btn-success">View</a>
                <a href="{{route('product.edit',$product->id)}}" class="btn btn-warning">Edit</a>
                <a onclick="return confirm('Are you sure you want to delete this item?');" href="{{route('product.delete',$product->id)}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
        </tbody>

    </table>

        {{$products->links('pagination::bootstrap-4')}}







    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add new Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <label for="product_name">Select Category</label>
                            <select class="form-control" name="category_id" id="">
                                @foreach($categories as $cat)
                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                                @endforeach
                            </select>
                            </div>

                        <div class="form-group">
                            <label for="product_name">Name</label>
                            <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Enter Product name">
                            {{--                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>--}}
                        </div>
                        <div class="form-group">
                            <label for="product_price">Product Price</label>
                            <input type="number" class="form-control" id="product_price" name="product_price" placeholder="Enter Product Price">
                           </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control" placeholder="Enter product description" ></textarea>
                        </div>

                        <div class="form-group">
                            <label for="description">Upload Product Image</label>
                            <input type="file" class="form-control" name="product_image">
                          </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
