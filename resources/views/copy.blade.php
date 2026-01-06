<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>movie1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
            <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="text-red-500 hover:underline">
        Logout
    </button>
            </form>
        </ul>
    </nav>

    <div class="container">
    <h2>Movie Ticket Booking</h2>

    <!-- Movie Selection Form -->
    <form method="GET" action="{{ route('Reservation') }}">
    <!-- Select Movie -->
    <label for="movie">Select Movie:</label>
    <select id="movie" name="movie_id" class="form-control" onchange="this.form.submit()">
        <option value="">-- Choose Movie --</option>
        @foreach ($movies as $movie)
            <option value="{{ $movie->id }}" {{ request('movie_id') == $movie->id ? 'selected' : '' }}>
                {{ $movie->name }}
            </option>
        @endforeach
    </select>

    <!-- Show Schedule Dropdown if Movie is Selected -->
    @if(isset($schedules) && count($schedules) > 0)
        <label for="schedule">Select Schedule:</label>
        <select id="schedule" name="schedule_id" class="form-control" onchange="this.form.submit()">
            <option value="">-- Choose Schedule --</option>
            @foreach ($schedules as $schedule)
                <option value="{{ $schedule->id }}" {{ request('schedule_id') == $schedule->id ? 'selected' : '' }}>
                    {{ $schedule->schedule_time }}
                </option>
            @endforeach
        </select>
    @endif

    <!-- Show Studio Dropdown if Schedule is Selected -->
    @if($studios->isNotEmpty())
        <label for="studio">Select Studio:</label>
        <select id="studio" name="studio_id" class="form-control" onchange="this.form.submit()">
            <option value="">-- Choose Studio --</option>
            @foreach ($studios as $studio)
                <option value="{{ $studio->id }}" {{ request('studio_id') == $studio->id ? 'selected' : '' }}>
                    {{ $studio->name }}
                </option>
            @endforeach
        </select>
    @endif

    <br>
        <br>
     

    <!-- Submit Button for CRUD Ticket (in the future) -->
    <button type="submit" class="btn btn-primary mt-2">Proceed</button>
</form>
</div>
    <form method="POST" action="{{ route('order.store') }}">
    @csrf
    <select id="movie" name="movie_id" class="form-control">
        <option value="">-- Choose Movie --</option>
        @foreach ($movies as $movie)
            <option value="{{ $movie->id }}" {{ request('movie_id') == $movie->id ? 'selected' : '' }}>
                {{ $movie->name }}
            </option>
        @endforeach
    </select>
    <!-- Movie, Schedule, and Studio (Hidden Inputs) -->
    <input type="hidden" name="movie_id" value="{{ request('movie_id') }}">
    <input type="hidden" name="schedule_id" value="{{ request('schedule_id') }}">
    <input type="hidden" name="studio_id" value="{{ request('studio_id') }}">
    <h2 class="seat-title">PLEASE CHOOSE YOUR SEAT</h2>
        <div class="seat-container">
            <div class="seat-left">
         <button type ="button"class="seat" onclick="selectSeat(this, 'A1')">A1</button>
        <button type ="button"class="seat" onclick="selectSeat(this, 'A2')">A2</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'A3')">A3</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'A4')">A4</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'A5')">A5</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'A6')">A6</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'A7')">A7</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'A8')">A8</button>

        <button type="button" class="seat"onclick="selectSeat(this, 'B1')">B1</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'B2')">B2</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'B3')">B3</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'B4')">B4</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'B5')">B5</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'B6')">B6</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'B7')">B7</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'B8')">B8</button>

        <button type="button" class="seat"onclick="selectSeat(this, 'C1')">C1</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'C2')">C2</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'C3')">C3</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'C4')">C4</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'C5')">C5</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'C6')">C6</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'C7')">C7</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'C8')">C8</button>

        <button type="button" class="seat"onclick="selectSeat(this, 'D1')">D1</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'D2')">D2</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'D3')">D3</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'D4')">D4</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'D5')">D5</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'D6')">D6</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'D7')">D7</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'D8')">D8</button>

        <button type="button" class="seat"onclick="selectSeat(this, 'E1')">E1</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'E2')">E2</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'E3')">E3</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'E4')">E4</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'E5')">E5</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'E6')">E6</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'E7')">E7</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'E8')">E8</button>

        <button type="button" class="seat"onclick="selectSeat(this, 'F1')">F1</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'F2')">F2</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'F3')">F3</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'F4')">F4</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'F5')">F5</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'F6')">F6</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'F7')">F7</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'F8')">F8</button>
            </div>
            <div class="seat-left">
        <button type="button" class="seat"onclick="selectSeat(this, 'A9')">A9</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'A10')">A10</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'A11')">A11</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'A12')">A12</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'A13')">A13</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'A14')">A14</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'A15')">A15</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'A16')">A16</button>

        <button type="button" class="seat"onclick="selectSeat(this, 'B9')">B9</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'B10')">B10</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'B11')">B11</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'B12')">B12</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'B13')">B13</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'B14')">B14</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'B15')">B15</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'B16')">B16</button>

        <button type="button" class="seat"onclick="selectSeat(this, 'C9')">C9</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'C10')">C10</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'C11')">C11</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'C12')">C12</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'C13')">C13</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'C14')">C14</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'C15')">C15</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'C16')">C16</button>

        <button type="button" class="seat"onclick="selectSeat(this, 'D9')">D9</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'D10')">D10</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'D11')">D11</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'D12')">D12</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'D13')">D13</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'D14')">D14</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'D15')">D15</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'D16')">D16</button>

        <button type="button" class="seat"onclick="selectSeat(this, 'E9')">E9</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'E10')">E10</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'E11')">E11</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'E12')">E12</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'E13')">E13</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'E14')">E14</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'E15')">E15</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'E16')">E16</button>

        <button type="button" class="seat"onclick="selectSeat(this, 'F9')">F9</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'F10')">F10</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'F11')">F11</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'F12')">F12</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'F13')">F13</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'F14')">F14</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'F15')">F15</button>
        <button type="button" class="seat"onclick="selectSeat(this, 'F16')">F16</button>
</div >
    </div>
    <br>
    <br>
    <h1 class="movie-screen">MOVIE SCREEN</h1>
 
    <div class="selection-container">
    

    <input type="text" id="selectedSeatInput" class="form-control" placeholder="Seat will appear here" readonly>
    </div>
    <!-- Seat Selection -->
    <label for="selectedSeatInput">Selected Seats:</label>
    <input type="hidden" id="selectedSeatsInputHidden" name="seats">

    <!-- Food Selection -->
    <h3>Choose Foods</h3>
    @if($foods->isEmpty())
        <p>No foods available.</p>
    @else
        @foreach ($foods as $food)
            <div class="food-item" data-price="{{ $food->price }}">
                <label>{{ $food->name }} - Rp {{ number_format($food->price, 0, ',', '.') }}</label>
                <input type="number" name="foods[{{ $food->id }}][quantity]" min="0" value="0" class="form-control quantity-input">
                <input type="hidden" name="foods[{{ $food->id }}][id]" value="{{ $food->id }}">
            </div>
        @endforeach
    @endif
        <!-- Total Price Display -->
        <h3>Total Price: Rp <span id="totalPriceDisplay">0</span></h3>
        <input type="hidden" id="totalPriceInput" name="total_price">

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mt-2">Proceed</button>
    </form>


       
 
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
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>