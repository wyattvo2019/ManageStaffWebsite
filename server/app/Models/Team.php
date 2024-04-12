<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'team';
    protected $fillable = ['id', 'del_flag', 'name', 'leader', 'description', 'created_by', 'modified_by', 'created_at', 'updated_at'];
    public function team_member(){
        return $this->hasMany(TeamMember::class, 'team_id', 'id');
    }
    public function members(){
        return $this->belongsToMany(Member::class,TeamMember::class, 'team_id','member_id');
    }
    public function leader_of_team(){
        return $this->belongsTo(Member::class,'leader', 'id');
    }
    use HasFactory;
}
