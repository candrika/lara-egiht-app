<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
class MY_Controller extends CI_Controller{

	private $nusoap_config;
	private $nusoap_server;

	public function __construct(){

		parent::__construct();
		$this->load->library("Nusoap_library");
		$this->nusoap_server = new soap_server();
		$this->nusoap_server->configureWSDL('nusoap_server','urn:nusoap_server');
	}
}	