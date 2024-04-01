<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Configuration;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class ConfigurationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('configuration')->insert([
            array('del_flag'=>false, 'value'=>'Đại học Công nghệ', 'description'=>'Description about University', 'type'=>'university', 'created_by'=>1,'modified_by'=>1, 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
            array('del_flag'=>false, 'value'=>'Đại học Bách khoa - ĐH Đà Nẵng', 'description'=>'Description about University', 'type'=>'university', 'created_by'=>1,'modified_by'=>1, 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
            array('del_flag'=>false, 'value'=>'Đại học Sư phạm - ĐH Đà Nẵng', 'description'=>'Description about University', 'type'=>'university', 'created_by'=>1,'modified_by'=>1, 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
            array('del_flag'=>false, 'value'=>1, 'description'=>'Admin', 'type'=>'access_level', 'created_by'=>1,'modified_by'=>1, 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
            array('del_flag'=>false, 'value'=>2, 'description'=>'Manager', 'type'=>'access_level', 'created_by'=>1,'modified_by'=>1, 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
            array('del_flag'=>false, 'value'=>3, 'description'=>'Accountant', 'type'=>'access_level', 'created_by'=>1,'modified_by'=>1, 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
            array('del_flag'=>false, 'value'=>4, 'description'=>'Member', 'type'=>'access_level', 'created_by'=>1,'modified_by'=>1, 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
            array('del_flag'=>false, 'value'=>'Javascript', 'description'=>'Skill Javascript', 'type'=>'skill', 'created_by'=>1,'modified_by'=>1, 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
            array('del_flag'=>false, 'value'=>'Android', 'description'=>'Skill Android', 'type'=>'skill', 'created_by'=>1,'modified_by'=>1, 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
            array('del_flag'=>false, 'value'=>'PHP', 'description'=>'Skill PHP', 'type'=>'skill', 'created_by'=>1,'modified_by'=>1, 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
            array('del_flag'=>false, 'value'=>'Facebook', 'description'=>'Contact', 'type'=>'contact', 'created_by'=>1,'modified_by'=>1, 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
            array('del_flag'=>false, 'value'=>'Zalo', 'description'=>'Contact', 'type'=>'contact', 'created_by'=>1,'modified_by'=>1, 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
            array('del_flag'=>false, 'value'=>'Skype', 'description'=>'Contact', 'type'=>'contact', 'created_by'=>1,'modified_by'=>1, 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
            array('del_flag'=>false, 'value'=>'Project Manager', 'description'=>'Team Member Role', 'type'=>'team_member_role', 'created_by'=>1,'modified_by'=>1, 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
            array('del_flag'=>false, 'value'=>'Team Leader', 'description'=>'Team Member Role', 'type'=>'team_member_role', 'created_by'=>1,'modified_by'=>1, 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
            array('del_flag'=>false, 'value'=>'QA', 'description'=>'Team Member Role', 'type'=>'team_member_role', 'created_by'=>1,'modified_by'=>1, 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
            array('del_flag'=>false, 'value'=>'Dev', 'description'=>'Team Member Role', 'type'=>'team_member_role', 'created_by'=>1,'modified_by'=>1, 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
            array('del_flag'=>false, 'value'=>'PHP Dev', 'description'=>'Position of Dev', 'type'=>'position', 'created_by'=>1,'modified_by'=>1, 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
            array('del_flag'=>false, 'value'=>'Android Dev', 'description'=>'Position of Dev', 'type'=>'position', 'created_by'=>1,'modified_by'=>1, 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
            array('del_flag'=>false, 'value'=>'Project Manager Dev', 'description'=>'Position of Dev', 'type'=>'position', 'created_by'=>1,'modified_by'=>1, 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),

        ]);
    }
}
