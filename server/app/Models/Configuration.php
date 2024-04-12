<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    protected $table = 'configuration';
    protected $fillable = ['id', 'del_flag', 'value', 'description', 'type', 'created_by', 'modified_by', 'created_at', 'updated_at'];
    public function getMemberHasAccessLevel(){
        return $this->hasMany(Member::class, 'access_level', 'id');
    }
    public function getTeamMemberRole(){
        return $this->hasMany(TeamMember::class, 'team_member_role','id');
    }
    public function getCandidateContact(){
        return $this->hasMany(CandidateContact::class, 'contact_id', 'id');
    }
    public function getCandidateUniversity(){
        return $this->hasMany(Candidate::class, 'university_id', 'id');
    }
    public function getInterviewPosition(){
        return $this->hasMany(Interview::class, 'position_id', 'id');
    }
    public function getCandidateSkill(){
        return $this->hasMany(CandidateSkill::class, 'skill_id', 'id');
    }
    public function getCandidateHasSkill(){
        return $this->belongsToMany(Candidate::class, CandidateSkill::class,'skill_id', 'candidate_id');
    }


    use HasFactory;
}
