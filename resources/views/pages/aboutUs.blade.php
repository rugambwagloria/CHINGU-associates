<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Our Company</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            width: 100%;
            height: 100%;
            max-width: none;
            padding: 0;
            box-sizing: border-box;
            position: relative;
            overflow: hidden;
        }
        .content {
            position: absolute;
            left: 0;
            top: 0;
            width: 50%;
            height: 100%;
            padding: 40px;
            box-sizing: border-box;
            overflow-y: auto;
            background-color: rgba(255, 255, 255, 0.9);
            z-index: 1;
        }
        
        h1 {
            font-size: 3vw;
            color: #333;
            margin-bottom: 20px;
            font-weight: normal;
        }
        p {
            font-size: 1.5vw;
            color: #666;
            line-height: 1.6;
            margin-bottom: 15px;
        }
        .image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            clip-path: circle(70% at 100% 50%);
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
        .logo {
            font-size: 28px;
            font-weight: bold;
            letter-spacing: 2px;
            color: #ff1493;
            text-transform: uppercase;
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
        .image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
        .image::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(to right, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0.3) 100%);
    z-index: 1;
}
        .image img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0;
            transition: opacity 2s ease-in-out;
        }
        .image img {
    transition: opacity 2s ease-in-out, transform 10s ease-in-out;
    transform: scale(1.1);
}
.image img.active {
    opacity: 1;
    transform: scale(1);
}
       
        .image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            clip-path: circle(70% at 100% 50%);
            z-index: 1;
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
        <div class="image">
            <img src="/images/land.png" alt="Image 1">
            <img src="/images/sketch.png" alt="Image 2">
            <img src="/images/workss.png" alt="Image 3">
            <img src="/images/bYp05aaH_Lv95_1024.webp" alt="Image 4">
        </div>
    <div class="container">
        <div class="image"></div>
        <div class="content">
            <h1>About our<br>COMPANY</h1>
            <p>We focus on designing spaces that are both functional and visually appealing for residential and commercial clients. By partnering with architects, builders, and homeowners, we transform interiors into beautiful and harmonious environments.</p>
            <p>Whether it's a cozy home, a boutique hotel, or an office space, our interior designers take into account factors like layout, color schemes, furniture, lighting, and decor to create spaces that reflect the client's vision and lifestyle. Our aim is to enhance both the functionality and aesthetic appeal of the space, making it comfortable, inviting, and personalized.</p>
        </div>
        <!--<footer style="margin-top: 50px; padding-top: 20px; border-top: 1px solid #333; text-align: center;">
            <div style="display: flex; justify-content: space-between; margin-bottom: 20px;">
                
            </div>
            <div style="color: #666;">
            CHINGU DESIGNS. Your trusted company.
            </div>
        </footer>-->
    </div>
    
    <script>
        const images = document.querySelectorAll('.image img');
        let currentIndex = 0;

        function showNextImage() {
            images[currentIndex].classList.remove('active');
            currentIndex = (currentIndex + 1) % images.length;
            images[currentIndex].classList.add('active');
        }

        // Show the first image immediately
        images[0].classList.add('active');

        // Change image every 5 seconds
        setInterval(showNextImage, 2000);
    </script>
    <footer style="margin-top: 50px; padding-top: 20px; border-top: 1px solid #333; text-align: center;">
            <div style="display: flex; justify-content: space-between; margin-bottom: 20px;">
                
            </div>
            <div style="color: #666;">
            CHINGU DESIGNS. Your trusted company.
            </div>
        </footer>
</body>
</html>