@extends('backend.master')
@section('content')

    <h2>Update your product</h2>
    <form action="{{route('product.update',$product->id)}}" method="POST" enctype="multipart/form-data" >
        @method('PUT')
        <div class="modal-body">
            @csrf
            <div class="form-group">
                <label for="product_name">Select Category</label>
                <select class="form-control" name="category_id" id="">
                    @foreach($categories as $cat)
                        <option
                            @if($product->category_id==$cat->id)
                            selected
                            @endif
                            value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="product_name">Name</label>
                <input value="{{$product->name}}" type="text" class="form-control" id="product_name" name="product_name" placeholder="Enter Product name">
                {{--                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>--}}
            </div>
            <div class="form-group">
                <label for="product_price">Product Price</label>
                <input value="{{$product->price}}"  type="number" class="form-control" id="product_price" name="product_price" placeholder="Enter Product Price">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" placeholder="Enter product description" >{{$product->description}}
                </textarea>
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


@endsection
