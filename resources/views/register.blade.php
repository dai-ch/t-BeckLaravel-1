@extends('layouts.header')

@section('header')

<div class="header__left">Laravel</div>
<div class="header__right"><span><a href="{{ action('PostsController@login') }}">login</a></span><span><a href="{{ action('PostsController@register') }}">Register</a></span></div>

@endsection

@section('container')

<section class="container">
  <p class="title">Register</p>
  <table class="table">
    <form action="login" method="GET">
      @csrf
      <tr class="table__row">
        <th class="title__name">Name</th>
        <td><input type="text" name="userName" value=""></td>
      </tr>
      <tr class=" table__row">
        <th class="title__name"> E-mail Address</th>
        <td><input type="email" name="email" value=""></td>
      </tr>
      <tr class="table__row">
        <th class="title__name"> Password</th>
        <td><input type="password" name="password" value=""></td>
      </tr>
      <tr class="table__row">
        <th class="title__name"> Confirm Password</th>
        <td><input type="password" name="confirmPassword" value=""></td>
      </tr>
      <tr class=" table__row">
        <th></th>
        <td><input type="submit" value="Register"></td>
      </tr>
    </form>
  </table>
</section>
@endsection