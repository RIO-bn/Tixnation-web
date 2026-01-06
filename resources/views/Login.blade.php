<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
   <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>
<body>
    <div class="Background">
        <div class="center">
    <H1 class="LoginTitle">TIXNATION</H1>
    <H2 class="LoginSub">Buy ticket with ease</H2>

    <div class="form-container-Login">
        <form action="" class="login-form">
            <label for="name">Name</label>
            <Input type="text" name="name" placeholder="Nama" required></Input>
            
            <label for="Email">Email</label>
            <input type="email" name="email" placeholder="Email" required>

            <input type="password" name="password" placeholder="Password" required><br>
            <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" required><br>


            <button type="submit">Daftar</button>
        </form>
    </div>
    </div>
    </div>
</body>
</html>