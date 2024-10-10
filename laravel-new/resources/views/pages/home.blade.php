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
            background-image: url('/images/Niguel_Newberry_LV_0333-Large.jpeg');
            background-size: cover;
            background-position: center;
            z-index: -1;
            animation: backgroundTransition 10s infinite alternate;
        }
        
        @keyframes backgroundTransition {
            0% {
                background-image: url('/images/Niguel_Newberry_LV_0333-Large.jpeg');
                background-position: 0% 0%;
            }
            33% {
                background-image: url('/images/Architectural-materials-such-as-wood-steel-and-concrete-are-carefully-selected-to-complement-the-overall-design-aesthetic.jpg');
                background-position: 100% 0%;
            }
            66% {
                background-image: url('/images/open-concept-kitchen-dining-room-and-living-room-with-floor-plans.webp');
                background-position: 0% 100%;
            }
            100% {
                background-image: url('/images/Architectural Design Elements of Modern American Homes _ FH_files/Concrete-in-design-adds-a-raw-and-industrial-aesthetic-to-house-architecture-creating-a-sleek-and-minimalist-look.jpg');
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
            position: left;
            display: inline-block;
            background-color: rgba(255, 255, 255, 0.7); /* Light background to increase contrast */
            padding: 20px; /* Adds padding around text */
            border-radius: 5px; /* Optional: rounded corners */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Optional: shadow for better visibility */
            color: black; /* Text color */
        }
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
    </style>
</head>
<body>
    <div class="background"></div>
    <div class="content">
        <a href="{{ route('dashboard') }}" class="button-link">MORE ABOUT US</a>
        <h1>CHINGU DESIGNS</h1>
        <h1>
          <span>
                B
            </span>eauty lies<br>in details
        </h1>
    </div>
</body>
</html>
