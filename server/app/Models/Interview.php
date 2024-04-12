<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    protected $table = 'interview';
    protected $fillable = ['id', 'del_flag', 'status', 'evaluation', 'candidate_id', 'position_id', 'date', 'note', 'created_by', 'modified_by', 'created_at', 'updated_at'];
    public function getInterviewer(){
        return $this->hasMany(Interviewer::class, 'interview_id', 'id');
    }
    public function getCandidate(){
        return $this->belongsTo(Candidate::class, 'candidate_id', 'id');
    }
    public function getMember(){
        return $this->belongsToMany(Member::class,Interviewer::class,'interview_id','member_id');
    }
    public function getPosition(){
        return $this->belongsTo(Configuration::class, 'position_id', 'id');
    }
    public function getComment(){
        return $this->hasManyThrough(InterviewerComment::class, Interviewer::class,'interview_id','interviewer_id', 'id', 'id');
    }
    use HasFactory;
}
