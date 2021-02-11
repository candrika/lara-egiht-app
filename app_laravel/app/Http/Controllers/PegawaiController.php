<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\product;
// use Illuminate\;

class PegawaiController extends Controller
{
    //
    public function index(){
        
        // $test = DB::table('products')->get();
    	$product = product::all();
    	
    	// print_r($test);
    	return view('welcome',['product'=>$product]);
    }

    public function tambah(){

    	return view('tambah');
    }

    public function store(Request $request){

        //insert ke database
        DB::table('products')->insert([
          // 'id' int(10) NOT NULL AUTO_INCREMENT,
          'name'        =>$request->name,
          'description' =>$request->description,
          'price'       =>$request->price,
          'stock'       =>$request->stock,
          'image'       =>'-',
        ]);

        return redirect('/pegawai');
    }

    public function edit($id){
        // DB::table('pegawai')->where('pegawai_id',$id)->get()
        $product =DB::table('products')->where('id',$id)->get();

        return view('edit',['product'=>$product]);
    }

    public function update(Request $request){
        //query builder
        DB::table('products')->where('id',$request->id)->update([
            'name'        =>$request->name,
            'description' =>$request->description,
            'price'       =>$request->price,
            'stock'       =>$request->stock,
            'image'       =>'-',
        ]);

        return redirect('/pegawai');
    }

    public function hapus($id){
    //use query builder
        DB::table('products')->where('id',$id)->delete();

        return redirect('/pegawai');
    }

    public function save(Request $request){
    //use query builder
        Product::create([
          'name'        =>$request->name,
          'description' =>$request->description,
          'price'       =>$request->price,
          'stock'       =>$request->stock,
          'image'       =>'-',
        ]);
    }

    public function get_elo(){

        $product = product::all();
        
        // print_r($test);
        return view('welcome2',['product'=>$product]);
    }

    public function tambah_elo(){

        return view('tambah2');
    }

    public function edit_elo($id){
    //use Eloquent
        $product = product::where('id','=',$id)->get();

        return view('edit',['product'=>$product]);
    }

    public function update_elo(Request $request,$id){

        $product =Product::find($id);

        $product->name        = $request->name;
        $product->description = $request->description;
        $product->price       = $request->price;
        $product->image       = '-';
        
        $product->save();

        return redirect('/pegawai');
    }

    public function hapus_elo($id){
    //use Eloquent
        $product = product::where('id','=',$id);
        
        $product->delete();

        return redirect('/pegawai/get_elo');
    }

    public function trash(){

        $product = Product::onlyTrashed()->get();

        return view('welcome2',['product'=>$product]);
    }

    public function kembalikan($id){

        $product = Product::onlyTrashed()->where('id',$id);
        $product->restore();
        return redirect('pegawai/trash');
    }

    public function hapus_permanen($id){

        $product = Product::onlyTrashed()->where('id',$id);
        $product->forceDelete();
        return redirect('pegawai/trash');
    }

    public function kembalikan_semua(){

        $product = Product::onlyTrashed()->where('id',$id);
        $product->restore();
        return redirect('pegawai/trash');
    }

    public function hapus_permanen_semua($id){

        $product = Product::onlyTrashed()->where('id',$id);
        $product->forceDelete();
        return redirect('pegawai/trash');
    }
}
