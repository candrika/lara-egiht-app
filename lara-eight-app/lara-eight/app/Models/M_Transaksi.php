<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_Transaksi extends Model
{
	protected $table="transaksi";
	
	protected $primaryKey="transaksi_id";

	protected $fillable=[
	  'jenis_transaksi',
	  'list_kategori_id',
	  'nominal',
	  'deskripsi',
	  'created_at',
	  'updated_at'
	];


	public function getDetail(){
		return $this->hasMany('App\Models\M_list');
	}

    use HasFactory;
}
