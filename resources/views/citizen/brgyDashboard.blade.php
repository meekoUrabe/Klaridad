@extends('template.layout')

@section('head')
    
<link href="BarangayDashboardStyle.css" rel="stylesheet"/> 
<title>Klaridad | Barangay Dashboard</title>
@endsection

@section('main')

<header class = "header1">
    <h1>Barangay Dashboard - Tetuan</h1>
    <p>Manage community reports and post new projects for your barangay</p>
</header>

<section class="PostProjects">
    <div class="ContainerPosProj">
        <h1>Post New Project</h1>
        <button onclick="toggleForm()">+ Add Project</button>
    </div>
    
    <div id="formBox" class="hidden">
        <form id="Formain">
            <div id="tabs">
                <label>Project Name</label>
                <input type="text" placeholder="Enter Project Name">
            </div>
            
            <div id="tabs">
                <label>Budget (PHP)</label>
                <input type="number" placeholder="0.00">
            </div>
            
            <div id="tabs">
                <label>Status</label>
                <select>
                    <option>Ongoing</option>
                    <option>Completed</option>
                    <option>Discontinued</option>
                    <option>Overdue</option>
                </select>
            </div>
            
            <div id="tabs">
                <label>Photo Upload</label>
                <input type="file">
            </div>
            
            <div id="Desc">
                <p>Description</p>
                <textarea placeholder="Description"></textarea>
            </div>
            
        </form>
        <button type="submit">Submit Project</button>
    </div>
    @endsection
    
    
    @section('footer')
    <h1>© 2026 Klaridad - Zamboanga City Government Transparency Platform</h1>
    @endsection
    
    @stack(src="BrgyDashboardScript.js")