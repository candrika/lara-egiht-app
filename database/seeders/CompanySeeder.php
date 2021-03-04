<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('company')->insert([
            'companyname'=>'ud Lukito',
            'lastperiod'=>2020,
            'company_build'=>date('Y-m-d'),
            'logo'=>'ud_lukito.png',
            'userin'=>1,
            'usermod'=>0,
            'display'=>0,
            'logo'=>'ud_lukito.png',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>null
        ]);
    }
}
