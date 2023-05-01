<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendInfo extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'attend_info';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function projectInfo()
    {
        return $this->belongsTo(ProjectInfo::class);
    }
}
