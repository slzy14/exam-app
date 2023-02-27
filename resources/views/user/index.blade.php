<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">User ID</th>
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
     @foreach($users as $user)
    <tr>

     
      <td>{{$user->id}}</td>
      <td>{{$user->firstName}}</td>
      <td>{{$user->lastName}}</td>
      <td>{{$user->email}}</td>

      
    </tr>
    @endforeach
  </tbody>
</table>
</body>
</html>