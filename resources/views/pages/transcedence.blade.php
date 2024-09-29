<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Values</title>
    <style>
        /* Existing styles */
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
            transition: all 5s ease;
        }
        .header:hover {
            background-color: rgba(0, 0, 0, 1);
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
            font-size: 28px;
            font-weight: bold;
            letter-spacing: 2px;
            color: #ff1493;
            text-transform: uppercase;
        }

        /* New styles for animations */
        .image-container {
            flex: 1;
            overflow: hidden;
            transition: transform 0.5s ease;
        }
        .image-container:hover {
            transform: scale(1.05);
        }
        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 5s ease;
        }
        .image-container:hover img {
            transform: scale(1.1);
        }
        .value-item {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 10s forwards;
        }
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body style="margin: 0; padding: 0; font-family: Arial, sans-serif;">
    <div class="header">
        <div class="logo">CHINGU</div>
        <nav class="nav">
            <a href="{{ route('dashboard') }}">Home</a>
            <a href="{{ route('vision')}}">Vision</a>
            <a href="{{ route('aboutUs') }}">About Us</a>
            <a href="{{ route('transcedence') }}">Portfolio</a>
            <a href="{{ route('works') }}">Works</a>
        </nav>
    </div>
    <br><br><br>
    <div style="display: flex; background-color: #f0f0f0;">
        <div style="flex: 1; padding: 20px; background-color: #333; color: white;">
            <h1 style="font-size: 36px; margin-bottom: 20px;">Our Values</h1>
            <div class="value-item" style="background-color: white; border-radius: 10px; padding: 15px; margin-bottom: 15px; color: black;">
                <div style="display: flex; align-items: center;">
                    <div style="background-color: #eee; border-radius: 5px; padding: 5px; margin-right: 10px;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="3" y="3" width="18" height="18" rx="2" stroke="black" stroke-width="2"/>
                            <circle cx="12" cy="10" r="3" stroke="black" stroke-width="2"/>
                            <path d="M6 20C6 16.6863 8.68629 14 12 14C15.3137 14 18 16.6863 18 20" stroke="black" stroke-width="2"/>
                        </svg>
                    </div>
                    <h2 style="margin: 0; font-size: 18px;">Integrity</h2>
                </div>
                <p style="margin-top: 10px; font-size: 14px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ut convallis nisi, at consequat turpis. In bibendum efficitur imperdiet. Fusce eu vestibulum augue, ac iaculis quam.</p>
            </div>
            <div class="value-item" style="background-color: white; border-radius: 10px; padding: 15px; margin-bottom: 15px; color: black; animation-delay: 1s;">
                <div style="display: flex; align-items: center;">
                    <div style="background-color: #eee; border-radius: 5px; padding: 5px; margin-right: 10px;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="3" y="3" width="18" height="18" rx="2" stroke="black" stroke-width="2"/>
                            <path d="M7 12L10 15L17 8" stroke="black" stroke-width="2"/>
                        </svg>
                    </div>
                    <h2 style="margin: 0; font-size: 18px;">Innovation</h2>
                </div>
                <p style="margin-top: 10px; font-size: 14px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ut convallis nisi, at consequat turpis. In bibendum efficitur imperdiet. Fusce eu vestibulum augue, ac iaculis quam.</p>
            </div>
            <div class="value-item" style="background-color: white; border-radius: 10px; padding: 15px; color: black; animation-delay: 2s;">
                <div style="display: flex; align-items: center;">
                    <div style="background-color: #eee; border-radius: 5px; padding: 5px; margin-right: 10px;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12" cy="12" r="9" stroke="black" stroke-width="2"/>
                            <path d="M12 7V12L15 15" stroke="black" stroke-width="2"/>
                        </svg>
                    </div>
                    <h2 style="margin: 0; font-size: 18px;">Customer Satisfaction</h2>
                </div>
                <p style="margin-top: 10px; font-size: 14px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ut convallis nisi, at consequat turpis. In bibendum efficitur imperdiet. Fusce eu vestibulum augue, ac iaculis quam.</p>
            </div>
        </div>
        <div class="image-container">
            <img src="/images/houseDesign.jpg" alt="Team photo">
        </div>
    </div>
</body>
</html>