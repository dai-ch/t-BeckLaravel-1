@extends('layouts.header')

@section('content')

<body>
  <section class="main-container">
    <p class="title">Login</p>
    <table class="table">
      <form action="login" method="POST">
        @csrf
        <tr class="table__row">
          <th class="title__name"> E-mail Address</th>
          <td><input type="email" name="email" value="@if($email != ''){{$email}} @endif"></td>
        </tr>
        <tr class="table__row">
          <th class="title__name"> Password</th>
          <td><input type="text" name="password" value="@if($password != ''){{$password}}@endif"></td>
        </tr>
        <tr>
          <th class="title__name">
          <td><input type="checkbox" name="remember" value="check-ok">Remember Me</td>
          </th>
        </tr>
        <tr>
          <th class="title__name"></th>
          <td><input type="submit" value="Register"> <span><a href="">Forgot Your Password?</a></span></td>
        </tr>
      </form>
    </table>
  </section>
</body>

</html>
@endsection