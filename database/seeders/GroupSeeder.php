<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('group')->insert([
            'grupname'=>'Admin',
            'create'=>1,
            'read'=>1,
            'update'=>1,
            'delete'=>1,
            'display'=>0
        ]);
    }
}
