<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                min-height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .container {
                text-align: center;
                background: white;
                padding: 50px;
                border-radius: 10px;
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
                max-width: 600px;
            }

            h1 {
                color: #333;
                font-size: 2.5em;
                margin-bottom: 20px;
            }

            p {
                color: #666;
                font-size: 1.1em;
                margin-bottom: 30px;
            }

            .links {
                display: flex;
                gap: 20px;
                justify-content: center;
            }

            a {
                padding: 10px 20px;
                background: #667eea;
                color: white;
                text-decoration: none;
                border-radius: 5px;
                transition: background 0.3s;
            }

            a:hover {
                background: #764ba2;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Welcome to Laravel 10!</h1>
            <p>This is the welcome page of your Laravel application.</p>
            <div class="links">
                <a href="/">Home</a>
                <a href="/about">About</a>
            </div>
        </div>
    </body>
</html>
