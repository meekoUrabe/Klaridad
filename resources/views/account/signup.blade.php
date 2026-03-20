@extends('template.layout')

@section('head')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign Up</title>
<link rel="stylesheet" href="{{ asset('css/signup.css') }}"/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
@endsection

@section('header')
<header class="signup-header">
    <h1> Klaridad </h1>
    <p> Zamboanga City Citizen Governance Platform </p>
</header>
@endsection

@section('main')
<div class="form-container">
    <form action="#" method="post">
        <div class="form-header">
            <br>
            <h2>Create Your Account</h2>
            <br>
        </div>
        <div class="form-body">
            <div class="form-group">
                <label for="fullName">Last Name</label>
                <input type="text" class="form-input" id="fullName" name="fullName" placeholder="Surname" required>
                <label for="fullName">Given Name</label>
                <input type="text" class="form-input" id="givenName" name="givenName" placeholder="Given Name" required>
                <label for="fullName">Middle Name</label>
                <input type="text" class="form-input" id="middleName" name="middleName" placeholder="Middle Name" required>
                <label for="fullName">Suffix</label>
                <input type="text" class="form-input" id="suffix" name="suffix" placeholder="Suffix (optional)">
            </div>
            <div class="form-group">
                <label for="phoneNumber">Phone Number</label>
                <div class="input-with-icon">
                    <i class="fas fa-phone"></i>
                    <input type="tel" class="form-input" id="phoneNumber" name="phoneNumber" placeholder="09XX XXX XXXX" required>
                </div>
                <p class="helper-text">Enter your 11-digit Philippine mobile number</p>
            </div>
            <div class="form-group">
                <label for="barangay">Barangay</label>
                <div class="input-with-icon">
                <i class="fas fa-location-dot"></i>
                <select class="form-input" id="barangay" name="barangay" required>
                    <option value="">Select Barangay</option>
                    <option value="Arena Blanco">Arena Blanco</option>
                    <option value="Ayala">Ayala</option>
                    <option value="Baliwasan">Baliwasan</option>
                    <option value="Baluno">Baluno</option>
                    <option value="Boalan">Boalan</option>
                    <option value="Bolong">Bolong</option>
                    <option value="Buenavista">Buenavista</option>
                    <option value="Bunguiao">Bunguiao</option>
                    <option value="Busay (Sacol Island)">Busay (Sacol Island)</option>
                    <option value="Cabaluay">Cabaluay</option>
                    <option value="Cabatangan">Cabatangan</option>
                    <option value="Cacao">Cacao</option>
                    <option value="Calabasa">Calabasa</option>
                    <option value="Calarian">Calarian</option>
                    <option value="Camino Nuevo">Camino Nuevo</option>
                    <option value="Campo Islam">Campo Islam</option>
                    <option value="Canelar">Canelar</option>
                    <option value="Capisan">Capisan</option>
                    <option value="Cawit">Cawit</option>
                    <option value="Culianan">Culianan</option>
                    <option value="Curuan">Curuan</option>
                    <option value="Dita">Dita</option>
                    <option value="Divisoria">Divisoria</option>
                    <option value="Dulian (Upper Bunguiao)">Dulian (Upper Bunguiao)</option>
                    <option value="Dulian (Upper Pasonanca)">Dulian (Upper Pasonanca)</option>
                    <option value="Guisao">Guisao</option>
                    <option value="Guiwan">Guiwan</option>
                    <option value="Kasanyangan">Kasanyangan</option>
                    <option value="La Paz">La Paz</option>
                    <option value="Labuan">Labuan</option>
                    <option value="Lamisahan">Lamisahan</option>
                    <option value="Landang Gua">Landang Gua</option>
                    <option value="Landang Laum">Landang Laum</option>
                    <option value="Lanzones">Lanzones</option>
                    <option value="Lapakan">Lapakan</option>
                    <option value="Latuan (Curuan)">Latuan (Curuan)</option>
                    <option value="Licomo">Licomo</option>
                    <option value="Limaong">Limaong</option>
                    <option value="Limpapa">Limpapa</option>
                    <option value="Lubigan">Lubigan</option>
                    <option value="Lumayang">Lumayang</option>
                    <option value="Lumbangan">Lumbangan</option>
                    <option value="Lunzuran">Lunzuran</option>
                    <option value="Maasin">Maasin</option>
                    <option value="Malagutay">Malagutay</option>
                    <option value="Mampang">Mampang</option>
                    <option value="Manalipa">Manalipa</option>
                    <option value="Mangusu">Mangusu</option>
                    <option value="Manicahan">Manicahan</option>
                    <option value="Mariki">Mariki</option>
                    <option value="Mercedes">Mercedes</option>
                    <option value="Muti">Muti</option>
                    <option value="Pamucutan">Pamucutan</option>
                    <option value="Pangapuyan">Pangapuyan</option>
                    <option value="Panubigan">Panubigan</option>
                    <option value="Pasilmanta (Sacol Island)">Pasilmanta (Sacol Island)</option>
                    <option value="Pasobolong">Pasobolong</option>
                    <option value="Pasonanca">Pasonanca</option>
                    <option value="Patalon">Patalon</option>
                    <option value="Putik">Putik</option>
                    <option value="Quiniput">Quiniput</option>
                    <option value="Recodo">Recodo</option>
                    <option value="Rio Hondo">Rio Hondo</option>
                    <option value="Salaan">Salaan</option>
                    <option value="San Jose Cawa-Cawa">San Jose Cawa-Cawa</option>
                    <option value="San Jose Gusu">San Jose Gusu</option>
                    <option value="San Ramon">San Ramon</option>
                    <option value="San Roque">San Roque</option>
                    <option value="Sangali">Sangali</option>
                    <option value="Santa Barbara">Santa Barbara</option>
                    <option value="Santa Catalina">Santa Catalina</option>
                    <option value="Santa Maria">Santa Maria</option>
                    <option value="Santo Niño">Santo Niño</option>
                    <option value="Sibulao (Caruan)">Sibulao (Caruan)</option>
                    <option value="Sinunuc">Sinunuc</option>
                    <option value="Talon-Talon">Talon-Talon</option>
                    <option value="Taluksangay">Taluksangay</option>
                    <option value="Tetuan">Tetuan</option>
                    <option value="Tictapul">Tictapul</option>
                    <option value="Tigbalabag">Tigbalabag</option>
                    <option value="Tigtabon">Tigtabon</option>
                    <option value="Tolosa">Tolosa</option>
                    <option value="Tugbungan">Tugbungan</option>
                    <option value="Tulungatung">Tulungatung</option>
                    <option value="Tumaga">Tumaga</option>
                    <option value="Tumbagaan">Tumbagaan</option>
                    <option value="Turno">Turno</option>
                    <option value="Ubay">Ubay</option>
                    <option value="Ulo">Ulo</option>
                    <option value="Upper Calarian">Upper Calarian</option>
                    <option value="Victoria">Victoria</option>
                    <option value="Vitali">Vitali</option>
                    <option value="Zamboanga Central">Zamboanga Central</option>
                    <option value="Zone I (Pob.)">Zone I (Pob.)</option>
                    <option value="Zone II (Pob.)">Zone II (Pob.)</option>
                    <option value="Zone III (Pob.)">Zone III (Pob.)</option>
                    <option value="Zone IV (Pob.)">Zone IV (Pob.)</option>
                </select>
                </div>
                <p class="helper-text">Select the barangay where you reside</p>
            </div>
            <div class="form-group">
                <label for="createPass">Create Password</label>
                <input type="password" class="form-input" id="createPass" name="createPass" placeholder="Create Password" required>
                <label for="createPass">Confir  m Password</label>
                <input type="password" class="form-input" id="confirmPass" name="confirmPass" placeholder="Confirm Password" required>
            </div>
        </div>
        <div class="form-footer">
            <button type="submit" class="btn-primary">Sign Up</button>
                <h2 class="divider"><span>or</span></h2>
            <button type="submit" class="btn-primary">Sign Up with<i class="fa-brands fa-google"></i> mail</button>
            <br>
            <p> Already have an account? <a href="login.html"> Login here</a> </p>
            <br>
            <p> By signing up, you agree to use this platform for community governance and transparency. </p>
        </div>
    </form>
</div>
@endsection

@section('footer')
<footer>
    <p> © 2026 Klaridad - TabiDev Studios </p>
</footer>
@endsection
