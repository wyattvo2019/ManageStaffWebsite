<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class InterviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('interview')->insert([
            array('del_flag'=>false, 'status'=>true, 'evaluation'=>7.6, 'candidate_id'=>1, 'position_id'=>1, 'date'=>"2024-03-31", 'note'=>"well",'created_by'=>1, 'modified_by'=>1, 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
            array('del_flag'=>false, 'status'=>false, 'evaluation'=>0, 'candidate_id'=>2, 'position_id'=>2, 'date'=>"2024-03-25", 'note'=>"...",'created_by'=>1, 'modified_by'=>1, 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
            array('del_flag'=>false, 'status'=>true, 'evaluation'=>4.6, 'candidate_id'=>3, 'position_id'=>3, 'date'=>"2024-03-15", 'note'=>"bab",'created_by'=>1, 'modified_by'=>1, 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
        ]);
    }
}
