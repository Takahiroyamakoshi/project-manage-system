<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeyWord extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function desiredKeyWord()
    {
        return $this->hasMany(DesiredKeyWord::class);
    }

    public function requiredSkill()
    {
        return $this->hasMany(RequiredSkill::class);
    }
}
