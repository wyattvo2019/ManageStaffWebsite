<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class TeamMemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('team_member')->insert([
            array('del_flag'=>false, 'member_id'=>2, 'team_id'=>1, 'team_member_role'=>14, 'created_by'=>1, 'modified_by'=>1, 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
            array('del_flag'=>false, 'member_id'=>1, 'team_id'=>2, 'team_member_role'=>15, 'created_by'=>1, 'modified_by'=>1, 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
            array('del_flag'=>false, 'member_id'=>3, 'team_id'=>1, 'team_member_role'=>16, 'created_by'=>1, 'modified_by'=>1, 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
        ]);
    }
}
