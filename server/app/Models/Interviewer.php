<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interviewer extends Model
{
    protected $table = 'interviewer';
    protected $fillable = ['id', 'del_flag', 'interview_id', 'member_id', 'evaluation', 'created_by', 'modified_by', 'created_at', 'updated_at'];
    public function getComment(){
        return $this->hasMany(InterviewerComment::class,'interviewer_id', 'id');
    }
    public function getInterview(){
        return $this->belongsTo(Interview::class, 'interview_id', 'id');
    }
    public function getMember(){
        return $this->belongsTo(Member::class, "member_id", 'id');
    }
    use HasFactory;
}
