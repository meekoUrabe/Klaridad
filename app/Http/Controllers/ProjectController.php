<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Sector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function post_project(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'budget' => 'required|numeric',
            'status' => 'required|int',
            'description' => 'required|string',
            'photo' => 'required|mimes:jpg,bmp,png'
        ]);

        $sector_id = Sector::where('barangay_id', auth()->user()->barangay_id)->first()['sector_id'];

        return DB::transaction(function () use ($validated, $sector_id, $request) {
            $project = Project::create([
                'user_id' => auth()->user()->user_id,
                'sector_id' => $sector_id,
                'project_s_id' => $validated['status'],
                'name' => $validated['name'],
                'budget' => $validated['budget'],
                'description' => $validated['description'],
                'picture_path' => 'placeholder'
            ]);

            if (!$project->wasRecentlyCreated)
                return back()->with('error', 'Something went wrong');

            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();

            $fileName = md5('project_' . $project->project_id) . '.' . $extension;
            $file->storeAs('project', $fileName, 'project');

            $project->update(['picture_path' => $fileName]);

            if (!$project->wasChanged('picture_path'))
                return back()->with('error', 'Something went wrong');

            return back()->with('success', 'Project succesfully added');
        });

        return redirect()->route('home')->with('error', 'Something went wrong');
    }
}
