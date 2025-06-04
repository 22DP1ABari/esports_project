<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gameglory</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: #1a1a2e;
            color: #fff;
            text-align: center;
        }

        nav {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            background: #0f3460;
        }

        .logo {
    height: 80px; 
    width: auto;
    overflow: hidden; 
    display: flex;
    align-items: center;
    justify-content: center;
}

.logo img {
    height: 100%; 
    width: auto;
    object-fit: contain;
}



        .nav-links {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        .nav-links li a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .nav-links li a:hover {
            color: #e94560;
        }

        .signup-button {
            background: #e94560;
            padding: 8px 16px;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        .signup-button:hover {
            background: #ff6b81;
        }

        .hero {
            padding: 100px 20px;
            position: relative;
            height: auto; 
            overflow: hidden; 
        }

        .hero img {
            width: 100%; 
            height: 100%; 
            object-fit: cover; 
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1; 
        }

        .hero::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); 
            z-index: -1; 
        }

        .hero-content {
            position: relative;
            z-index: 1;
            color: white;
            text-align: center;
            padding: 20px;
            background: rgba(0, 0, 0, 0.5); 
            border-radius: 10px;
            display: inline-block;
            margin-bottom: 30px;
        }


        .cta-button {
            background: #e94560;
            padding: 14px 28px; 
            border-radius: 5px;
            text-decoration: none;
            color: #fff;
            transition: background 0.3s ease;
            font-size: 18px; 
            margin-top: 30px; 
            display: inline-block;
        }

        .cta-button:hover {
            background: #ff6b81;
        }

        .cta-button:first-of-type {
            margin-top: 20px;
        }

        
        .feature-section {
            display: flex;
            justify-content: space-around;
            gap: 30px;
            margin-top: 50px;
        }

        .feature-card {
            background-color: rgba(22, 19, 62, 0.7); 
            padding: 20px;
            border-radius: 10px;
            width: 300px;
            transition: transform 0.3s ease;
            color: #fff;
            text-align: left;
        }

        .feature-card:hover {
            transform: scale(1.05);
        }

        footer {
            background: #0f3460;
            color: #fff;
            padding: 20px;
            text-align: center;
        }


        .about-container {
    display: flex;
    justify-content: center;
    gap: 30px;
    flex-wrap: wrap;
    margin-top: 30px;
}

.about-card {
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    padding: 20px;
    width: 280px;
    border-radius: 15px;
    backdrop-filter: blur(8px);
    box-shadow: 0 0 15px rgba(233, 69, 96, 0.3);
    transition: transform 0.4s ease, box-shadow 0.4s ease;
}

.about-card:hover {
    transform: translateY(-10px) scale(1.05);
    box-shadow: 0 0 20px rgba(255, 107, 129, 0.6);
}

.about-card h3 {
    color: #e94560;
    font-size: 20px;
    margin-bottom: 10px;
}

.about-card p {
    color: #ccc;
    font-size: 16px;
}





.fade-in {
    opacity: 0;
    transform: translateY(30px);
    animation: fadeIn 1.2s ease forwards;
}


.fade-in:nth-of-type(1) {
    animation-delay: 0.2s;
}
.fade-in:nth-of-type(2) {
    animation-delay: 0.5s;
}
.fade-in:nth-of-type(3) {
    animation-delay: 0.8s;
}
.fade-in:nth-of-type(4) {
    animation-delay: 1.1s;
}


@keyframes fadeIn {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}


    </style>
</head>
<body>
    <header>
        <nav>
            <div class="logo"><img src="{{ asset('images/gameglory_logo.jpg') }}" alt="GameGlory"></div>
            <ul class="nav-links">
                <li><a href="#about">About</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="#contact">Contact</a></li>
                @guest
                    <a href="{{ route('register') }}" class="signup-button">Sign Up</a>
                @endguest

                @auth
                <a href="{{ route('tournaments.my') }}" class="signup-button">My Profile</a>
                    </a>
                @endauth
            </ul>
        </nav>
    </header>



    <section class="hero fade-in">
        <div class="hero-content">
            <h1>Welcome to Gameglory</h1>
            <p>The ultimate platform for creating, organizing, and joining esports tournaments.</p>
        </div>
        <img src="{{ asset('images/esports.jpg') }}" alt="Esports Tournament Image">
    </section>

    <a href="{{ route('tournaments.index') }}" class="cta-button">View All Tournaments</a>

    @auth
        <a href="{{ route('tournaments.create') }}" class="cta-button">Create Tournament</a>
    @endauth





   <section id="about" class="section fade-in"">
    <h2>About Us</h2>
    <div class="about-container">
        <div class="about-card">
            <h3>🌍 Our Mission</h3>
            <p>We connect gamers from around the world, creating unforgettable esports experiences. </p>
        </div>
        <div class="about-card">
            <h3>🚀 Our Goal</h3>
            <p>To make esports tournaments accessible, comfortable and enjoyable. </p>
        </div>
        <div class="about-card">
            <h3>🧡 Community</h3>
            <p>A friendly and supportive community of game lovers. Beginners, amateurs, professionals - everyone is welcome here!</p>
        </div>
    </div>
</section>


    <section id="features" class="section fade-in">
        <h2>Features</h2>
        <div class="feature-section">
            <div class="feature-card">
                <h3>Create & Manage Tournaments</h3>
                <p>Host your own esports tournaments with customizable settings.</p>
            </div>
            <div class="feature-card">
                <h3>Find & Join Tournaments</h3>
                <p>Browse a wide selection of tournaments and sign up easily.</p>
            </div>
            <div class="feature-card">
                <h3>Team & Player Management</h3>
                <p>Keep track of your team and individual player stats effortlessly.</p>
            </div>
        </div>
    </section>

    <footer>
        <p>© 2025. All rights reserved.</p>
    </footer>
</body>
</html>
