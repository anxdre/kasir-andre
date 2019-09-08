@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Data transaksi</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
{{--                        <a href="{{route("formProduct")}}" class="btn btn-success" style="margin-bottom: 16px">Add--}}
{{--                            Product</a>--}}
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Jumlah Beli</th>
                                <th scope="col">Harga pcs</th>
                                <th scope="col">Harga total</th>
                                <th scope="col">Bayar</th>
                                <th scope="col">Kembali</th>
                                <th scope="col">Tgl Transaksi</th>
                            </tr>
                            </thead>
                            <tbody>
                           @foreach($history as $key => $data)
                               <tr>
                                   <th scope="row">{{$key+1}}</th>
                                   <td>{{$data->products->Title}}</td>
                                   <td>{{$data->jumlah}}</td>
                                   <td>{{$data->products->Price}}</td>
                                   <td>{{$data->total}}</td>
                                   <td>{{$data->bayar}}</td>
                                   <td>{{$data->susuk}}</td>
                                   <td>{{$data->created_at}}</td>
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
