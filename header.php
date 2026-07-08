<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background-color: #fff;
        }

        header {
            background-color: #fff;
            border-bottom: 1px solid #e4e4e4;
            padding: 0;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        nav {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            padding: 10px 16px;
        }

        .nav-left,
        .nav-right {
            display: flex;
            align-items: center;
            gap: 18px;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 18px;
            align-items: center;
        }

        nav a {
            text-decoration: none;
            font-size: 13px;
            color: #202124;
            transition: color 0.2s ease;
        }

        nav a:hover {
            color: #1a73e8;
        }

        nav a[href="#gmail"] {
            color: #202124;
        }

        nav a[href="#images"] {
            color: #6b46c1;
        }

        .apps-icon {
            width: 24px;
            height: 24px;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: transparent;
            border: none;
            padding: 0;
            transition: opacity 0.2s ease;
        }

        .apps-icon svg {
            width: 20px;
            height: 20px;
            display: block;
            fill: none;
            stroke: #414141;
            stroke-width: 2;
        }

        .apps-icon:hover {
            opacity: 0.7;
        }

        .signin-btn {
            background-color: #1a73e8;
            color: white;
            padding: 8px 22px;
            border: none;
            border-radius: 999px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.2s ease, box-shadow 0.2s ease;
        }

        .signin-btn:hover {
            background-color: #1669c1;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.12);
        }

        .signin-btn:active {
            background-color: #1358a2;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="nav-left"></div>
            <div class="nav-right">
                <ul>
                    <li><a href="#gmail" class="nav-link">Gmail</a></li>
                    <li><a href="#images" class="nav-link">Images</a></li>
                </ul>
                <button class="apps-icon" onclick="openApps()" title="Apps" aria-label="Apps">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M4 4h4v4H4zm6 0h4v4h-4zm6 0h4v4h-4zm-6 6h4v4h-4zm6 0h4v4h-4zm-6 6h4v4h-4zm6 0h4v4h-4zm-6 0h4v4h-4z"/>
                    </svg>
                </button>
                <button class="signin-btn" onclick="handleSignIn()">Sign in</button>
            </div>
        </nav>
    </header>

    <script>
        function openApps() {
            alert('Apps menu opened');
            console.log('Apps icon clicked');
        }

        function handleSignIn() {
            alert('Redirecting to Sign In page...');
            console.log('Sign In button clicked');
            // window.location.href = 'login.php';
        }
    </script>
</body>
</html>


