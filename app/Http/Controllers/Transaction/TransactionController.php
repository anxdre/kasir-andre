<?php


namespace App\Http\Controllers\Transaction;

use Illuminate\Http\Request;
use App\Products;
use App\Transaction;
use Illuminate\Routing\Controller;

class TransactionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['history'] = Transaction::all();
        // dd($data['history'][0]->products);
        return view('transaction.home', $data);
    }

    public function transaksi($id) {
        $data['barang'] = Products::find($id);
        // dd($data['barang']);
        return view('transaction.transaksi', $data);

    }

    public function buy($id, Request $request) {
        // dd($id);
        $trans = new Transaction;
        $trans->products_id = $id;
        $trans->jumlah = $request->jumlah;
        $trans->bayar = $request->bayar;
        $trans->susuk = $request->kembali;
        $trans->total = $request->total;
        $trans->save();
        return redirect()->route('products');
    }
}
