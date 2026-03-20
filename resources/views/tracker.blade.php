@extends('template.layout')

@section('head')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Tracker</title>
    <link rel="stylesheet" href="styles/tracker.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
@endsection

@section('header')
    <header class="topbar">
        <div class="topbar__brand">
            <h1>Klaridad</h1>
            <h4>Zamboanga City Governance Platform</h4>
        </div>
    </header>
@endsection

@section('main')
    <main class="tracker-main">
        <section class="tracker-hero">
            <h2>Report Tracker</h2>
            <p>Track the status of submitted community reports and support issues</p>
        </section>

        <section class="tracker-card">
            <div class="tracker-card__section">
                <h3>Search by Report ID</h3>
                <div class="input-with-icon">
                    <i class="fas fa-magnifying-glass"></i>
                    <input type="text" class="searchbar-input" id="searchbar" name="searchbar" placeholder="Enter your report ID (e.g., R20260315001)" required>
                </div>
            </div>

            <div class="tracker-card__section">
                <h3>Filter Reports</h3>
                <div class="filter-grid">
                    <div class="filter-item">
                        <label for="category">Category</label>
                        <select id="category" class="form-input" name="category_id">
                            <option value="">Select Category</option>
                            @foreach ($category as $c)
                                <option value="{{ $c->category_id }}">{{ $c->name }}</option>
                            @endforeach

                                <!-- // Inside your reports migration
                                $table->enum('category', [
                                    'all-categories',
                                    'infrastructure',
                                    'corruption',
                                    'public-safety',
                                    'environment',
                                    'other',
                                ])->default('all-categories');-->

                                <!-- 
                                // database/seeders/CategorySeeder.php

                                public function run(): void
                                {
                                    $categories = [
                                        ['name' => 'All Categories', 'slug' => 'all-categories'],
                                        ['name' => 'Infrastructure',  'slug' => 'infrastructure'],
                                        ['name' => 'Corruption',      'slug' => 'corruption'],
                                        ['name' => 'Public Safety',   'slug' => 'public-safety'],
                                        ['name' => 'Environment',     'slug' => 'environment'],
                                        ['name' => 'Other',           'slug' => 'other'],
                                    ];

                                    DB::table('categories')->insert($categories);
                                }
                                -->

                                <!-- 
                                    Schema::create('categories', function (Blueprint $table) {
                                    $table->id();
                                    $table->string('name');        // "Infrastructure", "Corruption", etc.
                                    $table->string('slug');        // "infrastructure", "public-safety", etc.
                                    $table->timestamps();
                                });
                                -->
                        </select>
                    </div>

                    <div class="filter-item">
                        <label for="barangay">Barangay</label>
                        <select class="form-input" id="barangay" name="barangay_id" required>
                            <option value="">Select Barangay</option>
                            @foreach ($barangay as $b)
                                <option value="{{ $b->barangay_id }}">{{ $b->name }}</option>
                            @endforeach
                            
                            <!-- no backend part yet -->

                        </select>
                    </div>

                    <div class="filter-item">
                        <label for="status">Status</label>
                        <select id="status" class="form-input" name="status_id">
                            <option value="">Select Category</option>
                            @foreach ($status as $s)
                                <option value="{{ $s->status_id }}">{{ $s->name }}</option>
                            @endforeach

                            <!-- no backend part yet -->
                        </select>
                    </div>

                    <div class="filter-item">
                        <label for="time-period">Time Period</label>
                        <select id="time-period" class="form-input" name="time_id">
                            <option value=""> Select Time Period </option>
                            @foreach ($time as $t)
                                <option value="{{ $t->time_id }}">{{ $t->name }} </option>
                            @endforeach

                            <!-- no backend part yet -->
                        </select>
                    </div>
                </div>
            </div>
        </section>
        
        <div class="shown-report">
            <p> Showing 0 reports: </p>
        </div>

        <section class="tracker-card">

            <div class="report-card">
                <div class="ai-summary">
                    <h4> <span> <i class="fas fa-circle-exclamation"></i> </span> AI Summary</h4>
                    <p> [AI summary description here]</p>
                </div>

                <div class="report-card__header">
                    <div class="report-card__title">
                        <span><i class="fas fa-note-sticky"></i></span>
                        <span>[REPORT ID HERE]</span>
                    </div>
                    <div class="report-card__meta">
                        <button class="upvotes"><i class="fas fa-thumbs-up"></i> 67</button>
                        <span class="status-pill status-in-review">[Status]</span>
                    </div>
                </div>

                <p class="report-description">[No Description Yet]</p>

                <div class="report-card__grid">
                    <div class="report-detail">
                        <h4><i class="fas fa-tag"></i> Category</h4>
                        <p>[Category]</p>
                    </div>
                    <div class="report-detail">
                        <h4><i class="fas fa-map-marker-alt"></i> Barangay</h4>
                        <p>[Barangay]</p>
                    </div>
                    <div class="report-detail">
                        <h4><i class="fas fa-calendar-alt"></i> Date Submitted</h4>
                        <p>[Month - Date, Year]</p>
                    </div>
                </div>
            </div>
            
        </section>
    </main>
@endsection


@section('footer')
    <p> © 2026 Klaridad - TabiDev Studios </p>
@endsection