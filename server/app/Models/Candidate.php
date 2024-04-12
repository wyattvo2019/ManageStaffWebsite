<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $table = 'candidate';
    protected $fillable = ['id', 'del_flag', 'name', 'is_male', 'birthday', 'cv', 'is_passed', 'university_id', 'created_by', 'modified_by', 'created_at', 'updated_at'];
    public function interviews(){
        return $this->hasMany(Interview::class, 'candidate_id', 'id');
    }
    public function skill(){
        return $this->belongsToMany(Configuration::class, CandidateSkill::class, 'candidate_id','skill_id');
    }
    public function candidate_skill(){
        return $this->hasMany(CandidateSkill::class, 'candidate_id','id');
    }
    public function candidate_contact(){
        return $this->hasMany(CandidateContact::class,'contact_id','  id');
    }
    use HasFactory;
}
