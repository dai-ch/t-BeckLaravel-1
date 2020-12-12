<!DOCTYPE html>
<html lang="ja">

<head>
  <title>ログインー登録の画面遷移</title>
  <style>
    .header {
      display: flex;
      justify-content: space-between;
      border-bottom: 1px solid #ddd;
    }

    .header span {
      padding: 5px;
    }

    .title {
      background-color: #ddd;
      width: 680px;
      padding: 10px;
      margin: 10px auto 0;
    }

    .table {
      max-width: 700px;
      width: 95%;
      margin: 0 auto;
      border: 1px solid #ddd;
    }


    .title__name {
      font-size: 15px;
      font-weight: 300;
      text-align: right;
      padding-right: 20px;
    }

    .table__row {
      padding-top:10px;
    }

    .checkPassword {
      text-decoration: none;
    }
  </style>
</head>

<header class="header">
  <div class="header__left">Laravel</div>
  <div class="header__right"><span><a href="{{ action('PostsController@login') }}">login</a></span><span><a href="{{ action('PostsController@register') }}">Register</a></span></div>
</header>

@yield('content')