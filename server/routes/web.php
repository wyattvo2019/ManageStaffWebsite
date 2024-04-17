<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
// use Models\Member;
use App\Models\Candidate;
use App\Models\InterviewerComment;
use App\Models\Interview;
use App\Models\Interviewer;
use App\Models\Configuration;
use App\Http\Controllers\MemberController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('test', function () {
    // return DB::table('member')->get();
    $elm = Configuration::find(9);
    return $elm->getCandidateHasSkill;
});
Route::get('xuly', [MemberController::class,'xxx']);
Route::resource('xuly', [MemberController::class,'xxx']);

