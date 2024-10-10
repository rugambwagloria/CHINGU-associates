<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interior Design - Beauty lies in details</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: 'Roboto', sans-serif;
        }
        .background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('/images/chingu.building.jpg');
            background-size: cover;
            background-position: center;
            z-index: -1;
            animation: backgroundTransition 10s infinite alternate;
        }
        
        @keyframes backgroundTransition {
            
            33% {
                background-image: url('/images/billboard.jpg');
                background-position: 100% 0%;
            }
            66% {
                background-image: url('/images/WhatsApp Image 2024-09-04 at 01.38.04_987e0316.jpg');
                background-position: 0% 100%;
            }
            
        }
        
        .content {
            position: relative;
            z-index: 1;
            color: orangered;
            padding: 20px;
            height: 40vh;
            display: flex;
            flex-direction: column;
            justify-content: left;
            text-align: left; /* Center align text for better visibility */
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
        h1 {
    font-family: 'Playfair Display', serif;
    font-size: 4em;
    margin-bottom: 0;
    position: relative;
    display: inline-block;
    padding: 20px; /* Add padding around text if needed */
    color: black; /* Text color */
    /* Remove background-color and other related properties */
    /* background-color: rgba(255, 255, 255, 0.7); */
    /* border-radius: 5px; */
    /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); */
}

/* Optionally, add a text shadow for better visibility */
h1 span {
    position: relative;
    display: inline-block;
}

h1 span::before {
    content: '';
    position: absolute;
    top: -10px;
    left: -10px;
    width: 60px;
    height: 60px;
    background-color: orange;
    z-index: -1;
    border: 2px solid #8a2be2;
}

/* Optional text shadow for better readability */
h1 {
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
}

        
    </style>
</head>
<body>
    <div class="background"></div>
    <div class="content">
        <a href="{{ route('dashboard') }}" class="button-link">MORE ABOUT US</a>
    
    </div>
</body>
</html>
