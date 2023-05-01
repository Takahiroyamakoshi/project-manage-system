<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequiredSkill extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function projectInfo()
    {
        return $this->belongsTo(ProjectInfo::class);
    }

    public function keyWord()
    {
        return $this->belongsTo(KeyWord::class);
    }
}
