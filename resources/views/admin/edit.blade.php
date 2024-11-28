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
        <form action="/admin/{{$anak->id}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <h3>Name: <input type="text" name="name" value="{{$anak->name}}"></h3><br>   
            <h3>Age: <input type="text" name="age" value="{{$anak->age}}"/></h3><br> 
            <h3>Berat: <input type="number" name="weight" placeholder="Masukkan Berat" value="{{$anak->weight}}"/></h3><br>
            <h3>Tinggi: <input type="number" name="height" placeholder="Masukkan Tinggi" value="{{$anak->height}}"/></h3><br>     
            <h3>Photo: <input type="file" name="photo" value="{{$anak->photos}}"></h3><br>     
            <button class="btn-danger" type="submit">Submit</button>
        </form>
</body>
</html>