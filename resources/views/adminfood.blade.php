<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <style>
        .form-container {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            margin-bottom: 100px;
        }
        .form-header {
            text-align: center;
            margin-bottom: 20px;
            color: #007bff;
        }
        .form-label {
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-control {
            border-radius: 5px;
            border: 1px solid #ced4da;
            padding: 10px;
            width: 100%;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }
        .form-control:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.1);
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            color: #ffffff;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .btn-primary:disabled {
            background-color: #6c757d;
            cursor: not-allowed;
        }
        .text-danger {
            color: #dc3545;
            font-size: 0.9rem;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">TIXNATION</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Food Admin<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route("adminstudio") }}">Studio Admin</a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link disabled" href="{{ route("adminmovie") }}">Movie Admin</a>
      </li>
       <li class="nav-item">
         <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="text-red-500 hover:underline">
        Logout
    </button>
      </li>
       
</form>
    </ul>
  </div>
</nav>
    
    
        <div class="container mt-5">
        <div class="form-container">
            <h2 class="form-header">Input Data Foods</h2>
            <form id="studioForm" method="POST" action="{{route('adminfood.store')}}" >
                @csrf
                <div class="mb-3">
                    <label for="namaStudio" class="form-label">Nama Food:</label>
                    <input type="text" class="form-control" id="namaStudio" name="name" placeholder="Masukkan nama Film" required>
                    <div id="namaStudioError" class="text-danger"></div>
                    <label for="namaStudio" class="form-label">Price:</label>
                    <input type="integer" class="form-control" id="namaStudio" name="price" placeholder="Masukkan harga" required>
                    <div id="namaStudioError" class="text-danger"></div>
                </div>
                <button type="submit" class="btn btn-primary" id="submitButton">Simpan</button>
            </form>
        </div>
    </div>
   
<h1 class="text-2xl font-bold mb-6 text-center">Food Admin</h1>

<div class="overflow-x-auto px-4">
    <table class="table table-bordered w-full border border-gray-300 text-sm bg-white shadow-md rounded-lg overflow-hidden">
        <thead class="bg-yellow-100">
            <tr>
                <th class="px-4 py-2 text-left">No</th>
                <th class="px-4 py-2 text-left">Food Name</th>
                <th class="px-4 py-2 text-left">Price</th>
                <th class="px-4 py-2 text-left">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($foods as $food)
            <tr class="hover:bg-yellow-50">
                <td class="px-4 py-2">{{ $food->id }}</td>
                <td class="px-4 py-2">{{ $food->name }}</td>
                <td class="px-4 py-2">Rp{{ number_format($food->price, 0, ',', '.') }}</td>
                <td class="px-4 py-2 flex gap-2">
                    <a href="{{ route('food.edit', $food->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('adminfood.destroy', $food->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

  
   
  </tbody>
</table>
</body>
</html>