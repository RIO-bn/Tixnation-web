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
            <img src="img/the best of me (1).jpg" alt="">
        </div>
        <div class="criteria">
            <h2>The Best Of Me</h2>
            <p>Based on the bestselling novel by Nicholas Sparks, <br>
                The Best of Me tells the story of Dawson and Amanda,<br>
                 two former high school sweethearts who find themselves 1  reunited after 20 years 2<br>
                   when they return to their small town for the funeral of a beloved friend.<br>
                    Their bittersweet reunion reignites the love they've never forgotten, <br>
                    but 3  they soon discover the forces that drove them apart years 4  ago still exist<br>
                    , posing even greater threats today. Spanning decades, this epic love story captures the enduring power of first love <br>
                    and the wrenching choices 5  faced when confronted with second chances.   <br>
   


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
    <p>Relativity Media</p>
    </div>
    <div>
    <h3>Director</h3>
    <p>Michael Hoffman</p>
    </div>
    <div>
    <h3>Writers</h3>
    <p>Will Fetters (screenplay by)</p>
    </div>
    <div>
    <h3>Production</h3>
    <p>Relativity Media</p>
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