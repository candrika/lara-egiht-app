<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_List;
class PengeluaranController extends Controller
{
    
    public function listPengeluaran(){
    	$outcome =M_List::where('jenis_kategori',2)->get();
    	return view('pengeluaran/pengeluaran',['pengeluaran'=>$outcome]);
    }

    public function form_tambah(){
    	return view('pengeluaran/tambah_pengeluaran');
    }

    public function tambahKategori(Request $request){
    	$this->validate($request,[
    		'nama_kategori'=>'required',
    		'deskripsi'=>'required'
    	]);

    	M_List::create([
    		'nama_kategori'=>$request->nama_kategori,
		    'jenis_kategori'=>$request->jenis_kategori,
		    'deskripsi'=>$request->deskripsi,
		    'deleted'=>0,
		    'created_at'=>date('Y-m-d H:m'),
		    'updated_at'=>date('Y-m-d H:m')
    	]);
    }

    public function editPengeluran($id){
    	
    	$out =M_List::where('jenis_kategori',2)
    				->where('list_kategori_id',$id)
    				->first();
    	
    	return view('pengeluaran/edit_pengeluaran',['out'=>$out]);
    }

    public function updatePengeluran($id,Request $request){
    	$this->validate($request,[
    		'nama_kategori'=>'required',
    		'deskripsi'=>'required'
    	]);

    	M_List::where('list_kategori_id',$id)->update([
    		'nama_kategori'=>$request->nama_kategori,
		    'jenis_kategori'=>$request->jenis_kategori,
		    'deskripsi'=>$request->deskripsi,
		    'deleted'=>0,
		    'created_at'=>date('Y-m-d H:m'),
		    'updated_at'=>date('Y-m-d H:m')
    	]);

    	return redirect('/pengeluaran');
    }

    public function hapusKategori($id){
    	$list=M_List::where('list_kategori_id',$id);
    	$list->delete();
    	return redirect('/pengeluaran');
    }
}
