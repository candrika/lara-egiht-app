<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('user')->insert([
            'username'=>'ekacandrika@gmail.com',
            'password'=>'123456',
            'userin'=>0,
            'usermod'=>0,
            'display'=>0,
        ]);
    }
}
