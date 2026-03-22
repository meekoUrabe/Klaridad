<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Sector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function post_submit_report(Request $request)
    {
        dump($request->all());

        $validated = $request->validate([
            'sector_id' => 'required|int',
            'report_c_id' => 'required|int',
            'anonymous' => 'string',
            'description' => 'required|string',
            'location' => 'required|string',
            'photo' => 'required|mimes:jpg,bmp,png'
        ]);

        // hack, fix until we set users location based on sector table, not in barangay
        $sector_id = Sector::where('barangay_id', $validated['sector_id'])->first()['sector_id'];

        return DB::transaction(function () use ($validated, $sector_id, $request) {
            $report = Report::create([
                'user_id' => auth()->user()->user_id,
                'sector_id' => $sector_id,
                'report_c_id' => $validated['report_c_id'],
                'report_s_id' => 1,
                'anonymous' => isset($validated['anonymous']) && $validated['anonymous'] == 'checked' ? 1 : 0,
                'description' => $validated['description'],
                'location' => $validated['description'],
                'picture_path' => 'placeholder',
            ]);

            if (!$report->wasRecentlyCreated)
                return back()->with('error', 'Something went wrong');

            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();

            $fileName = md5('report_' . $report->report_id) . '.' . $extension;
            $file->storeAs('report', $fileName, 'report');

            $report->update(['picture_path' => $fileName]);

            if (!$report->wasChanged('picture_path'))
                return back()->with('error', 'Something went wrong');

            return back()->with('success', 'Report succesfully submitted');
        });

        return redirect()->route('home')->with('error', 'Something went wrong');
    }
}
