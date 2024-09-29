<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHINGU - Increase your Business with us!</title>
    <style>
        /* General Styles */
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #000;
            color: #fff;
        }

        /* Header Styles */
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

        /* Main Content Styles */
        .main-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 50px;
        }
        .text-content {
            flex: 1;
        }
        h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }
        p {
            font-size: 18px;
            margin-bottom: 30px;
        }
        .contact-btn {
            background-color: #ff1493;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 25px;
            font-size: 18px;
            cursor: pointer;
        }
        .image-container {
            flex: 1;
            position: relative;
            width: 400px;
            height: 400px;
            overflow: hidden;
            border-radius: 50%;
            border: 2px solid #ff1493;
        }
        .carousel-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }
        .carousel-image.active {
            opacity: 1;
        }

        /* Animation Styles */
        @keyframes headingAnimation {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }
            50% {
                opacity: 0.5;
                transform: translateY(10px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        h1, h2, h3, h4, h5, h6 {
            animation: headingAnimation 4s ease-in-out;
        }

        /* About Company Section Styles */
        .about-company {
            max-width: 1200px;
            margin: 20px auto;
            background-color: #f5f5f5;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            display: flex;
            color: #333;
        }
        .about-content {
            flex: 1;
            padding: 40px;
            position: relative;
        }
        .about-image {
            flex: 1;
            position: relative;
        }
        .about-image-container {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #f5f5f5;
            border-top-left-radius: 300px;
            overflow: hidden;
        }
        .about-image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Footer Styles */
        footer {
            margin-top: 50px;
            padding-top: 20px;
            border-top: 1px solid #333;
            text-align: center;
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .logo {
            animation: colorChange 5s infinite;
        }

        .main-content h1 {
            animation: fadeInUp 1s ease-out;
        }

        .main-content p {
            animation: slideInLeft 1s ease-out 0.5s both;
        }


        /* Animated navigation links */
        .nav a {
            position: relative;
            overflow: hidden;
        }
           
        /* Adjust main content to be above the background */
        .main-content, .about-company, footer {
            position: relative;
            z-index: 1;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #40E0D0;
        }
        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
        }
        .profile {
            position: relative;
            width: 300px;
            height: 300px;
            margin: 50px auto;
        }
        .profile-image {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            overflow: hidden;
            background-color: #e0e0e0;
            position: absolute;
            top: 50px;
            left: 50px;
        }
        .profile-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .rotating-text {
            position: absolute;
            width: 100%;
            height: 100%;
            animation: rotate 10s linear infinite;
        }
        .rotating-text span {
            position: absolute;
            left: 50%;
            font-size: 14px;
            transform-origin: 0 150px;
            color: white;
        }
        .rotating-text span:nth-child(1) { transform: rotate(0deg) translateX(-50%); }
        .rotating-text span:nth-child(2) { transform: rotate(120deg) translateX(-50%); }
        .rotating-text span:nth-child(3) { transform: rotate(240deg) translateX(-50%); }
        @keyframes rotate {
            100% { transform: rotate(360deg); }
        }
        .tags {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
            margin-bottom: 20px;
        }
        .tag {
            background-color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 5px;
        }
        .tag img {
            width: 20px;
            height: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        p {
            text-align: center;
            color: #666;
            max-width: 600px;
            margin: 0 auto;
        }
        
        .skill-item:hover {
            transform: scale(1.1);
            background-color: #d0e7ff;
        }
        .contact-btn:hover {
            background-color: #e67e22;
        }

        /* Adjust body background */
        body {
            background: linear-gradient(45deg, #1a1a1a, #2a2a2a);
        }
        .rotating-text span {
            position: absolute;
            left: 50%;
            font-size: 16px;
            font-weight: bold;
            transform-origin: 0 150px;
            color: #FF69B4;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        }
        .rotating-text span:nth-child(1) { transform: rotate(0deg) translateX(-50%); }
        .rotating-text span:nth-child(2) { transform: rotate(120deg) translateX(-50%); }
        .rotating-text span:nth-child(3) { transform: rotate(240deg) translateX(-50%); }
        @keyframes rotate {
            100% { transform: rotate(360deg); }
        }
        .tag:hover {
            transform: translateY(-3px);
        }
        .tag img {
            width: 24px;
            height: 24px;
        }
        .nav a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #ff1493;
            transform: translateX(-100%);
            transition: transform 0.3s ease;
        }

        .nav a:hover::after {
            transform: translateX(0);
        }

    </style>
</head>
<body>
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
    <div class="container">
        <div class="profile">
            <div class="rotating-text">
                <span>UI/UX</span>
                <span>Illustrations</span>
                <span>Photography</span>
            </div>
            <div class="profile-image">
                <img src="/img/home-decor-2.jpg" alt="Product Designer">
            </div>
        </div>
        <div class="tags">
            <div class="tag">
                <img src="/images/design icon.jpeg" alt="Design icon">
                <!-- Assuming the green icon represents a hobby or skill -->
            <!--</div>
            <div class="tag">
                <img src="/images/prototype.jpeg" alt="Prototyping icon">
                Hi there!
            </div>
            <div class="tag">
                <img src="/images/design icon.jpeg" alt="Req icon">
                Request a Quote
            </div>
        </div>
        <h1>A product designer with passion to web</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.</p>
    </div>
</body>
</html>-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHINGU - Increase your Business with us!</title>
    <style>
        /* General Styles */
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color:grey;
            color: #fff;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
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
        .nav a {
            position: relative;
            overflow: hidden;
        }
           

        /* Image Container in the middle */
        .profile {
            position: relative;
            width: 400px;
            height: 400px;
            margin: 0 auto;
            background-color: gainsboro;
            border-radius: 50%;
            border: 5px solid #ff1493;
            overflow: hidden;
        }
        .nav a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #ff1493;
            transform: translateX(-100%);
            transition: transform 0.3s ease;
        }

        .nav a:hover::after {
            transform: translateX(0);
        }
        @keyframes colorChange {
    0% {
        color: #ff1493; /* pink */
    }
    25% {
        color: #00ff00; /* green */
    }
    50% {
        color: #00ffff; /* cyan */
    }
    75% {
        color: #ff4500; /* orange */
    }
    100% {
        color: #ff1493; /* pink */
    }
}

.logo {
    font-size: 28px;
    font-weight: bold;
    letter-spacing: 2px;
    text-transform: uppercase;
    animation: colorChange 5s infinite; /* Animation over 5 seconds */
}
         /* General Styles */


/* General Styles */
body, html {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #000;
    color: #fff;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Image Container in the middle */
.profile {
    position: relative;
    width: 400px;
    height: 400px;
    background-color: black;
    border-radius: 50%;
    border: 5px solid #ff1493;
    overflow: hidden;
}

/* Profile Image */
.profile-image {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    overflow: hidden;
}

.profile-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Rotating Text Animation */


/* General Styles */
body, html {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #000;
    color: #fff;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Image Container in the middle */
.profile {
    position: relative;
    width: 400px;
    height: 400px;
    background-color: black;
    border-radius: 50%;
    border: 5px solid #ff1493;
    overflow: hidden;
}

/* Profile Image */
.profile-image {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    overflow: hidden;
}

.profile-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Rotating Text Animation */
.rotating-text {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    overflow: hidden;
}

.rotating-text span {
    position: absolute;
    font-size: 40px; /* Increased font size */
    font-weight: bold; /* Bold text */
    color: #ff1493; /* Bright color for contrast */
    text-shadow: 2px 2px 5px rgba(255, 20, 147, 0.7); /* Adding shadow for better visibility */
    animation: textInOut 3s ease-in-out infinite;
    transform-origin: center center;
    white-space: nowrap; /* Prevent text wrapping */
}

/* Rotating text around the container */
.rotating-text span:nth-child(1) {
    transform: rotate(0deg) translateX(150px);
    animation-delay: 0s;
}
.rotating-text span:nth-child(2) {
    transform: rotate(120deg) translateX(150px);
    animation-delay: 1s;
}
.rotating-text span:nth-child(3) {
    transform: rotate(240deg) translateX(150px);
    animation-delay: 2s;
}

@keyframes rotate {
    100% {
        transform: rotate(360deg);
    }
}

/* Animation for text moving in and out of the container */
@keyframes textInOut {
    0% {
        opacity: 0;
        transform: scale(0.5) translateY(0);
    }
    50% {
        opacity: 1;
        transform: scale(1) translateY(-50px);
    }
    100% {
        opacity: 0;
        transform: scale(0.5) translateY(0);
    }
}


    </style>
</head>
<body>
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

    <div class="profile">
        <div class="profile-image">
            <img src="/images/chinguuuu.jpg" alt="logo">
        </div>
        <div class="rotating-text">
            <span>UI/UX</span>
            <span>Illustrations</span>
            <span>Photography</span>
        </div>
    </div>

</body>
</html>


<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cute Product Designer Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #FFE5E5;
            color: #4A4A4A;
        }
        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 40px 20px;
        }
        .profile {
            position: relative;
            width: 300px;
            height: 300px;
            margin: 50px auto;
        }
        .profile-image {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            overflow: hidden;
            background-color: #FFF0F5;
            position: absolute;
            top: 50px;
            left: 50px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            border: 8px solid #FFF;
        }
        .profile-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .rotating-text {
            position: absolute;
            width: 100%;
            height: 100%;
            animation: rotate 15s linear infinite;
        }
        .rotating-text span {
            position: absolute;
            left: 50%;
            font-size: 16px;
            font-weight: bold;
            transform-origin: 0 150px;
            color: #FF69B4;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        }
        .rotating-text span:nth-child(1) { transform: rotate(0deg) translateX(-50%); }
        .rotating-text span:nth-child(2) { transform: rotate(120deg) translateX(-50%); }
        .rotating-text span:nth-child(3) { transform: rotate(240deg) translateX(-50%); }
        @keyframes rotate {
            100% { transform: rotate(360deg); }
        }
        .tags {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
            margin-bottom: 30px;
        }
        .tag {
            background-color: #FFF;
            padding: 8px 20px;
            border-radius: 25px;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
            transition: transform 0.2s ease-in-out;
        }
        .tag:hover {
            transform: translateY(-3px);
        }
        .tag img {
            width: 24px;
            height: 24px;
        }
        h1 {
            text-align: center;
            color: #FF69B4;
            font-size: 2.5em;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
        }
        p {
            text-align: center;
            color: #4A4A4A;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
            font-size: 1.1em;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="profile">
            <div class="rotating-text">
                <span>UI/UX</span>
                <span>Illustrations</span>
                <span>Photography</span>
            </div>
            <div class="profile-image">
                <img src="/api/placeholder/200/200" alt="Product Designer">
            </div>
        </div>
        <div class="tags">
            <div class="tag">
                <img src="/api/placeholder/24/24" alt="Snowboarding icon">
                Snowboarding
            </div>
            <div class="tag">
                <img src="/api/placeholder/24/24" alt="Hi there! icon">
                Hi there!
            </div>
            <div class="tag">
                <img src="/api/placeholder/24/24" alt="Request a Quote icon">
                Request a Quote
            </div>
        </div>
        <h1>A product designer with passion for web</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.</p>
    </div>
</body>
</html>

