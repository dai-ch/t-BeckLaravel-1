@extends('layouts.header')

@section('content')

<body>
  <section class="container">
    <p class="title">Register</p>
    <table class="table">
      <form action="register" method="post">
        @csrf
        <tr class="table__row">
          <th class="title__name">Name</th>
          <td><input type="text" name="userName" value="@if($email != ''){{$userName}}@endif""></td>
        </tr>
        <tr class=" table__row">
          <th class="title__name"> E-mail Address</th>
          <td><input type="email" name="email" value="@if($email != ''){{$email}}@endif"></td>
        </tr>
        <tr class="table__row">
          <th class="title__name"> Password</th>
          <td><input type="password" name="password" value="@if($password != ''){{$password}}@endif"></td>
        </tr>
        <tr class="table__row">
          <th class="title__name"> Confirm Password</th>
          <td><input type="password" name="confirmPassword" value="@if($email != ''){{$confirmPassword}}@endif""></td>
        </tr>
        <tr class=" table__row">
          <th></th>
          <td><input type="submit" value="Register"></td>
        </tr>
      </form>
    </table>
  </section>
</body>

</html>

@endsection