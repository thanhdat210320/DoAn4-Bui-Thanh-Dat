<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tableseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            'name'=>'dat',
            'email'=>'dat09@gmail.com',
            'password'=>bcrypt('123456')
        ];
        DB::table('users')->insert($data);
    }
}
