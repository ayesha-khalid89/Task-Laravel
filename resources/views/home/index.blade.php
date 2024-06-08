<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        header {
            background: #333;
            color: #fff;
            padding-top: 30px;
            min-height: 70px;
            border-bottom: #0779e4 3px solid;
        }
        header a {
            color: #fff;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 16px;
        }
        ul {
            padding: 0;
            list-style: none;
        }
        ul li {
            float: left;
            display: inline;
            padding: 0 20px 0 20px;
        }
        .content {
            padding: 20px;
            background: #fff;
            margin-top: 20px;
        }
        .header-buttons {
            text-align: center;
        }
        .header-buttons a {
            background: #0779e4;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            display: inline-block;
            margin: 10px 5px;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div id="branding">
                <h1>My Application</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="{{ route('home.index') }}">Home</a></li>
                    <li><a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                            Logout
                        </a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">
        <div class="header-buttons">
            <a href="/user">Users</a>
            <a href="/project">Projects</a>
            <a href="/timesheet">Timesheets</a>
        </div>
        <div class="content">
            <h2>Welcome to your Home Page</h2>
            <p>This is your homepage. </p>
        </div>
    </div>

    <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
    @csrf
    @method('post')
    
    </form>
</body>
</html>
