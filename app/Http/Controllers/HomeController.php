<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('pemesanan');
    }
    public function insert(){
        return view('/insert');
    }
    public function detailedit($id){
        $barang =DB::table('barang')->where('id_barang',$id)->get();
        return view ('detail-edit',['barang'=>$barang]);
    }
    public function tambah(){
        return view('insert') ;
    }
    public function edit (){
        $barang = DB::table('barang')->get();
        return view ('edit',['barang' => $barang]);
    }
    public function update(Request $reques){
        DB::table('barang')->where('id_barang',$reques->id_barang)->update([
            'nama_barang'=>$reques->nama_barang,
            'deskripsi'=>$reques->deskripsi,
            'nama_penjual'=>$reques->nama_penjual,
            'harga'=>$reques->harga,
            'lokasi'=>$reques->lokasi,
            'kategori'=>$reques->kategori,
            'gambar'=>$reques->gambar

        ]);
        return redirect('/edit');
    }
    public function hapus($id){
        DB::table('barang')->where('id_barang',$id)->delete();
        return redirect('/edit');
    }
    public function store(Request $reques){
        DB::table('barang')->insert([
            'nama_barang'=>$reques->nama_barang,
            'deskripsi'=>$reques->deskripsi,
            'nama_penjual'=>$reques->nama_penjual,
            'harga'=>$reques->harga,
            'lokasi'=>$reques->lokasi,
            'kategori'=>$reques->kategori,
            'gambar'=>$reques->gambar

        ]);
        return redirect('insert');
    }
    

}
