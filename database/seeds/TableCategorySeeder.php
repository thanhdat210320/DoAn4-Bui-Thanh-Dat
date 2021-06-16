<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TableCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            'tenloai'=>'Xe Bán Tải',
            'xuatxu'=>'Đức',
            'parentid'=>0
        ];
        DB::table('loaisanpham')->insert($data);
    }
}
