<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::with(['technologies', 'images'])->get();

        return view('projects', ["title" => "Projects", "projects" => $projects]);
    }

    public function singleProject(Project $project){
        return view('project', ["title" => $project->title , "project" => $project]);
    }
}
