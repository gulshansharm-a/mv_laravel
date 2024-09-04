<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            overflow-x: hidden; /* Prevent horizontal overflow */
            transition: overflow 0.3s ease;
        }

        .navbar {
            margin-top: 0;
            display: flex;
            height: 90px;
            align-items: center;
            justify-content: space-between;
            padding: 0 5%;
            background-color: white;
            position: relative;
        }

        #container-logo {
            display: flex;
            align-items: center;
        }

        #container-logo img {
            height: 60px;
            width: 60px;
            margin-right: 20px;
        }

        #container-navigation {
            display: flex;
            align-items: center;
        }

        #container-navigation ul {
            display: flex;
            gap: 56px;
            font-size: 20px;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        #container-navigation ul li a {
            text-decoration: none;
        }
        #gradient-text {
    background: linear-gradient(180deg, #275FAB 0%, #5ABDDE 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-size: 20px;
    font-weight: bold;
    margin: 0;
}


        #container-navigation ul li a:hover {
            background: linear-gradient(180deg, #275FAB 0%, #5ABDDE 100%);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            text-decoration: none;
        }

        #div-contact {
            background: linear-gradient(180deg, #275FAB 0%, #5ABDDE 100%);
            padding:15px 30px;
            margin-right: 30px;
            border-radius: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        #div-contact h5 {
            margin: 0;
        }

        #div-contact a {
            font-size: 15px;
            color: white;
            text-decoration: none;
        }

        /* Hamburger Menu Styles */
        .hamburger-menu {
            display: none;
            align-items: center;
            cursor: pointer;
            z-index: 100;
        }

        .hamburger-icon {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 20px;
            width: 30px;
            transition: all 0.3s ease;
        }

        .hamburger-icon span {
            display: block;
            height: 3px;
            background-color: #1a73e8;
            border-radius: 2px;
            transition: all 0.3s ease;
        }

        /* Animation for Hamburger Menu */
        .hamburger-menu.active .hamburger-icon span:nth-child(1) {
            transform: translateY(8px) rotate(45deg);
        }

        .hamburger-menu.active .hamburger-icon span:nth-child(2) {
            opacity: 0;
        }

        .hamburger-menu.active .hamburger-icon span:nth-child(3) {
            transform: translateY(-8px) rotate(-45deg);
        }

        /* Mobile Menu Hidden by Default */
        .mobile-menu {
            display: none;
            flex-direction: column;
            background: linear-gradient(180deg, #275FAB 0%, #5ABDDE 100%);
            padding: 10px 20px;
            box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.1);
            position: absolute;
            top: 90px;
            width: 100%;
            left: 0;
            opacity: 0;
            transform: translateY(-20px);
            transition: all 0.3s ease;
            z-index: 100;
        }

        .mobile-menu.active {
            display: flex;
            transform: translateY(0);
            opacity: 1;
        }

        .mobile-menu ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        .mobile-menu ul li {
            margin-bottom: 10px;
        }

        .mobile-menu ul li a {
            font-size: 18px;
            color: white;
            text-decoration: none;
        }

        @media (max-width: 850px) {
            #container-navigation, #div-contact {
                display: none;
            }

            .hamburger-menu {
                display: flex;
            }

            #gradient-text {
                font-size: 0.7rem;
            }

            #container-logo img {
                height: 40px;
                width: 40px;
            }
            #gradient-text {
    background: linear-gradient(180deg, #275FAB 0%, #5ABDDE 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-size: 15px !important;
    font-weight: bold;
    margin: 0;
}
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div id="container-logo">
            <a href="/">
                <img src="/images/logo.png" id="logo" alt="Logo">
            </a>
            <p id="gradient-text"   >Motvic Consumable <br> Electrical PVT ltd</p>
        </div>
        <div id="container-navigation">
            <ul>
                <li><a href="/aboutus" class="mEdits">About Us</a></li>
                <li><a href="/categories" class="mEdits">Categories</a></li>
            </ul>
        </div>
        <div id="div-contact">
            <h5><a href="/contactus" class="button-contactus11">Contact Us</a></h5>
        </div>
        <div class="hamburger-menu" onclick="toggleMenu()">
            <div class="hamburger-icon">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <div class="mobile-menu" id="mobileMenu">
        <ul>
            <li><a href="/aboutus" class="mEdits">About Us</a></li>
            <li><a href="/categories" class="mEdits">Categories</a></li>
            <li><a href="/contact" class="mEdits">Contact Us</a></li>
        </ul>
    </div>

    <script>
        function toggleMenu() {
            const mobileMenu = document.getElementById('mobileMenu');
            const body = document.body;
            
            // Toggle the active class for mobile menu
            mobileMenu.classList.toggle('active');
            
            // Toggle scroll lock
            if (mobileMenu.classList.contains('active')) {
                body.style.overflow = 'hidden'; // Lock scroll
            } else {
                body.style.overflow = ''; // Restore scroll
            }
            
            // Toggle the hamburger menu active state
            document.querySelector('.hamburger-menu').classList.toggle('active');
        }
    </script>
</body>
</html>
