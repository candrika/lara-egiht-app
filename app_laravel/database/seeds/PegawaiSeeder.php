<?php
use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder{

	public function run(){
		//
		$faker = Faker::create('id_ID');
		
		for($x=1;$x<=10;$x++){
			DB::table('pegawai')->insert([
				'nama'=>$faker->name,
				'alamat'=>$faker->address
			]);
		}
	}
}
?>