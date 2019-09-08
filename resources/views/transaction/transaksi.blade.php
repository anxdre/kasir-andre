@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Buy Product</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                            <form method="post" action="{{route('buy', $barang->id)}}">
                                @csrf
                                <table class="table">
                                    <thead>
                                        <th>Nama</th>
                                        <th>Stock</th>
                                        <th>Harga</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $barang->Title}}</td>
                                            <td>{{ $barang->Stock}}</td>
                                            <td id="harga">{{ $barang->Price}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="form-group">
                                    <label for="jumlah">Jumlah Beli</label>
                                    <input type="number"  value="" min="1" max="{{$barang->Stock}}"  class="form-control" id="jumlah" name="jumlah"
                                           placeholder="Enter Qty">
                                </div>
                                <div class="form-group">
                                    <label for="total">Total Harga</label>
                                    <input type="number"  value=""  class="form-control" id="total" name="total"
                                           placeholder="" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="bayar">Bayar</label>
                                    <input type="number"  value=""  class="form-control" id="bayar" name="bayar"
                                           placeholder="Enter Payment">
                                </div>
                                <div class="form-group">
                                    <label for="bayar">Kembali</label>
                                    <input type="number"  value=""  class="form-control" id="kembali" name="kembali"
                                           placeholder="" readonly>
                                </div>
                                <input type="submit" class="btn btn-primary" value="submit">
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function(){    
            $('#jumlah').on('keyup', function(){
                var harga = $('td#harga').text();
                var jumlah = $(this).val();
                var total = jumlah * harga;
                $('#total').val(total);
                $('#bayar').attr('min', total);
            });

            $('#bayar').on('keyup', function(){
                var bayar = $(this).val();
                var total = $('#total').val();
                var kembali = bayar - total;
                $('#kembali').val(kembali);
            });
        });
    </script>
@endpush