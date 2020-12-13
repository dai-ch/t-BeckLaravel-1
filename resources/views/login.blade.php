@extends('layouts.header')


@section('header')

  <div class="header__left">Laravel</div>
  <div class="header__right"><span><a href="{{ action('PostsController@login') }}">login</a></span><span><a href="{{ action('PostsController@register') }}">Register</a></span></div>

@endsection

@section('container')
<section class="container">
  <p class="title">Login</p>
  <table class="table">
    <form action="register" method="GET">
      @csrf
      <tr class="table__row">
        <th class="title__name"> E-mail Address</th>
        <td><input type="email" name="email" value=""></td>
      </tr>
      <tr class="table__row">
        <th class="title__name"> Password</th>
        <td><input type="text" name="password" value=""></td>
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

@endsection