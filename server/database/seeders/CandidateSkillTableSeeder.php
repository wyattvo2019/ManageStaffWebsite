<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class CandidateSkillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('candidate_skill')->insert([
            array('del_flag'=>false, 'candidate_id'=>1,'skill_id'=>8, 'created_by'=>1, 'modified_by'=>1, 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
            array('del_flag'=>false, 'candidate_id'=>2,'skill_id'=>9, 'created_by'=>1, 'modified_by'=>1, 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
            array('del_flag'=>false, 'candidate_id'=>3,'skill_id'=>10, 'created_by'=>1, 'modified_by'=>1, 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
        ]);
    }
}
