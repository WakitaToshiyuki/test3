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
            <p>STEP2 体重データの入力</p>
            <form action="/register/step2" method="post">
                @csrf
                <table>
                    <tr>
                        <th>現在の体重</th>
                        <td><input type="text" name="weight"></td>
                    </tr>
                    <tr>
                        <th>目標の体重</th>
                        <td><input type="text" name="target_weight"></td>
                    </tr>
                    <tr>
                        <td>
                            <button>アカウント作成</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>

</html>
