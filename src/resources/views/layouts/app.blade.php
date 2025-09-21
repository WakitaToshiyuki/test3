<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PiGLy</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/common.css') }}">
  @yield('css')
</head>

<body>
    <header>
        <div class="header">
            <div class="header__logo">
                <h3 class="header__text" >
                    PiGLy
                </h3>
            </div>
            <div class="header__button">
                <button class="header__goal" action="/weight_logs/goal_setting">目標体重設定</button>
                <button class="header__logout" action="/logout">ログアウト</button>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>
</body>

</html>
