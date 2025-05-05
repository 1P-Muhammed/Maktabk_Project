<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="{{ asset('css/account.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet" />
    <title>maktabk</title>
</head>
<body>
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true" />

        <!-- Sign Up -->
        <div class="signup">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <label for="chk" aria-hidden="true">Sign up</label>
                <input type="text" name="name" placeholder="User name" required value="{{ old('name') }}" />
                @error('name') <span>{{ $message }}</span> @enderror

                <input type="email" name="email" placeholder="Email" required value="{{ old('email') }}" />
                @error('email') <span>{{ $message }}</span> @enderror

                <input type="password" name="password" placeholder="Password" required />
                @error('password') <span>{{ $message }}</span> @enderror

                <input type="password" name="password_confirmation" placeholder="Confirm Password" required />

                <button type="submit">Sign up</button>
            </form>
        </div>

        <!-- Login -->
        <div class="login">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <label for="chk" aria-hidden="true">Login</label>
                <input type="email" name="email" placeholder="Email" required value="{{ old('email') }}" />
                @error('email') <span>{{ $message }}</span> @enderror

                <input type="password" name="password" placeholder="Password" required />
                @error('password') <span>{{ $message }}</span> @enderror

                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>
