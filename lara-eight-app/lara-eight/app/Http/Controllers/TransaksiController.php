<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\M_Transaksi;
use App\Models\M_List;
use App\Models\Saldo;

class TransaksiController extends Controller
{
    //
    public function index(Request $request){
    	// echo $request->startdate;die;
    	if($request->startdate!='' && $request->enddate!=''){
    		 $sd = date('Y-m-d',strtotime($request->startdate)).' 	00:00:00';
    		 $nd = date('Y-m-d',strtotime($request->enddate)).' 32:59:59';
    		 
    		 $trx =DB::table('transaksi')->select(
    		  'list_kategori.nama_kategori',
    		  'list_kategori.list_kategori_id',
    		  'transaksi.transaksi_id',
    		  'transaksi.deskripsi',
    		  'transaksi.nominal',
    		  DB::raw('(CASE WHEN transaksi.jenis_transaksi = 1 THEN '."'Pemasukan'".' WHEN  transaksi.jenis_transaksi = 2 THEN '."'Pengeluaran'".' END) AS jenis_transaksi'))
    		  ->join('list_kategori','list_kategori.list_kategori_id','=','transaksi.list_kategori_id')
    		  ->whereBetween('transaksi.created_at',[$sd,$nd])
    		  ->get();
    	}else{
    		$trx =DB::table('transaksi')->select(
    		  'list_kategori.nama_kategori',
    		  'list_kategori.list_kategori_id',
    		  'transaksi.transaksi_id',
    		  'transaksi.deskripsi',
    		  'transaksi.nominal',
    		  DB::raw('(CASE WHEN transaksi.jenis_transaksi = 1 THEN '."'Pemasukan'".' WHEN  transaksi.jenis_transaksi = 2 THEN '."'Pengeluaran'".' END) AS jenis_transaksi'))
    		  ->join('list_kategori','list_kategori.list_kategori_id','=','transaksi.list_kategori_id')->get();	
    	}


    	return view('transaksi/index',['trx'=>$trx]); 
    }

    public function filterDate(Request $request){

    	$date_filter =M_Transaksi::where([
    		'startdate'=>$request->startdate,
    		'enddate'=>$request->enddate,
    	])->first();
    }

    public function form_tambah(){
    	$list_kategori = M_List::All();

    	return view('transaksi/tambah',['list'=>$list_kategori]);
    }

    public function tambahTrx(Request $request){
    	// print_r($request);die;
    	$this->validate($request,[
    		'jenis_transaksi'=>'required',
    		'jenis_kategori'=>'required',
    		'nominal'=>'required',
    		'deskripsi'=>'required',
    	]);

    	$transaksi = new M_Transaksi();

    	$transaksi->jenis_transaksi = $request->jenis_transaksi;
	    $transaksi->list_kategori_id= $request->jenis_kategori;
	    $transaksi->nominal = $request->jenis_transaksi;
	    $transaksi->deskripsi = $request->deskripsi;
	    $transaksi->created_at = date('Y-m-d H:m');
	    $transaksi->updated_at =null; 
    	
    	$transaksi->save();

    	$primaryKey = $transaksi->transaksi_id;

    	//insert ke table saldo 
    	if($request->jenis_kategori==1){
    		
    		Saldo::create([
    			'transaksi_id'=>$primaryKey,
    			'pemasukan'=>$request->nominal,
    		]);

    	}else if($request->jenis_kategori==2){
    		Saldo::create([
    			'transaksi_id'=>$primaryKey,
    			'pengeluaran'=>$request->nominal,
    		]);
    	}
    	
    	return redirect('/transaksi');
    }

    public function editTrx($id){

    	$trx=DB::table('transaksi')->select(
    		  'list_kategori.nama_kategori',
    		  'list_kategori.list_kategori_id',
    		  'transaksi.transaksi_id',
    		  'transaksi.jenis_transaksi as jenis_transaksi_id',
    		  'transaksi.deskripsi',
    		  'transaksi.nominal',
    		  DB::raw('(CASE WHEN transaksi.jenis_transaksi = 1 THEN '."'Pemasukan'".' WHEN  transaksi.jenis_transaksi = 2 THEN '."'Pengeluaran'".' END) AS jenis_transaksi'))
    		  ->join('list_kategori','list_kategori.list_kategori_id','=','transaksi.list_kategori_id')->where('transaksi.transaksi_id',$id)->first();

    	$list = M_List::All();

    	return view('transaksi/edit',['trx'=>$trx,'list'=>$list]);
    }

    public function updateTrx($id,Request $request){

    	$this->validate($request,[
    		'jenis_transaksi'=>'required',
    		'jenis_kategori'=>'required',
    		'nominal'=>'required',
    		'deskripsi'=>'required',
    	]);

    	M_Transaksi::where('transaksi_id',$id)->update([
    		  'list_kategori_id'=>$request->jenis_transaksi,
			  'jenis_transaksi'=>$request->jenis_kategori,
			  'nominal'=>$request->nominal,
			  'deskripsi'=>$request->deskripsi,
			  'updated_at'=>date('Y-m-d H:m')
    	]);

    	return redirect('/transaksi');
    }

    public function hapusTransaks($id){
    	M_Transaksi::where('transaksi_id',$id)->delete();
    	return redirect('/transaksi');
    }
}
