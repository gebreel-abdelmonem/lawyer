<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Register</title>

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
        background: linear-gradient(135deg, #667eea, #764ba2);
    }

    .register-container {
        background: #fff;
        padding: 40px;
        width: 350px;
        border-radius: 15px;
        box-shadow: 0 15px 25px rgba(0,0,0,0.2);
    }

    .register-container h2 {
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
        border-bottom: 2px solid #667eea;
    }

    .input-group input:focus + label,
    .input-group input:valid + label {
        top: -8px;
        font-size: 12px;
        color: #667eea;
    }

    .register-btn {
        width: 100%;
        padding: 12px;
        border: none;
        background: #667eea;
        color: #fff;
        font-size: 16px;
        border-radius: 8px;
        cursor: pointer;
        transition: 0.3s;
    }

    .register-btn:hover {
        background: #5a67d8;
    }

    .extra {
        text-align: center;
        margin-top: 15px;
        font-size: 14px;
    }

    .extra a {
        color: #667eea;
        text-decoration: none;
    }
</style>

</head>
<body>

<div class="register-container">
    <h2>Create Account</h2>

    <form method="POST" action="{{route('admin.register')}}">
        @csrf

        <div class="input-group">
            <input type="text" name="name" required>
            <label>Full Name</label>
        </div>

        <div class="input-group">
            <input type="email" name="email" required>
            <label>Email</label>
        </div>

        <div class="input-group">
            <input type="password" name="password" required>
            <label>Password</label>
        </div>

        <button class="register-btn">Register</button>

        <div class="extra">
            <p>Already have an account? <a href="/login">Login</a></p>
        </div>
    </form>
</div>

</body>
</html>