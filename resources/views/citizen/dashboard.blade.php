@extends('template.layout')

@section('head') 
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
<link href="MainPageStyle.css" rel="stylesheet"/>
<title>Klaridad | Main Page</title>
@endsection

@section('main')
    <x-sidebar></x-sidebar>
    <section class = "header1">
        <h1>Project Feed</h1>
        <p>View barangay government projects in your area</p>
    </section>

    <section class="Filter">
        <h3>Filter Projects</h3>
        <div class="Main-Filter">
            <div class="FilterSelection">
                        <h4>Barangay</h4>
                        <select>
                            @foreach ($barangay as $b)
                                <option value="{{ $b->barangay_id }}">{{ $b->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="FilterSelection">
                        <h4>Status</h4>
                        <select>
                            <option value="">All Status</option>
                            <option value="">Ongoing</option>
                            <option value="">Completed</option>
                            <option value="">Overdue</option>
                            <option value="">Discontinue</option>
                        </select>
                    </div>
                </div>
            </section>
            
            <h2>Showing 12 Projects</h2>
            <section class="Projects">
                
                <div class="ProjectTabs">
                    <div class="Tabs">
                        <img src="assets/Images/photo-1460533078824-f51edbff2726.jpg">
                        <div class="Title">
                            <h3> Road Rehabilitation Project</h3> 
                            <h4 id="ongoing">Ongoing</h4>
                        </div>
                        <p>Tetuan</p>
                        <p>₱2,500,000.00</p>
                    </div>
                </div>
                
                <div class="ProjectTabs">
                    <div class="Tabs">
                        <img src="assets/Images/photo-1460533078824-f51edbff2726.jpg">
                        <div class="Title">
                            <h3> Water System Upgrade</h3> 
                            <h4 id="ongoing">Ongoing</h4>
                        </div>
                        <p>Guiwan</p>
                        <p>₱3,200,000.00</p>
                    </div>
                </div>
                
                <div class="ProjectTabs">
                    <div class="Tabs">
                        <img src="assets/Images/photo-1460533078824-f51edbff2726.jpg">
                        <div class="Title">
                            <h3> Multi-Purpose Hall Construction</h3> 
                            <h4 id="ongoing">Ongoing</h4>
                        </div>
                        <p>Pasonanca</p>
                        <p>₱5,000,000.00</p>
                    </div>
                </div>
                
                <div class="ProjectTabs">
                    <div class="Tabs">
                        <img src="assets/Images/photo-1460533078824-f51edbff2726.jpg">
                        <div class="Title">
                            <h3> Street Lighting Installation</h3> 
                            <h4 id="ongoing">Ongoing</h4>
                        </div>
                        <p>San Roque</p>
                        <p>₱850,000.00</p>
                    </div>
                </div>
                
                <div class="ProjectTabs">
                    <div class="Tabs">
                        <img src="assets/Images/photo-1460533078824-f51edbff2726.jpg">
                        <div class="Title">
                            <h3> Drainage System Improvement</h3> 
                            <h4 id="ongoing">Ongoing</h4>
                        </div>
                        <p>Baliwasan</p>
                        <p>₱1,800,000.00</p>
                    </div>
                </div>
                
                <div class="ProjectTabs">
                    <div class="Tabs">
                        <img src="assets/Images/photo-1460533078824-f51edbff2726.jpg">
                        <div class="Title">
                            <h3> Road Rehabilitation Project</h3> 
                            <h4 id="ongoing">Ongoing</h4>
                        </div>
                        <p>Basketball Court Renovation</p>
                        <p>₱650,000.00</p>
                    </div>
                </div>
                
                <div class="ProjectTabs">
                    <div class="Tabs">
                        <img src="assets/Images/photo-1460533078824-f51edbff2726.jpg">
                        <div class="Title">
                            <h3> Road Rehabilitation Project</h3> 
                            <h4 id="ongoing">Ongoing</h4>
                        </div>
                        <p>Tetuan</p>
                        <p>2,500,000.00</p>
                    </div>
                </div>
                
                <div class="ProjectTabs">
                    <div class="Tabs">
                        <img src="assets/Images/photo-1460533078824-f51edbff2726.jpg">
                        <div class="Title">
                            <h3> Health Center Expansion</h3> 
                            <h4 id="ongoing">Ongoing</h4>
                        </div>
                        <p>Talon-Talon</p>
                        <p>₱4,200,000.00</p>
                    </div>
                </div>
                
                <div class="ProjectTabs">
                    <div class="Tabs">
                        <img src="assets/Images/photo-1460533078824-f51edbff2726.jpg">
                        <div class="Title">
                            <h3> Flood Control Project</h3> 
                            <h4 id="ongoing">Ongoing</h4>
                        </div>
                        <p>Tumaga</p>
                        <p>₱6,500,000.00</p>
                    </div>
                </div>
                
                <div class="ProjectTabs">
                    <div class="Tabs">
                        <img src="assets/Images/photo-1460533078824-f51edbff2726.jpg">
                        <div class="Title">
                            <h3>Public Market Renovation</h3> 
                            <h4 id="ongoing">Ongoing</h4>
                        </div>
                        <p>Zone I</p>
                        <p>₱3,800,000.00</p>
                    </div>
                </div>
                
                <div class="ProjectTabs">
                    <div class="Tabs">
                        <img src="assets/Images/photo-1460533078824-f51edbff2726.jpg">
                        <div class="Title">
                            <h3>Bridge Construction</h3> 
                            <h4 id="ongoing">Ongoing</h4>
                        </div>
                        <p>Culianan</p>
                        <p>₱7,200,000.00</p>
                    </div>
                </div>
                
                <div class="ProjectTabs">
                    <div class="Tabs">
                        <img src="assets/Images/photo-1460533078824-f51edbff2726.jpg">
                        <div class="Title">
                            <h3> Community Garden Development</h3> 
                            <h4 id="ongoing">Ongoing</h4>
                        </div>
                        <p>La Paz</p>
                        <p>₱450,000.00</p>
                    </div>
                </div>
            </section>
@endsection
    
@section('footer') 
<h1>© 2026 Klaridad - Zamboanga City Government Transparency Platform</h1>
@endsection