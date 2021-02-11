<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Saldo;

class HomeController extends Controller
{
	public function index(){

		$saldo=Saldo::All();
    	
    	$total_pengeluaran=0;
    	$total_pemasukan=0;
    	
    	$i=0;

    	foreach ($saldo as $key => $s) {
    	 	# code...
    		$total_pemasukan +=$s->pemasukan;
    		$total_pengeluaran +=$s->pengeluaran;

    		$i++;
    	} 	

    	$saldo_terkini = $total_pemasukan-$total_pengeluaran;

    	// $dataSaldo = [
	    // 	'total_pemasukan'=>$saldo_terkini*1,
	    // 	'total_pemasukan'=>$total_pemasukan*1,
	    // 	'total_pengeluaran'=>$total_pengeluaran*1,
    	// ];

    	// print_r($dataSaldo);
		return view('dashboard',[
			'saldo_terkini'=>$saldo_terkini,
			'total_pemasukan'=>$total_pemasukan,
			'total_pengeluaran'=>$total_pengeluaran
		]);
    }
}
