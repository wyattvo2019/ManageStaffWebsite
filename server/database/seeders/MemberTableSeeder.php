<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class MemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('member')->insert([
            array('del_flag'=>false, 'username'=>'admin', 'password'=>'admin', 'fullname'=>"Admin", 'is_male'=>true, 'birthday'=>"1997-07-22", 'email'=>'votranquy96@gmail.com', 'phone'=>'035638729', 'picture'=>'', 'access_level'=>4, 'created_by'=>1, 'modified_by'=>1, 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
            array('del_flag'=>false, 'username'=>'levana', 'password'=>'levana', 'fullname'=>"Lê Văn A", 'is_male'=>true, 'birthday'=>"1998-07-25", 'email'=>'levana@gmail.com', 'phone'=>'035638737', 'picture'=>'', 'access_level'=>5, 'created_by'=>1, 'modified_by'=>1, 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
            array('del_flag'=>false, 'username'=>'nguyenthib', 'password'=>'nguyenthib', 'fullname'=>"Nguyễn Thị B", 'is_male'=>false, 'birthday'=>"1998-07-11", 'email'=>'nguyenthib@gmail.com', 'phone'=>'035638776', 'picture'=>'', 'access_level'=>6, 'created_by'=>1, 'modified_by'=>1, 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
        ]);
    }
}
