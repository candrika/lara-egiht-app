<?php
namespace App\Controllers;

class Dashboard extends MY_Controller{

	public function index(){
		$data['url'] = base_url();
		echo view('dashboard');
	}
}
