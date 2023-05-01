<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectInfo extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'project_info';
    public function attendInfo()
    {
        return $this->hasOne(AttendInfo::class);
    }

    public function requiredSkill() 
    {
        return $this->hasMany(RequiredSkill::class);
    }
}
