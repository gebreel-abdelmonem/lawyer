<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>تسجيل الدخول</title>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Segoe UI', sans-serif;
    }

    body {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background: linear-gradient(135deg, #828384, #161318);
    }

    .login-container {
        background: #fff;
        padding: 40px;
        width: 350px;
        border-radius: 15px;
        box-shadow: 0 15px 25px rgba(0,0,0,0.2);
    }

    .login-container h2 {
        text-align: center;
        margin-bottom: 25px;
        color: #333;
    }

    .input-group {
        position: relative;
        margin-bottom: 20px;
    }

    .input-group input {
        width: 100%;
        padding: 12px 10px;
        border: none;
        border-bottom: 2px solid #ccc;
        outline: none;
        font-size: 16px;
        transition: 0.3s;
    }

    .input-group label {
        position: absolute;
        left: 10px;
        top: 12px;
        color: #aaa;
        font-size: 14px;
        pointer-events: none;
        transition: 0.3s;
    }

    .input-group input:focus,
    .input-group input:valid {
        border-bottom: 2px solid #2c2e36;
    }

    .input-group input:focus + label,
    .input-group input:valid + label {
        top: -8px;
        font-size: 12px;
        color: #363943;
    }

    .login-btn {
        width: 100%;
        padding: 12px;
        border: none;
        background: #000000;
        color: #fff;
        font-size: 16px;
        border-radius: 8px;
        cursor: pointer;
        transition: 0.3s;
    }

    .login-btn:hover {
        background: #57564d;
        color: #000000
    }

    /* .extra {
        text-align: center;
        margin-top: 15px;
        font-size: 14px;
    }

    .extra a {
        color: #000000;
        text-decoration: none;
    } */
</style>

</head>
<body>

<div class="login-container">
    <h2>Welcome Back</h2>

    <form method="POST" action="/login">
        @csrf
        <div class="input-group">
            <input type="text" name="email" required>
            <label>Username</label>
        </div>

        <div class="input-group">
            <input type="password" name="password" required>
            <label>Password</label>
        </div>

        <button class="login-btn">Login</button>

        {{-- <div class="extra">
            <p>Forgot password? <a href="#">Click here</a></p>
        </div> --}}
        @if(session('error'))
    <p style="color:red;">{{ session('error') }}</p>
@endif
    </form>
</div>

</body>
</html>