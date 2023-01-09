<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\phase;

class ProjectController extends Controller
{
    public function index(){
        $data = Project::get();
        //return $data;
        return view('project-list', compact('data'));
    }

    public function addProject(){
        return view('add-project');
    }

    public function saveProject(Request $request){

        $request->validate([
            'name' => 'required',
            'description'  => 'required',
            'starting_date'  => 'required',
            'ending_date'  => 'required'
        ]);

        $name = $request->name;
        $description = $request->description;
        $starting_date = $request->starting_date;
        $ending_date = $request->ending_date;

        $project = new Project();
        $project->name = $name;
        $project->description = $description;
        $project->starting_date = $starting_date;
        $project->ending_date = $ending_date;
        $project->save();

        return redirect()->back()->with('success', 'Project added successfuly');
    }

    public function getProjectById($id){
        $data = Project::where('id', '=',$id)->first();
        $phase = Phase::where('project_id', '=',$id)->get();
        $code = "";
        
        
        return view('projectById', compact('data', 'phase', 'code'));
    }

    public function addPhase($id){
        $project = Project::where('id', '=',$id)->first();
        
        return view('add-phase', compact('project'));
    }

    public function savePhase(Request $request){
        $request->validate([
            'name' => 'required',
            'duration'  => 'required',
            'priority'  => 'required',
            
        ]);

        $name = $request->name;
        $duration = $request->duration;
        $priority = $request->priority;
        $project_id = $request->project_id;
        

        $phase = new phase();
        $phase->name = $name;
        $phase->duration = $duration;
        $phase->priority = $priority;
        $phase->project_id = $project_id;
        $phase->save();
        return redirect()->back()->with('success', 'phase added successfuly');

    }
    
}
