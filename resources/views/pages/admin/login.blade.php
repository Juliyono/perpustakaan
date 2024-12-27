<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Perpustakaan</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-image: url('{{ asset('images/book.jpg') }}'); /* Path gambar lokal di public/images/book-image */
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            color: #fff;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.8); /* Menambahkan opacity agar form lebih terlihat jelas */
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .login-container h2 {
            color: #333;
            margin-bottom: 20px;
        }

        .login-container form {
            display: flex;
            flex-direction: column;
        }

        .login-container label {
            font-size: 14px;
            color: #333;
            margin-bottom: 5px;
            text-align: left;
        }

        .login-container input {
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            outline: none;
        }

        .login-container input:focus {
            border-color: #3b82f6;
        }

        .login-container button {
            padding: 14px;
            background-color: #3b82f6;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-container button:hover {
            background-color: #2563eb;
        }

        .login-container .icon {
            font-size: 50px;
            color: #3b82f6;
            margin-bottom: 20px;
        }

        .login-container p {
            color: #666;
            font-size: 14px;
        }

        .login-container p a {
            color: #3b82f6;
            text-decoration: none;
        }
    </style>
</head>
<body>

<div class="login-container">
    <div class="icon">
        <i class="fas fa-book"></i>
    </div>
    <h2>Login Admin Perpustakaan</h2>
    <form method="POST" action="{{ route('admin.login') }}">
        @csrf
        <label for="username">Username</label>
        <input type="text" name="username" required placeholder="Masukkan username">

        <label for="password">Password</label>
        <input type="password" name="password" required placeholder="Masukkan password">

        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>
