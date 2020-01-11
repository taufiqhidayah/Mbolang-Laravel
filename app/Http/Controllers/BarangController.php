<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    public function hasil(){
        // mengambil data dari table pegawai
        $barang = DB::table('barang');
        
        // mengirim data pegawai ke view index
        return view('hasilcari',['barang' => $barang]);
    }
       
	
 
	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
    		// mengambil data dari table pegawai sesuai pencarian data
		$barang = DB::table('barang')
        ->where('nama_barang','like',"%".$cari."%")
        ->paginate();
 
    		// mengirim data pegawai ke view index
		return view('daftar-produk',['barang' => $barang]);
 
	}
    public function index()
	{
    		// mengambil data dari table pegawai
		$barang = DB::table('barang')->get();
 
    		// mengirim data pegawai ke view index
		return view('index',['barang' => $barang]);
 
	}
  
    public function produk(){
        $barang = DB::table('barang')->get();
        return view ('daftar-produk',['barang' => $barang]);
    }
    public function detail($id){
        $barang =DB::table('barang')->where('id_barang',$id)->get();
        return view ('detail-produk',['barang'=>$barang]);
    }
}
