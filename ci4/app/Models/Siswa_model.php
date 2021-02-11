<?php namespace App\Models;
use CodeIgniter\Model;

class Siswa_model extends Model{

	protected $table = 'data_siswa';
     
    public function getSiswa($id = null)
    {
        if($id == null){
            return $this->findAll();
        }else{
            return $this->getWhere(['id_siswa' => $id]);
        }   
    }

    public function save_siswa($id = null,$data){

    	if($id != null){
    	

    	}else{

    	}
    }
}
?>