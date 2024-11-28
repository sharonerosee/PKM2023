@if($errors)
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="d-flex justify-content">
    <form action="/admin/store1" method="POST" enctype="multipart/form-data" class="create">
        @csrf
        <h3>Nama: <input type="text" name="name" placeholder="Masukkan Nama"/></h3><br>   
        <h3>Posisi: <input type="text" name="position" placeholder="Masukkan Posisi"/></h3><br>   
        <h3>Foto: <input type="file" name="photo"/></h3><br>
        <button class='btn' type="submit">Submit</button>
    </form>
</body>
</html>

