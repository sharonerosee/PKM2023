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
    <form action="/adminp/{{$pengurus->id}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <h3>Nama: <input type="text" name="name" value="{{$pengurus->name}}"></h3><br>   
        <h3>Posisi: <input type="text" name="position" value="{{$pengurus->position}}"/></h3><br> 
        <h3>Foto: <input type="file" name="photo" value="{{$pengurus->photos}}"></h3><br>  
        <button type="submit">Submit</button>
    </form>
</body>
</html>