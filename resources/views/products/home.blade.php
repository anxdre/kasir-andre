@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <a href="{{route("formProduct")}}" class="btn btn-success" style="margin-bottom: 16px">Add
                            Product</a>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Title</th>
                                <th scope="col">Price</th>
                                <th scope="col">Stock</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($entity as $key => $data)
                                <tr>
                                    <th scope="row">{{$key+1}}</th>
                                    <td>{{$data->Title}}</td>
                                    <td>{{$data->Price}}</td>
                                    <td>{{$data->Stock}}</td>
                                    <td>
                                        <a href="{{route('formEditProduct',$data->id)}}" class="btn btn-primary">Edit</a>
                                        <a href="{{route('deleteProduct',$data->id)}}" methods="post" class="btn btn-danger" style="margin-left: 12px">Delete</a>
                                        <a href="{{route('transaksi',$data->id)}}" class="btn btn-success" style="margin-left: 12px">Transaksi</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
