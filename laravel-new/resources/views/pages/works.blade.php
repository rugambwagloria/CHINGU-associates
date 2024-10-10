<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <style>
        /* Header Styling */
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
            transition: background-color 0.3s ease;
        }

        .header:hover {
            background-color: rgba(0, 0, 0, 1);
        }

        .logo {
            font-size: 28px;
            font-weight: bold;
            letter-spacing: 2px;
            color: #ff1493;
            text-transform: uppercase;
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
            position: relative;
            transition: color 0.3s ease;
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

        /* Gallery Grid */
        .gallery-container {
            max-width: 1200px;
            margin: 80px auto 0; /* Added margin for spacing from header */
            background-color: white;
            border: 2px solid #333;
            border-radius: 10px;
            overflow: hidden;
        }

        h1 {
            margin: 0;
            padding: 15px;
            background-color: #333;
            color: white;
            text-align: center;
            font-size: 36px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 10px;
            padding: 10px;
        }

        .grid img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            transition: transform 0.5s ease, opacity 0.3s ease;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .grid img:hover {
            transform: scale(1.05);
            opacity: 0.9;
        }

        /* For larger images in grid */
        .grid .large-img {
            grid-column: span 2;
            grid-row: span 2;
            height: 600px;
            position: relative;
            overflow: hidden;
        }

        /* Zoom effect on hover */
        .grid .large-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .grid .large-img img:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body style="margin: 0; padding: 20px; background-color: #f0f0f0; font-family: Arial, sans-serif;">

    <!-- Header Section -->
    <div class="header">
        <div class="logo">CHINGU</div>
        <nav class="nav">
            <a href="{{ route('dashboard') }}">Home</a>
            <a href="{{ route('vision') }}">Vision</a>
            <a href="{{ route('aboutUs') }}">About Us</a>
            <a href="{{ route('transcedence') }}">Portfolio</a>
            <a href="{{ route('works') }}">Works</a>
        </nav>
    </div>

    <!-- Gallery Section -->
    <div class="gallery-container">
        <h1 style="">Gallery</h1>
        <div class="grid">
            <!-- Larger images in the grid -->
            <div class="large-img">
                <img src="/images/chingucups.jpg" alt="Living room">
            </div>
            <div class="large-img">
                <img src="/images/office-interior-designing-service-500x500.webp" alt="Modern living room">
            </div>

            <!-- Smaller images -->
            <img src="/images/chingusweaters.jpg" alt="Sweaters">
            <img src="/images/chinguhandbags.jpg" alt="Handbags">
            <img src="/img/home-decor-3.jpg" alt="Home Decor">
            <img src="/img/home-decor-2.jpg" alt="Building Exterior">
            <img src="/img/home-decor-2.jpg" alt="Building Exterior">
            <img src="/images/chingusweaters.jpg" alt="Sweaters">

        </div>
    </div>
</body>
</html>
