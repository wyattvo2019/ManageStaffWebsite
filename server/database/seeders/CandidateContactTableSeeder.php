<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class CandidateContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('candidate_contact')->insert([
            array('del_flag'=>false, 'candidate_id'=>1,'contact_id'=>11, 'value'=>'https://fb.com/1', 'created_by'=>1, 'modified_by'=>1, 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
            array('del_flag'=>false, 'candidate_id'=>2,'contact_id'=>12, 'value'=>'https://fb.com/2', 'created_by'=>1, 'modified_by'=>1, 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
            array('del_flag'=>false, 'candidate_id'=>3,'contact_id'=>13, 'value'=>'https://fb.com/2', 'created_by'=>1, 'modified_by'=>1, 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
        ]);
    }
}
