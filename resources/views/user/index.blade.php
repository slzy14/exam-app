@include('partials.header')
@include('partials.navigation')
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
@include('partials.footer')