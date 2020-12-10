<!DOCTYPE html>
<html lang="ja">

<head>
  <title>ログインページ</title>
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
    }

    .table {
      width: 700px;
      border: 1px solid #ddd;
    }

    th {
      text-align: right;
      padding-right: 10px;
    }
  </style>
</head>
<header class="header">
  <div class="header__left">Laravel</div>
  <div class="header__right"><span><a href="login">login</a></span><span><a href="register">Register</a></span></div>
</header>

<body>
  <section class="main-container">
    <p class="title">Login</p>
    <table class="table">
      <form action="login" method="post">
        @csrf
        <tr class="table__row">
          <th> E-mail Address</th>
          <td><input type="email" name="email"></td>
        </tr>
        <tr class="table__row">
          <th> Password</th>
          <td><input type="text" name="password"></td>
        </tr>
        <tr>
          <th>
          <td><input type="checkbox" name="remember" value="">Remember Me</td>
          </th>
        </tr>
        <tr>
          <th></th>
          <td><input type="submit" value="Register"><a href="">Forgot Your Password?</a></td>
        </tr>
      </form>
    </table>
  </section>

</body>

</html>