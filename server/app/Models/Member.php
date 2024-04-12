<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'member';
    protected $fillable = ['id', 'del_flag', 'username', 'password', 'fullname', 'is_male', 'birthday', 'email', 'phone', 'picture', 'access_level', 'created_by', 'modified_by', 'created_at', 'updated_at'];
    protected $hidden = ['password'];

    public function teams(){
        return $this->belongsToMany(Team::class, TeamMember::class, 'member_id', 'team_id');
    }
    public function team_members(){
        return $this->hasMany(TeamMember::class,'member_id','id');
    }
    public function interviewer(){
        return $this->hasMany(Interviewer::class,'member_id','id');
    }
    public function interview(){
        return $this->belongsToMany(Interview::class, Interviewer::class,'member_id','interview_id');
    }
    public function member_role(){
        return $this->belongsTo(Configuration::class,'access_level','id');
    }
    public function leader_of_team(){
        return $this->hasMany(Team::class,'leader','id');
    }
    


    use HasFactory;
}
