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
      <th scope="col">Room ID</th>
      <th scope="col">Room Description</th>
      <th scope="col">Room Capacity</th>
      <th scope="col">Date From</th>
      <th scope="col">Date To</th>
    </tr>
  </thead>
  <tbody>
     @foreach($rooms as $room)
    <tr>

     
      <td>{{$room->id}}</td>
      <td>{{$room->roomDescription}}</td>
      <td>{{$room->roomCapacity}}</td>
      <td>{{$room->dateFrom}}</td>
      <td>{{$room->dateTo}}</td>
      
    </tr>
    @endforeach
  </tbody>
</table>
</body>
</html>