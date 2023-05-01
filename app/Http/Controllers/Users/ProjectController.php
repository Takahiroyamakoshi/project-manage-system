<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\ProjectInfo;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function show($id)
    {
        $project = ProjectInfo::find($id);
        return view('project_detail', ['project' => $project]);
    }
}
