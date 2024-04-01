<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class CandidateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('candidate')->insert([
            array('del_flag'=>false, 'name'=>'Nguyễn Thị Thu', 'is_male'=>false, 'birthday'=>'2000-12-24', 'cv'=>'', 'is_passed'=>true, 'university_id'=>1,"created_by"=>1,'modified_by'=>1, 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
            array('del_flag'=>false, 'name'=>'Nguyễn Văn Bình', 'is_male'=>true, 'birthday'=>'2001-11-25', 'cv'=>'', 'is_passed'=>true, 'university_id'=>2,"created_by"=>1,'modified_by'=>1, 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
            array('del_flag'=>false, 'name'=>'Nguyễn Thị Lý', 'is_male'=>false, 'birthday'=>'1999-07-24', 'cv'=>'', 'is_passed'=>false, 'university_id'=>3,"created_by"=>1, 'modified_by'=>1, 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
        ]);
    }
}
