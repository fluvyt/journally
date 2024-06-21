<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <title>Sign Up</title>
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
</head>
<body>
<div class="container">
    <div class="back-button" onclick="window.history.back();">
        <div></div>
    </div>
    <div class="logo"></div>
    <div class="heading">
        <span>Never be bullied into silence.</span>
        <span>Let’s write what you feel.</span>
    </div>
    <div class="form-container">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <input type="text" name="username" placeholder="Username" required />
            <input type="email" name="email" placeholder="Email Address" required />
            <input type="password" name="password" placeholder="Password" required />
            <button class="signup" type="submit">SIGN UP</button>
        </form>
        <a href="{{ route('login') }}">Already have an account? LOGIN here</a>
    </div>
</div>
</body>
</html>
