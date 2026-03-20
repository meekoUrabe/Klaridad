@extends('template.layout')

@section('head')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Report</title>
    <link rel="stylesheet" href="{{ asset('css/report.css') }}"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
@endsection
    
@section('header')  
    <main class="submit-report-header">
        <section class="report-hero">
            <br> <br>
            <h2>Submit a Report</h2>
            <p>Report a community problem or concern to your barangay government</p>
            <br>
        </section>
    </main>
@endsection

@section('main')
    <section class="form-container">
        <form action="#" method="post">
            <div class="report-card">
                <div class="anonymous">
                    <h4> <input type="checkbox" class=""> <span> <i class="fas fa-user-check"></i> </span> Report Anonymously </h4>
                    <p>Your identity will be protected. Name field will be hidden if checked.</p>
                </div>
            </div>
            <br>
            <div class="main-form">
                    <div class="form-group">
                        <label for="barangay">Barangay</label>
                        <div class="input-with-icon">
                        <i class="fas fa-location-dot"></i>
                        <select class="form-input" id="barangay" name="barangay_id" required>
                            <option value="">Select Barangay</option>
                            @foreach ($barangay as $b)
                                <option value="{{ $b->barangay_id }}">{{ $b->name }}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <div class="input-with-icon">
                            <i class="fas fa-tags"></i>
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
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea cols="5" rows="6" class="form-input" placeholder="Describe the problem or concern in detail..."></textarea>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" class="form-input" id="location" name="location" placeholder="Specific Location (e.g., Corner of Main St. and 2nd Ave.)">
                    </div> 
                    <br>
                    <div class="form-group">
                        <label class="upload" for="photo">Photo Upload (optional)</label>
                        <div class="upload-box">
                            <span><i class="fas fa-upload"></i></span>
                            <input type="file" class="form-input" id="photo" name="photo" accept="image/*">
                            <p>Upload a photo of issue (if available)</p>
                        </div>
                    </div>
                    <br>
                    <div class="form-footer">
                        <button type="submit" class="btn-primary">Submit Report</button>
                    </div>
            </div>
        </form>
    </section>
    @endsection

   @section('footer')
        <p> © 2026 Klaridad - TabiDev Studios </p>
    @endsection
