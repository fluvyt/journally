<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <div class="v1_2">
        <div class="v1_3"></div>
        <span class="v1_4">Journally</span>
        <span class="v1_5">Journal Daily</span>
        <span class="v1_6">Hallo, Welcome to</span>

        <div class="v1_14">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div>
                <input type="text" name="email" placeholder="Email address" class="input_email" required />
                </div>
                <div>
                <input type="password" name="password" placeholder="Password" class="input_password" required />
                </div>
                <div class="v1_8">
                    <button type="submit" class="login_button">LOGIN</button>
                </div>
            </form>
        </div>

        <span class="v1_11"><a href="#">Forgot Password?</a></span>
        <span class="v1_12"><a href="{{ route('register') }}">Don’t have an account? SIGN UP here</a></span>

        <div class="v1_15">
            <span class="v1_16">Never be bullied into silence.</span>
            <span class="v1_17">Let’s write what you feel.</span>
        </div>
    </div>
</body>
</html>
