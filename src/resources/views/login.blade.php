<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PiGLy</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>

<body>
  <div class="background">
    <div class="flame">
      <h1>PiGLy</h1>
      <h3>ログイン</h3>
      <form action="/login" method="post">
        @csrf
        <table>
          <tr>
            <th>メールアドレス</th>
            <td>
              <input type="text" name="email" value="{{ old('email') }}">
              <div class="error">
                @error('email')
                {{$message}}
                @enderror
              </div>
            </td>
          </tr>
          <tr>
            <th>パスワード</th>
            <td>
              <input type="text" name="password">
              <div class="error">
                @error('password')
                {{$message}}
                @enderror
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <button>ログイン</button>
            </td>
          </tr>
        </table>
      </form>
      <a href="/register/step1">アカウント作成はこちら</a>
    </div>
  </div>
</body>

</html>
