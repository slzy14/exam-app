
@include('partials.header')
@include('partials.navigation')
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
@include('partials.footer')