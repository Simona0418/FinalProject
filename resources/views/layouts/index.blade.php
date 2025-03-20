<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #f46425;
            position: fixed;
            top: 0;
            left: -250px;
            transition: all 0.3s ease;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            margin-top: 82px;
        }

        .sidebar.open {
            left: 0;
        }

        .sidebar .menu a {
            display: block;
            color: #fff;
            text-decoration: none;
            padding: 15px;
            margin-bottom: 7px;
            background-color: #f46425;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            font-weight: bold;
        }

        .sidebar .menu a:hover {
            background-color: #e05219;
        }

        .content-wrapper {
            padding: 40px;
            margin-left: 50px;
            margin-top: 84px;
            min-height: 100vh;
            transition: margin-left 0.3s ease;
            flex: 1;
        }

        .content-wrapper.sidebar-open {
            margin-left: 260px;
        }

        nav {
            background-color: #FFFFFF;
            padding: 20px 40px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            z-index: 1000;
            top: 0;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: #f46425;
            display: flex;
            align-items: center;
        }

        .logo-img {
            max-width: 100px;
            height: auto;
            margin-right: 10px;
        }

        .toggle-btn {
            cursor: pointer;
            background-color: #f46425;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            font-size: 1rem;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .toggle-btn:hover {
            background-color: #e05219;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>

    <div class="sidebar" id="sidebar">
        <div class="menu">
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <a href="{{ route('dashboard.jobs.index') }}">Jobs</a>
            <a href="{{ route('dashboard.team_members.index') }}">Team Members</a>
            <a href="{{ route('dashboard.positions.index') }}">Positions</a>
            <a href="{{ route('dashboard.partners.index') }}">Partners</a>
            <a href="{{ route('dashboard.testimonials.index') }}">Testimonials</a>
            <a href="{{ route('dashboard.industries.index') }}">Industries</a>
            <a href="{{ route('dashboard.services.index') }}">Services</a>
            <a href="{{ route('dashboard.service_categories.index') }}">Service Categories</a>




            <a href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        </div>
    </div>

    <nav>
        <a href="{{ route('dashboard') }}" class="logo">
            <img class="logo-img" src="{{ asset('images/logo.png') }}" alt="logo">
        </a>
        <button class="toggle-btn" id="toggle-btn">☰ Menu</button>


    </nav>

    <div class="content-wrapper " id="content">
        @yield('content')
    </div>


    <script>
        const toggleBtn = document.getElementById('toggle-btn');
        const sidebar = document.getElementById('sidebar');
        const contentWrapper = document.getElementById('content');

        toggleBtn.addEventListener('click', function() {
            sidebar.classList.toggle('open');
            contentWrapper.classList.toggle('sidebar-open');
        });
    </script>

</body>

</html>
