<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Main</title>
</head>
<body class="Main-body">
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

    <h1 class="titlecard">TIXNATION</h1>
    <p class="description">Welcome to TixNation! 🎬🍿

TixNation is your ultimate movie ticketing platform, where you can order and manage movie tickets with ease. Enjoy a seamless booking experience, explore AI-powered movie recommendations, and even order snacks to enhance your movie night. Get ready for the best cinema experience—fast, simple, and personalized!

🚀 Book. Update. Enjoy. Only at TixNation!</p>

<section class="video-section">
    <video autoplay muted loop id="bg-video">
        <source src="/img/videodemolition.mp4" type="video/mp4">

    </video>
    <div class="overlay">
        <h1>TIXNATION</h1>
        <p>The Ultimate Movie Ticketing Experience</p>
    </div>
   
</section>
<p class="description">"At TIXNATION, we deliver an unmatched cinemat
    ic audio experience with Dolby Atmos technology. Our advanced sound system e
    nsures that every whisper, explosion, and musical note is heard with stunning clarity and d
    epth. With multi-dimensional surround sound, you'll feel audio moving around you, creating an immersive
     environment where every beat and dialogue comes to life. Whether it’s the pulse-pounding rhythm of a dance scene
      or the subtle ambiance of a quiet moment, our theaters let you hear movies the way they we
    re meant to be heard—rich, powerful, and breathtakingly real.</p>

     <br>
     <br>
     <br>
     <br>
     <section class="video-section">
    <video autoplay muted loop id="bg-video">
        <source src="/img/homelander.mp4" type="video/mp4">

    </video>
    <div class="overlay">
        <h1>TIXNATION</h1>
        <p>The Ultimate Movie Ticketing Experience</p>
    </div>
   
</section>
      <p class="description">At TIXNATION, we bring movies to life with state-of-the-art visuals, ensuring every scene is displayed in the highest quality possible. Our theaters feature IMAX technology, delivering a massive, ultra-high-resolution screen with crystal-clear detail and vibrant colors. Experience movies in stunning 4K resolution, where every frame is sharper, brighter, and more immersive than ever before. For the ultimate luxury, our Premiere Screens offer wider aspect ratios, high dynamic range (HDR), and unparalleled visual depth—so you don’t just watch the movie, you feel like you’re inside it. Whether it’s an action-packed blockbuster or a visually breathtaking masterpie
        ce, TIXNATION guarantees an unmatched viewing experience</p>
    <div class="banner">
        <div class="content the-little-mermaid active">
            <img src="./img/the-little-mermaid-title.png" alt="" class="movie-title">

            <h4>
                <span>2023</span><span><i>12+</i></span><span>Disney</span><span>Romance</span>
            </h4>
            <p>
              
             a beautiful and spirited young mermaid princess with an insatiable curiosit
             y about the world beyond the sea. As the youngest daughter of King Triton (Javier Bardem), the ruler of the underwater 
             kingdom of Atlantica, Ariel is fascinated by the human world, even though it is strictly forbidden by her father.

            </p>
        </div>
        <div class="content bg-65">
            <img src="./img/the-65-title.png" alt="" class="movie-title">

            <h4>
                <span>2023</span><span><i>13+</i></span><span>Sony Picture</span><span>Action</span>
            </h4>
            <p>
                Following a catastrophic deep space exploratory mission, pilot Mills (Adam Driver) cras
                h-lands on an uncharted planet. To make matters worse, he soon realizes this planet is not alien at all—it's Earth,
                 65 million years in the past, a primordial world teeming with terrifying prehistoric creatures.

            </p>
        </div>
        <div class="content the-covenant">
            <img src="./img/the-covenant-title.png" alt="" class="movie-title">

            <h4>
                <span>2023</span><span><i>17+</i></span><span>Universal Pictures</span><span>Action</span>
            </h4>
            <p>
During the war in Afghanistan, Sergeant John Kinley (Jake Gyllenhaal)
 is on his last tour of duty and teams up with a local Afghan interpreter named Ahmed (Dar Salim). When their unit is ambushed, Kinley and Ahmed are the only survivors. With enemy forces in pursuit
, Ahmed risks his own life to carry the wounded Kinley across miles of treacherous terrain to safety.

            </p>
        </div>
        <div class="content the-black-demon">
            <img src="./img/the-black-demon-title.png" alt="" class="movie-title">

            <h4>
                <span>2023</span><span><i>17+</i></span><span>Paramount</span><span>Horror</span>
            </h4>
            <p>
                Oilman Paul Sturges (Josh Lucas) takes his family on vacation to Bahia Azul, a once-t
                hriving coastal town in Mexico where his company owns an offshore drilling platform. However, upon arrival, they find the to
                wn eerily deserted and the locals gripped by fear.

            </p>
        </div>
        <div class="content the-tank">
            <img src="./img/the-tank-title.png" alt="" class="movie-title">

            <h4>
                <span>2023</span><span><i>17+</i></span><span>Ajax Picture</span><span>Horror</span>
            </h4>
            <p>
