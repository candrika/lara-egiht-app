<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CobaController extends Controller
{
    //
    public function index($nama, Request $request){

    	return $nama;

    }

    public function tambah($nama, Request $request){
    	if($request->session()->has('nama')){
    		echo 'Data sudah ada di session';
    		
    	}else{
    		$request->session()->put('nama',$nama);
    	
    	}
    } 


    public function tampil(Request $request){

    	if($request->session()->has('nama')){
    		echo $request->session()->get('nama');
    	}else{
    		echo 'data belum tersimpan disession';   		
    	}
    }

    public function hapus(Request $request){

    	$request->session()->forget('nama');

    	echo "Data telah dihapus dari session";
    }

    public function hashing(){
    	$hash_password =Hash::make('halo123');

    	echo $hash_password;
    }

    public function check_pass($pass){
    	if(Hash::check('halo123',$pass)){
    		echo 'password benar';
    	}else{
    		echo "password salah";
    	}
    }
}
