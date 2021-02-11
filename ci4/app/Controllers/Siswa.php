<?php namespace App\Controllers;

use App\Models\Siswa_model;

class Siswa extends MY_Controller{

	public function index(){
		$model = new Siswa_model();

		$data['siswa'] = $model->getSiswa($id=null);
	}

		
}