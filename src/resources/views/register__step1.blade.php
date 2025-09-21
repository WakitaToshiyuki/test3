<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PiGLy</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/register__step1.css') }}">
</head>

<body>
    <div class="background">
        <div class="flame">
            <h1>PiGLy</h1>
            <h3>新規会員登録</h3>
            <p>STEP1 アカウント情報の登録</p>
            <form action="/register/step1" method="post">
                <table>
                    <tr>
                        <th>お名前</th>
                        <td><input type="text" name="name"></td>
                    </tr>
                    <tr>
                        <th>メールアドレス</th>
                        <td><input type="text" name="email"></td>
                    </tr>
                    <tr>
                        <th>パスワード</th>
                        <td><input type="text" name="password"></td>
                    </tr>
                    <tr>
                        <td>
                            <button>次に進む</button>
                        </td>
                    </tr>
                </table>
            </form>
            <a href="/login">ログインはこちら</a>
        </div>
    </div>
</body>

</html>
