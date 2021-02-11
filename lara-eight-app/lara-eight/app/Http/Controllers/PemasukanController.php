<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_List;

class PemasukanController extends Controller
{
    
    public function listPemasukan(){
    	$income =M_List::where('jenis_kategori',1)->get();

    	return view('pemasukan/pemasukan',['pemasukan'=>$income]);
    }

   	public function form_tambah(){
    	return view('pemasukan/tambah_pemasukan');
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

    public function editPemasukan($id){
    	
    	$in =M_List::where('jenis_kategori',1)
    				->where('list_kategori_id',$id)
    				->first();
    	
    	return view('pemasukan/edit_kategori',['in'=>$in]);
    }

    public function updatePemasukan($id,Request $request){
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

    	return redirect('/pemasukan');
    }

    public function hapusKategori($id){
    	$list=M_List::where('list_kategori_id',$id);
    	$list->delete();
    	return redirect('/pemasukan');
    }
}
