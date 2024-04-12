<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InterviewerComment extends Model
{
    protected $table = 'interviewer_comment';
    protected $fillable = ['id', 'del_flag', 'interviewer_id', 'comment', 'rating', 'created_by', 'modified_by', 'created_at', 'updated_at'];
    public function getInterviewer(){
        return $this->belongsTo(Interviewer::class, 'interviewer_id', 'id');
    }
    public function getInterview(){
        return $this->belongsToMany(Interview::class,Interviewer::class, 'id','interview_id');
    }
    public function getMember(){
        return $this->belongsToMany(Member::class, Interviewer::class, 'id', 'member_id');
    }

    use HasFactory;
}
