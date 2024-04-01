<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('team')->insert([
            array('del_flag'=>false, 'name'=>'Jeus', 'leader'=>2, 'description'=>"Team Jeus", 'created_by'=>1, 'modified_by'=>1, 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
            array('del_flag'=>false, 'name'=>'Admin', 'l eader'=>1, 'description'=>"Team admin", 'created_by'=>1, 'modified_by'=>1, 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
        ]);
    }
}
