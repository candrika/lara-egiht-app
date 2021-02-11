<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_List extends Model
{
	protected $table="list_kategori";	
	protected $primaryKey="list_kategori_id";

	protected $fillable = [
	  'list_kategori_id',
	  'nama_kategori',
	  'jenis_kategori',
	  'deskripsi',
	  'deleted',
	  'created_at',
	  'updated_at'
	];


	public function getList(){
		return $this->belongTo('App\Models\M_Transaksi');
	}

    use HasFactory;
}
