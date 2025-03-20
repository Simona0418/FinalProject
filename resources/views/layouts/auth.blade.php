<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Login')</title>

    <!-- Inline styles for now, can be moved to external file later -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: #FFFFFF;
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: #f46425;
        }

        .content-wrapper {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .auth-box {
            background-color: white;
            padding: 40px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            max-width: 400px;
            width: 100%;
        }

        label {
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
            display: inline-block;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .checkbox-container {
            display: flex;
            align-items: center;
        }

        .checkbox-container label {
            margin-left: 8px;
        }

        .form-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        button {
            background-color: #f46425;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background-color: #e05219;
        }

        a {
            color: #f46425;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .logo-img {
            max-width: 100px;
            height: auto;
            margin: 0;
        }
    </style>
</head>

<body>

    <nav>
        <div class="logo">
            <img class="logo-img" src="{{ asset('images/logo.png') }}" alt="logo">
        </div>
    </nav>

    <div class="content-wrapper">
        <div class="auth-box">
            @yield('content')
        </div>
    </div>

</body>

</html>
