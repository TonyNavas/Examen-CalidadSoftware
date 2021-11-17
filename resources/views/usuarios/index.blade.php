<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
<table class="table table striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Correo</th>
      <th scope="col">Contraseña</th>
    </tr>
  </thead>
  @foreach($users as $us)
  <tbody>
    <tr>
      <th>{{$us->id}}</th>
      <td>{{$us->name}}</td>
      <td>{{$us->email}}</td>
      <td>{{$us->password}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
</div>
</body>
</html>