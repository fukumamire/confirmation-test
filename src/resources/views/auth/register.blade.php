<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('auth_css/register.css') }}">
    <title>FashionablyLate</title>
    
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                FashionablyLate
            </a>
        </div>
        <nav>
        <a href="{{ route('login') }}">login</a>
    </nav>
    </header>
    <hr class="header-line"> 

    <main>
        <div class="container">
            <h2>Register</h2>
                <form method="POST" action="{{ route('register') }}">
                @csrf
                <div>
                    <label for="name">お名前</label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
                    @error('name')
                        <div>{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label for="email">メールアドレス</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required>
                    @error('email')
                        <div>{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label for="password">パスワード</label>
                    <input id="password" type="password" name="password" required>
                    @error('password')
                        <div>{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label for="password_confirmation">パスワード（確認）</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required>
                </div>

                <div>
                    <button type="submit">登録</button>
                </div>
        </form>
    </div>
    </main>
</body>
</html>