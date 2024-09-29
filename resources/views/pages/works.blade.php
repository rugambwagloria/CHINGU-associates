<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <style>
                .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
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
<body style="margin: 0; padding: 20px; background-color: #f0f0f0; font-family: Arial, sans-serif;">
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
    <div style="max-width: 1200px; margin: 0 auto; background-color: white; border: 2px solid #333; border-radius: 10px; overflow: hidden;">

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); grid-gap: 10px; padding: 10px;">
        <h1 style="margin: 0; padding: 15px; background-color: #333; color: white; text-align: center; font-size: 36px;">Gallery</h1>
            <div style="grid-column: span 2; grid-row: span 2; display: flex; gap: 10px;">
                <img src="/images/chingucups.jpg" alt="Living room" style="width: 50%; height: 100%; object-fit: cover;">
                <img src="/images/office-interior-designing-service-500x500.webp" alt="Modern living room" style="width: 50%; height: 100%; object-fit: cover;">
            </div>
            <img src="/images/chingusweaters.jpg" alt="Kitchen" style="width: 100%; height: 300px; object-fit: cover;">
            <img src="/images/chinguhandbags.jpg" alt="Beach view" style="grid-column: span 3; width: 100%; height: 200px; object-fit: cover;">
            <img src="/img/home-decor-3.jpg" alt="Bedroom" style="width: 100%; height: 300px; object-fit: cover;">
            <img src="/img/home-decor-2.jpg" alt="Building exterior" style="width: 100%; height: 300px; object-fit: cover;">
            <img src="/img/home-decor-2.jpg" alt="Building exterior" style="width: 100%; height: 300px; object-fit: cover;">
        </div>
    </div>
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); grid-gap: 10px; padding: 10px;">
        <!--<h1 style="margin: 0; padding: 15px; background-color: #333; color: white; text-align: center; font-size: 36px;">Gallery</h1>-->
            <div style="grid-column: span 2; grid-row: span 2; display: flex; gap: 10px;">
                <img src="/images/chingucups.jpg" alt="Living room" style="width: 50%; height: 100%; object-fit: cover;">
                <img src="/images/office-interior-designing-service-500x500.webp" alt="Modern living room" style="width: 50%; height: 100%; object-fit: cover;">
            </div>
            <img src="/images/chingusweaters.jpg" alt="Kitchen" style="width: 100%; height: 300px; object-fit: cover;">
            <img src="/images/chinguhandbags.jpg" alt="Beach view" style="grid-column: span 3; width: 100%; height: 200px; object-fit: cover;">
            <img src="/img/home-decor-3.jpg" alt="Bedroom" style="width: 100%; height: 300px; object-fit: cover;">
            <img src="/img/home-decor-2.jpg" alt="Building exterior" style="width: 100%; height: 300px; object-fit: cover;">
            <img src="/img/home-decor-2.jpg" alt="Building exterior" style="width: 100%; height: 300px; object-fit: cover;">
        </div>
    </div>
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); grid-gap: 10px; padding: 10px;">
        <!--<h1 style="margin: 0; padding: 15px; background-color: #333; color: white; text-align: center; font-size: 36px;">Gallery</h1>-->
            <div style="grid-column: span 2; grid-row: span 2; display: flex; gap: 10px;">
                <img src="/images/chingucups.jpg" alt="Living room" style="width: 50%; height: 100%; object-fit: cover;">
                <img src="/images/office-interior-designing-service-500x500.webp" alt="Modern living room" style="width: 50%; height: 100%; object-fit: cover;">
            </div>
            <img src="/images/chingusweaters.jpg" alt="Kitchen" style="width: 100%; height: 300px; object-fit: cover;">
            <img src="/images/chinguhandbags.jpg" alt="Beach view" style="grid-column: span 3; width: 100%; height: 200px; object-fit: cover;">
            <img src="/img/home-decor-3.jpg" alt="Bedroom" style="width: 100%; height: 300px; object-fit: cover;">
            <img src="/img/home-decor-2.jpg" alt="Building exterior" style="width: 100%; height: 300px; object-fit: cover;">
            <img src="/img/home-decor-2.jpg" alt="Building exterior" style="width: 100%; height: 300px; object-fit: cover;">
        </div>
    </div>
</body>
</html>