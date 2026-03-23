<?php
use App\Models\Barangay;
use App\Models\Report;
use App\Models\ReportCategory;
use App\Models\ReportStatus;
use App\Models\Project;
use App\Models\ProjectStatus;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ProjectController;

Route::get('/', function () {
    return view('home');
})->name('home');

// folder
Route::prefix('account')->group(function ()
{
    // page or php blade file
    Route::middleware('guest')->group(function () {
        Route::get('signup', [UserController::class, 'signup'] )->name('account.signup');
        Route::post('signup', [UserController::class, 'post_signup'])->name('account.post_signup');
        Route::get('barangays', [UserController::class, 'barangays'])->name('account.barangays');

        Route::get('login', [UserController::class, 'login'])->name('account.login');
        Route::post('login', [UserController::class, 'post_login'])->name('account.post_login');
    });

    Route::get('logout', [UserController::class, 'logout'])->middleware('auth')->name('account.logout');
});

Route::prefix('citizen')->middleware('auth')->group(function ()
{
    // page or php blade file
    Route::get('dashboard', function() {
        $barangay = Barangay::all();
        $project_status = ProjectStatus::all();

        $projects = Project::
        select('p.name', 'p.picture_path', 'ps.status', 'b.name as barangay_name', 'p.budget')
        ->from('project as p')
        ->join('sector as s', 's.sector_id', '=', 'p.sector_id')
        ->join('barangay as b', 's.barangay_id', '=', 'b.barangay_id')
        ->join('project_status as ps', 'ps.project_s_id', '=', 'p.project_s_id')
        ->where('b.barangay_id', 'LIKE', '%' . request()->query('barangay') . '%')
        ->where('ps.project_s_id', 'LIKE', '%' . request()->query('status') . '%')
        ->get();

        
        return view('citizen.dashboard', compact("barangay", "project_status", "projects"));
        } )->name('citizen.dashboard');

    Route::get('submit_report', function() {
        $barangay = Barangay::all();
        $report_category = ReportCategory::all();

        return view('citizen.submit_report',
        compact('barangay', 'report_category'));
        } )->name('citizen.submit_report');

    Route::post('submit_report', [ReportController::class, 'post_submit_report'])
    ->name('citizen.post_submit_report');

    Route::get('tracker', function() {

        $request = request();
        $barangay = Barangay::all();
        $report_category = ReportCategory::all();
        $report_status = ReportStatus::all();

        $report = Report::
        select(
            'r.report_id as report_id', 'rc.category as category',
            'rs.status as status',
            'b.name as barangay', 'r.date_created as date_created',
            'r.description', 'r.likes')
        ->from('report as r')
        ->join('sector as s', 's.sector_id', '=', 'r.sector_id')
        ->join('report_category as rc', 'rc.report_c_id', '=', 'r.report_c_id')
        ->join('report_status as rs', 'rs.report_s_id', '=', 'r.report_s_id')
        ->join('barangay as b', 'b.barangay_id', '=', 's.barangay_id')
        ->where('r.report_id', 'LIKE', $request->query('id'))
        ->where('s.sector_id', 'LIKE', $request->query('barangay'))
        ->where('rc.report_c_id', 'LIKE', $request->query('category'))
        ->where('rs.report_s_id', 'LIKE', $request->query('status'))
        ->orderBy('r.date_created', 'desc')
        ->get();

        return view('citizen.tracker',
        compact('report', 'barangay', 'report_category', 'report_status'));
        } )->name('citizen.tracker');

    Route::get('profile', function() {
        return view('citizen.profile');
        } )->name('citizen.profile');
});

Route::prefix('barangay')->middleware('auth')->group(function ()
{
    Route::get('dashboard', function() {
        $project_status = ProjectStatus::all();
        return view('barangay.barangay', compact('project_status'));
        })->name('barangay.dashboard');

    Route::post('dashboard', [ProjectController::class, 'post_project'])->name('barangay.post_project');
});

Route::prefix('goverment')->middleware('auth')->group(function ()
{
    Route::get('dashboard', function() {
        return view('goverment.goverment');
        } )->name('goverment.dashboard');
});
