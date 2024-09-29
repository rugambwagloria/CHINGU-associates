<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Your Project Details</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('/images/material_design_geometric_stock_dark_black.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }
        .top-left {
            position: absolute;
            top: 0;
            left: 0;
            width: 50%;
            height: 50%;
            background-color: #F03E3E;
        }
        .bottom-right {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 50%;
            height: 50%;
            background-color: #48D1CC;
        }
        .form-container {
            background-color: #1E1E1E;
            padding: 40px;
            border-radius: 10px;
            width: 80%;
            max-width: 600px;
            margin: auto;
        }
        h1 {
            color: #48D1CC;
            margin: 0 0 10px 0;
        }
        h2 {
            color: white;
            margin: 0 0 20px 0;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            background-color: transparent;
            border: none;
            border-bottom: 1px solid #555;
            color: white;
        }
        .checkbox-container {
            display: flex;
            align-items: center;
            color: #888;
            font-size: 0.9em;
            margin: 20px 0;
        }
        input[type="checkbox"] {
            width: auto;
            margin-right: 10px;
        }
        .submit-btn {
            background-color: #48D1CC;
            color: black;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .logo {
            width: 50px;
            height: 50px;
            margin-bottom: 20px;
        }
        .contact-info {
            color: #888;
            font-size: 0.8em;
            margin-top: 20px;
        }
        /* New styles for header */
        header {
            background-color: rgba(30, 30, 30, 0.9);
            padding: 20px 0;
            text-align: center;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 18px;
        }
        nav a:hover {
            color: #48D1CC;
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
    <!-- New Header Section -->
    <header>
    <nav>
                <a href="{{ route('vision')}}" style="color: white; text-decoration: none; margin-right: 20px;">Vision</a>
                <a href="{{ route('aboutUs') }}" style="color: white; text-decoration: none; margin-right: 20px;">About Us</a>
                <a href="{{ route('transcedence') }}" style="color: white; text-decoration: none; margin-right: 20px;">Portfolio</a>
                <a href="{{ route('works') }}" style="color: white; text-decoration: none; margin-right: 20px;">works</a>
            </nav>>
    </header>

    <div class="form-container">
        <svg class="logo" viewBox="0 0 100 100">
            <rect width="100" height="100" fill="#F03E3E"/>
            <path d="M0 100 L100 100 L100 50 Z" fill="#48D1CC"/>
        </svg>
        <h1>Let's talk.</h1>
        <h2>Enter your project details.</h2>
        <form action="your_server_script.php" method="POST">
            <input type="text" name="name" placeholder="Name">
            <input type="email" name="email" placeholder="Email">
            <textarea name="project_description" placeholder="Project Description" rows="3"></textarea>
            <div class="checkbox-container">
                <input type="checkbox" id="agree" name="agree">
                <label for="agree">I agree to the Games Cookie Policy and Privacy Policy</label>
            </div>
            <input type="submit" value="Submit" class="submit-btn">
        </form>
        <div class="contact-info">
            chingu designs<br>
            +41 43 123 45 67
        </div>
    </div>
    <footer style="margin-top: 50px; padding-top: 20px; border-top: 1px solid #333; text-align: center;">
        <div style="display: flex; justify-content: space-between; margin-bottom: 20px;">
        </div>
        <div style="color: #666;">
            CHINGU DESIGNS. Your trusted company.
        </div>
    </footer>
</body>
</html>

<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Your Project Details</title>
    <style>
       body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-image: url('/images/material_design_geometric_stock_dark_black.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
        .background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }
        .top-left {
            position: absolute;
            top: 0;
            left: 0;
            width: 50%;
            height: 50%;
            background-color: #F03E3E;
        }
        .bottom-right {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 50%;
            height: 50%;
            background-color: #48D1CC;
        }
        .form-container {
            background-color: #1E1E1E;
            padding: 40px;
            border-radius: 10px;
            width: 80%;
            max-width: 600px;
        }
        h1 {
            color: #48D1CC;
            margin: 0 0 10px 0;
        }
        h2 {
            color: white;
            margin: 0 0 20px 0;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            background-color: transparent;
            border: none;
            border-bottom: 1px solid #555;
            color: white;
        }
        .checkbox-container {
            display: flex;
            align-items: center;
            color: #888;
            font-size: 0.9em;
            margin: 20px 0;
        }
        input[type="checkbox"] {
            width: auto;
            margin-right: 10px;
        }
        .submit-btn {
            background-color: #48D1CC;
            color: black;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .logo {
            width: 50px;
            height: 50px;
            margin-bottom: 20px;
        }
        .contact-info {
            color: #888;
            font-size: 0.8em;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <svg class="logo" viewBox="0 0 100 100">
            <rect width="100" height="100" fill="#F03E3E"/>
            <path d="M0 100 L100 100 L100 50 Z" fill="#48D1CC"/>
        </svg>
        <h1>Let's talk.</h1>
        <h2>Enter your project details.</h2>
        <form action="your_server_script.php" method="POST">
    <input type="text" name="name" placeholder="Name">
    <input type="email" name="email" placeholder="Email">
    <textarea name="project_description" placeholder="Project Description" rows="3"></textarea>
    <div class="checkbox-container">
        <input type="checkbox" id="agree" name="agree">
        <label for="agree">I agree to the Games Cookie Policy and Privacy Policy</label>
    </div>
    <input type="submit" value="Submit" class="submit-btn">
</form>
        <div class="contact-info">
        chingu designs<br>
            +41 43 123 45 67
        </div>
    </div>
    <footer style="margin-top: 50px; padding-top: 20px; border-top: 1px solid #333; text-align: center;">
            <div style="display: flex; justify-content: space-between; margin-bottom: 20px;">
                
            </div>
            <div style="color: #666;">
            CHINGU DESIGNS. Your trusted company.
            </div>
        </footer>
</body>
</html>