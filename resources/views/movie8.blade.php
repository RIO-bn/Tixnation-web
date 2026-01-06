<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>movie1</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="movie-page">
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
    <div class="movie-page-container1">
        <div class="movie-img">
            <img src="img/SilentLove.jpg" alt="">
        </div>
        <div class="criteria">
            <h2>Silent Love </h2>
            <p>Aoi, a janitor with a speech disability at a music university, meets Mika,<br>
                 an aspiring pianist who has lost her eyesight in an accident. To help her out of despair, <br>
                 Aoi makes a deal with a young, wealthy piano teacher to play the piano for Mika, pretending to be Aoi,<br>
                  in exchange for money. The sound of the piano gradually warms Mika's heart,<br>
                   and Aoi continues to dedicate himself to 1  her without saying a word. Meanwhile,<br>
                    the piano teacher develops his own feelings for Mika. However,<br>
                    the three get involved in a complicated situation as they try to express their true feelings.   
            </p>

            <br>
            <br>

            <div class="icon-text">
    <i class="fa-solid fa-play"></i> <!-- Play icon -->
    <p>Watch Trailer</p>
</div>

<div class="icon-text">
    <i class="fa-regular fa-clock"></i> <!-- Clock icon -->
    <p>Duration: 1h 58m</p>
</div>

    <p>Age rate : 18+       Genre: Romance</p>

    <br>
    <br>
    <button class="movie-page-reservation"><a href="{{ route('Reservation') }}">Reservation</a></button>
        </div>
    </div>

    <div class="castlist">
    <div>
    <h3>Producer</h3>
    <p>Tsuyoshi Matsushita</p>
    </div>
    <div>
    <h3>Director</h3>
    <p>Eiji Uchida</p>
    </div>
    <div>
    <h3>Writers</h3>
    <p>Yukiko Manabe</p>
    </div>
    <div>
    <h3>Production</h3>
    <p>Gaga Corporation.</p>
    </div>
    </div>
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