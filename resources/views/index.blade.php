<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Recommendation</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  
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
   <div class="ticket-container">
    <h1 class="ticket-title">🎟️ Daftar Tiket Anda</h1>

    @forelse ($orders as $order)
        <div class="ticket-card">
            <div class="ticket-notch ticket-notch-left"></div>
            <div class="ticket-notch ticket-notch-right"></div>

            <h3 class="ticket-id">🎫 ID Pesanan: {{ $order->id }}</h3>

            @if (isset($order->user))
                <p class="ticket-info">👤 <strong>Pengguna:</strong> {{ $order->user->name }}</p>
            @endif

            <p class="ticket-info">🎬 <strong>Film:</strong> {{ $order->movie->name }}</p>

            @if (isset($order->studio))
                <p class="ticket-info">🏢 <strong>Studio:</strong> {{ $order->studio->name }}</p>
            @endif

            <p class="ticket-info">💺 <strong>Tempat Duduk:</strong> {{ $order->seats }} &nbsp;|&nbsp;
                💰 <span class="ticket-price">Rp{{ number_format($order->total_price, 0, ',', '.') }}</span>
            </p>

            <h4 class="ticket-food-title">🍿 Makanan yang Dipesan:</h4>
            @forelse ($order->orderFoods as $orderFood)
                <ul class="ticket-food-list">
                    <li>{{ $orderFood->food->name }} — {{ $orderFood->quantity }} buah</li>
                </ul>
            @empty
                <p class="ticket-food-empty">Tidak ada makanan yang dipesan untuk tiket ini.</p>
            @endforelse

            <form action="{{ route('tickets.destroy', $order->id) }}" method="POST" class="ticket-form">
                @csrf
                @method('DELETE')
                <button type="submit" class="ticket-button">❌ Batalkan Tiket</button>
            </form>
        </div>
    @empty
        <p class="ticket-empty-message">Anda belum memiliki tiket.</p>
    @endforelse
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