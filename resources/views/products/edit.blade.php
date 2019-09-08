@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Product</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                            <form method="post" action="{{route('editProduct',$products -> id)}}">
                                @csrf
                                <div class="form-group">
                                    <label for="title">Product Title</label>
                                    <input type="text" value="{{$products->Title}}" name="title" class="form-control" id="title"
                                           placeholder="Enter Product Title" required>
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="number"  value="{{$products->Price}}"  class="form-control" id="price" name="price"
                                           placeholder="Enter Price" required>
                                </div>
                                <div class="form-group">
                                    <label for="stock">Stock</label>
                                    <input type="number "  value="{{$products->Stock}}"  class="form-control" id="stock" name="stock"
                                           placeholder="Enter Stock" required>
                                </div>
                                <input type="submit" class="btn btn-primary" value="submit">
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
