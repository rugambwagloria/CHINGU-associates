
<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHINGU ARGHITECTURE</title>
    <style>
        /* Reset default margin and padding */
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
            font-family: Arial, sans-serif;
            background-color: #333333; /* Set background color here */
        }

        .container {
            display: flex;
            height: 100vh;
            width: 100vw;
        }

        .image-container {
            flex: 2;
            position: relative;
            overflow: hidden;
        }

        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 0 50% 50% 0;
        }

        .text-container {
            flex: 1;
            padding: 40px;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .text-container h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .text-container p {
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        .divider {
            width: 50px;
            height: 3px;
            background-color: #c0c0c0;
            margin-top: 20px;
        }
        .button-link {
            position: absolute;
            top: 20px;
            right: 20px;
            font-family: 'Playfair Display', serif;
            font-size: 1.5em;
            color: black;
            text-decoration: none;
            padding: 10px 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border: 2px solid black;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }
        .button-link:hover {
            background-color: black;
            color: white;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px;
            background-color: rgba(0, 0, 0, 0.8);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            transition: all 0.3s ease;
        }
        .header:hover {
            background-color: rgba(0, 0, 0, 1);
        }
        .nav a {
            color: #fff;
            text-decoration: none;
            margin-left: 20px;
        }
        .nav {
            display: flex;
            gap: 30px;
        }
        .nav a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: color 0.3s ease;
            position: relative;
        }
        .nav a:hover {
            color: #ff1493;
        }
        .nav a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: #ff1493;
            transition: width 0.3s ease;
        }
        .logo {
            font-size: 28px;
            font-weight: bold;
            letter-spacing: 2px;
            color: #ff1493;
            text-transform: uppercase;
        }
        .nav a:hover::after {
            width: 100%;
        }
        .logo {
            font-size: 24px;
            font-weight: bold;
        }
        .nav a {
            color: #fff;
            text-decoration: none;
            margin-left: 20px;
        }
    </style>
</head>

<body>
<div class="header">
        <div class="logo">CHINGU</div>
        <nav class="nav">
        <a href="{{ route('dashboard') }}" style="color: white; text-decoration: none; margin-right: 20px;">Home</a>
        <a href="{{ route('vision')}}" style="color: white; text-decoration: none; margin-right: 20px;">Vision</a>
                <a href="{{ route('aboutUs') }}" style="color: white; text-decoration: none; margin-right: 20px;">About Us</a>
                <a href="{{ route('transcedence') }}" style="color: white; text-decoration: none; margin-right: 20px;">Portfolio</a>
                <a href="{{ route('works') }}" style="color: white; text-decoration: none; margin-right: 20px;">works</a>
                
            </nav>
        
    </div>
    <div class="container">
        <div class="image-container">
            <img src="/images/Architectural Design Elements of Modern American Homes _ FH_files/Design-ingenuity-is-showcased-in-every-aspect-of-modern-house-architecture-from-layout-to-materials-to-finishes.jpg" alt="Modern room">
        </div>
        <div class="text-container">
            <h1>VISION</h1>
            <p>
                To unlock the full potential of design and innovation within
                an industry. We strive to be the catalyst that transforms creative ideas into groundbreaking solutions,
                revolutionizing the way products and structures are conceived and analyzed.
            </p>
            <h1>MISSION</h1>
            <p>
                To pioneer a new era of innovation where sustainability, research, playful design, technology, and 
                experience converge seamlessly. We are committed to crafting products and experiences that not only 
                delight our users but also positively impact the world around us.
            </p>
            
            <div class="divider"></div>
        </div>
    </div>
</body>
</html>-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHINGU ARGHITECTURE</title>
    <style>
        /* Existing styles */
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
            font-family: Arial, sans-serif;
            background-color: #333333;
        }

        /* ... (keep all the existing styles) ... */

        /* New styles for animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .animated-text {
            opacity: 0;
            animation: fadeIn 10s forwards;
        }

        .delay-1 {
            animation-delay: 0.5s;
        }

        .delay-2 {
            animation-delay: 1s;
        }

        .delay-3 {
            animation-delay: 1.5s;
        }

        .delay-4 {
            animation-delay: 2s;
        }
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
            font-family: Arial, sans-serif;
            background-color: #333333; /* Set background color here */
        }

        .container {
            display: flex;
            height: 100vh;
            width: 100vw;
        }

        .image-container {
            flex: 2;
            position: relative;
            overflow: hidden;
        }

        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 0 50% 50% 0;
        }

        .text-container {
            flex: 1;
            padding: 40px;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .text-container h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .text-container p {
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        .divider {
            width: 50px;
            height: 3px;
            background-color: #c0c0c0;
            margin-top: 20px;
        }
        .button-link {
            position: absolute;
            top: 20px;
            right: 20px;
            font-family: 'Playfair Display', serif;
            font-size: 1.5em;
            color: black;
            text-decoration: none;
            padding: 10px 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border: 2px solid black;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }
        .button-link:hover {
            background-color: black;
            color: white;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px;
            background-color: rgba(0, 0, 0, 0.8);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            transition: all 0.3s ease;
        }
        .header:hover {
            background-color: rgba(0, 0, 0, 1);
        }
        .nav a {
            color: #fff;
            text-decoration: none;
            margin-left: 20px;
        }
        .nav {
            display: flex;
            gap: 30px;
        }
        .nav a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: color 0.3s ease;
            position: relative;
        }
        .nav a:hover {
            color: #ff1493;
        }
        .nav a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: #ff1493;
            transition: width 0.3s ease;
        }
        .logo {
            font-size: 28px;
            font-weight: bold;
            letter-spacing: 2px;
            color: #ff1493;
            text-transform: uppercase;
        }
        .nav a:hover::after {
            width: 100%;
        }
        .logo {
            font-size: 24px;
            font-weight: bold;
        }
        .nav a {
            color: #fff;
            text-decoration: none;
            margin-left: 20px;
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="logo">CHINGU</div>
        <nav class="nav">
            <a href="{{ route('dashboard') }}">Home</a>
            <a href="{{ route('vision')}}">Vision</a>
            <a href="{{ route('aboutUs') }}">About Us</a>
            <a href="{{ route('transcedence') }}">Portfolio</a>
            <a href="{{ route('works') }}">works</a>
        </nav>
    </div>
    <div class="container">
        <div class="image-container">
            <img src="/images/Office-Interior-12.jpeg" alt="Modern room">
        </div>
        <div class="text-container">
            <h1 class="animated-text delay-1">VISION</h1>
            <p class="animated-text delay-2">
                To unlock the full potential of design and innovation within
                an industry. We strive to be the catalyst that transforms creative ideas into groundbreaking solutions,
                revolutionizing the way products and structures are conceived and analyzed.
            </p>
            <h1 class="animated-text delay-3">MISSION</h1>
            <p class="animated-text delay-4">
                To pioneer a new era of innovation where sustainability, research, playful design, technology, and 
                experience converge seamlessly. We are committed to crafting products and experiences that not only 
                delight our users but also positively impact the world around us.
            </p>
            
            <div class="divider"></div>
        </div>
    </div>
</body>
</html>


