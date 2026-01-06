<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>movie1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="menu-page">
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
   
    <section class="section1">
      <h2 id="text"><span class="span">embark on a food journey</span><br>Lets Dive</h2>
      <img src="/img/bird1.png" alt="" id="bird1">
      <img src="/img/bird2.png" alt="" id="bird2">
      <img src="/img/forest.png" alt="" id="forest">
      <img src="/img/rocks.png" alt="" id="rocks">
      <img src="/img/water.png" alt="" id="water">
    </section>
    <div class="sec">
    <h1 class="food-title"> We Served Best Meal For Our Customer</h1>
  <p class="food-subheader">Tixnation provides the best snacks such as popcorn,<br>
     snacks and legendary drinks resulting from innovations <br>
      and special concoctions that you shouldn't miss.</p>
      <br>
      <br>
      <br>
      <br>  
<div class="menu-food-container">   
  <div class="card custom-card" style="width: 18rem;">
    <img class="card-img-top" src="/img/popcorn.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Popcorn</h5>
      <p class="card-text">Crispy, fluffy, and delicious—perfect for movie nights!" 🍿.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>

  <div class="card custom-card" style="width: 18rem;">
    <img class="card-img-top" src="/img/hotdog.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">hotdog</h5>
      <p class="card-text">"Juicy, savory, and a classic favorite!" 🌭</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>

  <div class="card custom-card" style="width: 18rem;">
    <img class="card-img-top" src="/img/nachos.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Nachos</h5>
      <p class="card-text">"Cheesy, crispy, and irresistibly good!" 🍕</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>

  <div class="card custom-card" style="width: 18rem;">
    <img class="card-img-top" src="/img/pizza.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Pizza</h5>
      <p class="card-text">"Cheesy, crispy, and irresistibly good!" 🍕</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
</div> 

<br>
<br>
<br>
<div class="menu-food-container">   
  <div class="card custom-card" style="width: 18rem;">
    <img class="card-img-top" src="/img/icetea.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Ice Tea</h5>
      <p class="card-text">"Cool, crisp, and perfectly sweet!" 🍹❄️</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>

  <div class="card custom-card" style="width: 18rem;">
    <img class="card-img-top" src="/img/icecoffee.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Ice Coffee</h5>
      <p class="card-text">"Bold, refreshing, and energizing!" ☕❄️</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>

  <div class="card custom-card" style="width: 18rem;">
    <img class="card-img-top" src="/img/water.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Mineral water</h5>
      <p class="card-text">"Pure, fresh, and thirst-quenching!" 💧</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>

  <div class="card custom-card" style="width: 18rem;">
    <img class="card-img-top" src="/img/soda.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Soda</h5>
      <p class="card-text">"Fizzy, sweet, and refreshingly bold!" 🥤 🍕</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
</div> 
<br><br><br><br>
<h1 class="food-title">Want some, go order at our Reservation page</h1>
<Button class="foodReservation"><a href="{{ route('Reservation') }}">Reservation</a></Button>

<br>
<br>
<br>
<br>
<h2>Stay Tune for our Original Soda </h2>
<div class="carousel-food">
        <div class="list">
            <div class="item active" style="--background:transparent">
                <div class="content">Strawberry</div>
                <img src="/img/fruit_strawberry.png" class="fruit">
            </div>
            <div class="item" style="--background: transparent">
                <div class="content">avocado</div>
                <img src="/img/fruit_avocado.png" class="fruit">
            </div>
            <div class="item hidden" style="--background: transparent">
                <div class="content">orange</div>
                <img src="/img/fruit_orange.png" class="fruit">
            </div>
        </div>
        <div class="leaves"></div>
        <div class="mockup"></div>
        <div class="shadow"></div>
        <div class="arrow">
            <button id="prev"><</button>
            <button id="next">></button>
        </div>
    </div>
    </div>
    <footer class="footer-menu">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>