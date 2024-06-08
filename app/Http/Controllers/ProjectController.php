<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $query = Project::query();

        if ($request->has('name') && !empty($request->input('name'))) {
            $query->where('name', $request->input('name'));
        }

        if ($request->has('department') && !empty($request->input('department'))) {
            $query->where('department', $request->input('department'));
        }

        if ($request->has('start_date') && !empty($request->input('start_date'))) {
            $query->where('start_date', $request->input('start_date'));
        }

        if ($request->has('end_date') && !empty($request->input('end_date'))) {
            $query->where('end_date', $request->input('end_date'));
        }

        if ($request->has('status') && !empty($request->input('status'))) {
            $query->where('status', $request->input('status'));
        }

        $projects = $query->get();

        return view('projects.index', ['projects' => $projects]);
    }

    public function create()
    {
        return view('projects.create');
    }

    public function details($project){
        $project = Project::findOrFail($project);;
        return view('projects.details',['project'=>$project]);        
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'department' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'status' => 'required|string',
        ]);

        $project = Project::create($data);

        $project->users()->attach(Auth::id());

        return redirect()->route('project.index')->with('success', 'Project created successfully.');
    }

    public function edit(Project $project)
    {
        return view('projects.edit', ['project'=> $project]);
    }

    public function update(Request $request, Project $project)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'department' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'status' => 'required|string',
        ]);

        $project->update($data);

        return redirect()->route('project.index')->with('success', 'Project updated successfully.');
    }

    public function assign($projectId)
    {
        $project = Project::findOrFail($projectId);
        $user = Auth::user();

        if ($project->users()->where('user_id', $user->id)->exists()) {
            return redirect()->route('project.index')->with('error', 'User is already assigned to this project.');
        }

        $project->users()->attach($user->id);

        return redirect()->route('project.index')->with('success', 'Project joined successfully.');
    }

    public function delete(Project $project)
    {
        $project->delete();
        return redirect()->route('project.index')->with('success', 'Project deleted successfully.');
    }
}