Ben (Matt Whelan) and his wife Jules (Lucille Lawle
ss) unexpectedly inherit an isolated and seemingly abandone
d piece of coastal property in Oregon. Hoping for a fresh start, they decide to m
ove there with their young daughter, Reia (Zara Nausbaum).
            </p>
        </div>
        
        <div class="carousel-box">
            <div class="carousel">
                <div class="carousel-item" onclick="changebg('img/bg-little-mermaid.jpg','the-little-mermaid');">
                    <img src="/img/the-little-mermaid.jpeg" alt="">
                </div>
                <div class="carousel-item"  onclick="changebg('img/bg-65.jpeg','bg-65');">
                    <img src="/img/65.jpg" alt="">
                </div>
                <div class="carousel-item"  onclick="changebg('img/bg-the-covenant.jpeg','the-covenant');">
                    <img src="/img/the-covenant.jpg" alt="">
                </div>
                <div class="carousel-item"  onclick="changebg('img/bg-the-tank.jpeg','the-tank');">
                    <img src="/img/the-tank.jpeg" alt="">
                </div>
                <div class="carousel-item"  onclick="changebg('img/bg-the-black-demon.jpeg','the-black-demon');">
                    <img src="/img/the-black-demon.jpg" alt="">
                </div>
            </div>
        </div>
    </div>



     <h1 class="titlecard">Our Trending Movies</h1>
    <div class="carouseltrending">
        <div class="carousel-innertrending">
            <div class="carousel-itemtrending"><img src="/img/Dune3.jpg" alt="Image 1"></div>
            <div class="carousel-itemtrending"><img src="/img/oppenheimer2.png" alt="Image 2"></div>
            <div class="carousel-itemtrending"><img src="/img/Extraction2.jpg" alt="Image 3"></div>
        </div>
    </div>
    <br>
    <br>
   <!-- <h2 class="sublabel">Action collection</h2>
    <div class="cardcontainer">
    <div class="card">
        
        <img src="/img/action1.png" alt=""  class="Image">
        <a href="{{ route('movie1') }}"><span>Action movie 1</span></a>
        
    </div>
    <div class="card">
        <img src="/img/opp.avif" alt="" class="Image">
        <a href="{{ route('movie2') }}"><span>Oppenheimer</span></a>
    </div>
    <div class="card">
        <img src="/img/DuneMain (1).jpg" alt=""  class="Image">
        <a href="{{ route('movie1') }}"><span>Dune 2</span></a>
    </div>
    </div>
    <br>
    <br>
    <h2 class="sublabel">Horror collection</h2>
    <div class="cardcontainer">
    <div class="card">
        <img src="/img/Nun2.webp" alt=""  class="Image">
        <a href="{{ route('movie4') }}"><span>Nun 2</span></a>
    </div>
    <div class="card">
        <img src="/img/Annabelle.jpg" alt=""  class="Image">
        <a href="{{ route('movie5') }}"><span>Annabelle</span></a>
    </div>
    <div class="card">
        <img src="/img/Conjuring.webp" alt=""  class="Image">
        <a href="{{ route('movie6') }}"><span>Conjuring 3</span></a>
    </div>
    </div>
    <h2 class="sublabel">Romance collection</h2>
    <div class="cardcontainer">
    <div class="card">
        <img src="/img/weliveintime.webp" alt=""  class="Image">
        <a href="{{ route('movie7') }}"><span>We Live In Time</span></a>
    </div>
    <div class="card">
        <img src="/img/SilentLove.jpg" alt=""  class="Image">
        <a href="{{ route('movie8') }}"><span>Silent Love</span></a>
    </div>
    <div class="card">
        <img src="/img/the best of me (1).jpg" alt=""  class="Image">
        <a href="{{ route('movie9') }}"><span>The Best Of Me</span></a>
    </div>
    
    </div> -->
    <section>
    <h2 class="collection-title">Action Collection</h2>
    <div class="movie-card-container">
        <div class="movie-card">
            <img src="/img/action1.png" alt="Action Movie 1" class="movie-image">
            <a href="{{ route('movie1') }}"><span>Action Movie 1</span></a>
        </div>
        <div class="movie-card">
            <img src="/img/opp.avif" alt="Oppenheimer" class="movie-image">
            <a href="{{ route('movie2') }}"><span>Oppenheimer</span></a>
        </div>
        <div class="movie-card">
            <img src="/img/DuneMain (1).jpg" alt="Dune 2" class="movie-image">
            <a href="{{ route('movie1') }}"><span>Dune 2</span></a>
        </div>
    </div>

    <h2 class="collection-title">Horror Collection</h2>
    <div class="movie-card-container">
        <div class="movie-card">
            <img src="/img/Nun2.webp" alt="Nun 2" class="movie-image">
            <a href="{{ route('movie4') }}"><span>Nun 2</span></a>
        </div>
        <div class="movie-card">
            <img src="/img/Annabelle.jpg" alt="Annabelle" class="movie-image">
            <a href="{{ route('movie5') }}"><span>Annabelle</span></a>
        </div>
        <div class="movie-card">
            <img src="/img/Conjuring.webp" alt="Conjuring 3" class="movie-image">
            <a href="{{ route('movie6') }}"><span>Conjuring 3</span></a>
        </div>
    </div>

    <h2 class="collection-title">Romance Collection</h2>
    <div class="movie-card-container">
        <div class="movie-card">
            <img src="/img/weliveintime.webp" alt="We Live In Time" class="movie-image">
            <a href="{{ route('movie7') }}"><span>We Live In Time</span></a>
        </div>
        <div class="movie-card">
            <img src="/img/SilentLove.jpg" alt="Silent Love" class="movie-image">
            <a href="{{ route('movie8') }}"><span>Silent Love</span></a>
        </div>
        <div class="movie-card">
            <img src="/img/the best of me (1).jpg" alt="The Best Of Me" class="movie-image">
            <a href="{{ route('movie9') }}"><span>The Best Of Me</span></a>
        </div>
    </div>
</section>
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
    
    
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script >
         $(document).ready(function(){
    $('.carousel').carousel();
  });
    </script>
      <script src="{{ asset('js/script.js') }}"></script>
</body>
</html> 