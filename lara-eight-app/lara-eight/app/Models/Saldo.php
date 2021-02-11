<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saldo extends Model
{
    use HasFactory;

    protected $table="saldo";
    protected $primaryKey="timestamps ";

    protected $fillable = [
      'pengeluaran',
	  'pemasukan',
	  'transaksi_id'
    ];

    public $timestamps=false;

    // public function()
}
