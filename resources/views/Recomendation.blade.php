<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Recommendation</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        iframe {
            width: 100%;
            height: 90vh;
            border: none;
        }
    </style>
</head>
<body>
<nav class="Nav" >
        <div class="Logo-nav">Tixnation</div>
        <ul class="nav-links">
            <li><a href="{{ route('Main') }}">Home</a></li>
            <li><a href="{{ route('Reservation') }}">Reservation</a></li>
            <li><a href="{{ route('food') }}">Food</a></li>
            <li><a href="{{ route('Recomendation') }}">Recommendation</a></li>
             <li><a href="{{ route('profile.edit') }}">Edit Profil Anda</a></li>
            <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="text-red-500 hover:underline">
        Logout
    </button>
</form>
        </ul>
    </nav>
    <h1>Movie Recommendation System</h1>
    <iframe src="http://127.0.0.1:8501" frameborder="0"></iframe>
        <footer class="footer">
        <div class="containerfooter">
        <div class="footersegment">
        <h2>TIXNATION</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti reiciendis temporibus modi quis, sequi eius!</p>
        </div>
        <div class="footersegment">
        <p>Reservation</p>
        <p>Movies</p>
        <p>Food</p>
        </div>
        <div class="footersegment">
        <p>Contact us</p>
        <p>Privacy policy</p>
        <p>Terms & Condition</p>
        </div>
        <div class="footersegment">
        <p>TIXNATION ID SUPPORT</p>
        <p>E-MAIL: HELP@TIXNATION.ID</p>
        <p>Follow us</p>
        </div>
        </div>

        <div class="copyright">
        <p>2024 TIXNATION - PT JAYA LOREM IPSUM.ALL RIGHT RESERVED</p>
        </div>
    </footer>
</body>
</html>