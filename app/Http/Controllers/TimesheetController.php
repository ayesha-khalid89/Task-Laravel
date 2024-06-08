<?php

namespace App\Http\Controllers;
use App\Models\Timesheet;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TimesheetController extends Controller
{
    public function index(Request $request)
    {
        $query = Timesheet::query();

        // Apply filters if they are provided
        if ($request->has('task_name') && !empty($request->input('task_name'))) {
            $query->where('task_name', $request->input('task_name'));
        }

        if ($request->has('date') && !empty($request->input('date'))) {
            $query->where('date', $request->input('date'));
        }

        if ($request->has('hours') && !empty($request->input('hours'))) {
            $query->where('hours', $request->input('hours'));
        }

        $timesheets = $query->get();

        return view('timesheets.index', ['timesheets' => $timesheets]);
    }

    public function create()
    {
        $projects = Project::all();
        return view('timesheets.create', compact('projects'));
    }

    public function details($timesheet){
        $timesheet = Timesheet::findOrFail($timesheet);;
        return view('timesheets.details',['timesheet'=>$timesheet]);        
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'project_id' => 'required|exists:projects,id',
            'task_name' => 'required|string|max:255',
            'date' => 'required|date',
            'hours' => 'required|integer',
        ]);

        $data['user_id'] = Auth::id();
        Timesheet::create($data);

        return redirect()->route('timesheet.index')->with('success', 'Timesheet created successfully.');
    }

    public function edit(Timesheet $timesheet)
    {
        $projects = Project::all();
        return view('timesheets.edit', compact('timesheet', 'projects'));
    }

    public function update(Request $request, Timesheet $timesheet)
    {
        $data = $request->validate([
            'project_id' => 'required|exists:projects,id',
            'task_name' => 'required|string|max:255',
            'date' => 'required|date',
            'hours' => 'required|integer',
        ]);

        $timesheet->update($data);

        return redirect()->route('timesheet.index')->with('success', 'Timesheet updated successfully.');
    }

    public function delete(Timesheet $timesheet)
    {
        $timesheet->delete();
        return redirect()->route('timesheet.index')->with('success', 'Timesheet deleted successfully.');
    }
}
