<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesiredKeyWord extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function desiredProject() {
        return $this->belongsTo(DesiredProject::class);
    }

    public function keyWord() {
        return $this->belongsTo(Keyword::class);
    }
}
