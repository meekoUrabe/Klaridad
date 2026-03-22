@extends('template.layout')

@section('head')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
<link rel="stylesheet" href="{{ asset('css/components/sidebar.css') }}">
<link rel="stylesheet" href="{{ asset('css/barangay/barangay.css') }}">
<title>Klaridad | Barangay Dashboard</title>
@endsection

@section('header')
@endsection

@section('main')

<div class="right-panel">
    @include('components.navbar', ['profileRoute' => route('barangay.dashboard')])

    <div class="main-content">

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
        <form id="form_submission" action="{{ route('barangay.post_project')}}" method="POST" enctype="multipart/form-data">
          @csrf
            <div id="tabs">
                <label>Project Name</label>
                <input type="text" placeholder="Enter Project Name" name="name">
            </div>

            <div id="tabs">
                <label>Budget (PHP)</label>
                <input type="number" placeholder="0.00" min='0' name="budget">
            </div>

            <div id="tabs">
                <label>Status</label>
                <select name="status">
                    @foreach ($project_status as $status)
                     <option value={{ $status->project_s_id }}>{{ $status->status }}</option>
                    @endforeach
                </select>
            </div>

            <div id="tabs">
                <label>Photo Upload</label>
                <input type="file" name="photo">
            </div>

            <div id="Desc">
                <p>Description</p>
                <textarea placeholder="Description" name="description"></textarea>
            </div>

        </form>
        <button type="submit" onclick="submitForm()">Submit Project</button>
    </div>
    <div id="response">
        {{ session('success') }}
        {{ session('error') }}
    </div>
  </div>
</div>
@endsection

@push('script')
<script src="{{ asset('js/barangay/barangay.js') }}"></script>
<script>
    function submitForm() {
        let form = document.getElementById('form_submission');
        form.submit();
    }
</script>
@endpush

