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
            <img src="img/dunemovieposter.png" alt="">
        </div>
        <div class="criteria">
            <h2>Dune 2</h2>
            <p>Paul Atreides joins forces with the Fremen people of Arrakis and his love, Chani,<br>
             on a warpath of revenge against those who brought down House Atreides <br>
             . Torn between love and the fate of the universe, he must choose a path to prevent a horrifying destiny.   


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

    <p>Age rate : 18+       Genre: Action</p>

    <br>
    <br>
    <button class="movie-page-reservation"><a href="{{ route('Reservation') }}">Reservation</a></button>
        </div>
    </div>

    <div class="castlist">
    <div>
    <h3>Producer</h3>
    <p>Mary Parent</p>
    </div>
    <div>
    <h3>Director</h3>
    <p>Denis Villeneuve.</p>
    </div>
    <div>
    <h3>Writers</h3>
    <p>Frank Herbert (based on the novel by)</p>
    </div>
    <div>
    <h3>Production</h3>
    <p>Legendary Pictures</p>
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