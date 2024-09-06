<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventory</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f2f5; /* Light gray background for the whole page */
        }

        #main {
            display: flex;
            flex-direction: column;
            height: 100vh;
        }

        #navbar {
            display: flex;
            align-items: center;
            background-color: #2c3e50; /* Dark blue background */
            padding: 15px 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Subtle shadow for depth */
        }

        #branding {
            flex: 1;
        }

        #branding h1 {
            color: #ecf0f1; /* Light gray text */
            font-size: 24px;
            margin: 0;
        }

        #navbar nav {
            display: flex;
            gap: 20px;
        }

        #navbar a {
            color: #ecf0f1; /* Light gray text */
            text-decoration: none;
            font-size: 18px;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        #navbar a:hover {
            background-color: #34495e; /* Slightly lighter blue */
            color: #ffffff; /* White text on hover */
        }

        #navbar a.active {
            background-color: #1abc9c; /* Highlight active link */
            color: #ffffff;
        }

        #navbar form {
            margin-left: 20px;
        }


        #content {
            flex: 1;
            padding: 20px;
            background-color: #ffffff; /* White background for content */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow for content */
            border-radius: 8px; /* Rounded corners for content */
            margin: 20px; /* Margin around the content */
        }
    </style>
</head>
<body>

    <div id="main">
        <div id="navbar">
            <div id="branding">
                <h1>Smarty</h1>
            </div>

            <nav>
                <a href="{{ url('/landing') }}" class="{{ request()->is('landing') ? 'active' : '' }}">
                    Home
                </a>
                <a href="{{ url('/clients') }}" class="{{ request()->is('clients*') ? 'active' : '' }}">
                    Clients
                </a>
                <a href="{{ url('/about') }}" class="{{ request()->is('about') ? 'active' : '' }}">
                    About Us
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </nav>
        </div>
        <div id="content">
            @yield('content')
        </div>
    </div>

</body>
</html>
