<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MV- LED's-ABOUT US</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/contact.css">
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Zilla+Slab:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/contact.css">
    <link rel="stylesheet" href="/css/aboutus.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        body {
            overflow-x: hidden;
        }

        .mEdits {
            color: black;
            /* Default text color */
            text-decoration: none;
            /* Remove underline */
            font-weight: bold;
            /* Bold text */
            padding: 4px 1px;
            transition: color 0.3s, background-color 0.3s, border 0.3s;
            /* Smooth transition effects */
        }

        .mEdits:hover {
            font-weight: 700;
            background: linear-gradient(180deg, #275FAB 0%, #5ABDDE 100%);
            -webkit-background-clip: text;
            background-clip: text;
            margin-top: 8px;
            color: transparent;


        }

        .containerss {
            max-width: 1200px;
        }

        img {
            border-radius: 15px;
            max-height: 500px;
            object-fit: cover;
        }

        .mForm-title {
            color: #007bff;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .mForm-description {
            color: #6c757d;
        }

        .mForm-group label.mForm-label {
            font-weight: bold;
        }

        .inptBtn {
            background-color: #007bff;
            border: none;
            width: 50%;
            color: white;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .inptBtn:hover {
            background-color: #0056b3;
        }

        .text-right {
            text-align: right;
        }

        @media (max-width: 767px) {
            .container {
                padding: 0 15px;

            }

          

            .col-md-6 {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .text-right {
                text-align: center;
            }

            .inptBtn {
                width: 100%;
            }
        }

        .jdd {
            border-top: none;
            border-right: none;
            border-left: none;


        }

        .mContact {
            font-size: 3.4rem;
            background: linear-gradient(180deg, #0551D5 0%, #27A8F0 100%);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            text-align: center;
        }
    </style>

</head>

<body>
 
        @include('nav')
  
    <style>
        body {
            margin: 0px;
        }

        #loaderContainer {
            position: fixed;
            /* Change from relative to fixed */
            left: 0;
            top: 0;
            width: 100%;
            height: 100vh;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-template-rows: 1fr 120px 1fr;
            background-color: #1d3f4a;
            z-index: 9999;
            /* Ensure it's above all other elements */
            overflow: hidden;
            /* Prevent scrolling */
        }

        #loaderBalls {
            grid-row: 2 / 3;
            grid-column: 2 / 3;
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: 60px 60px;
        }

        #loaderUp,
        #loaderDown {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            place-items: center;
        }

        #loaderUp .loaderBall {
            animation: loaderWave 2s ease-in-out infinite;
            background-color: #eb3ee5;
        }

        #loaderDown .loaderBall {
            animation: loaderReverseWave 2s ease-in-out infinite;
            background-color: #17e8a8;
        }

        .loaderBall {
            border-radius: 50%;
            width: 40px;
            height: 40px;
            background-color: #000;
        }

        #loaderUp .loaderBall:nth-child(2) {
            animation-delay: -0.25s;
            background-color: #c53ced;
        }

        #loaderUp .loaderBall:nth-child(3) {
            animation-delay: -0.5s;
            background-color: #8f39db;
        }

        #loaderUp .loaderBall:nth-child(4) {
            animation-delay: -0.75s;
            background-color: #7223cb;
        }

        #loaderUp .loaderBall:nth-child(5) {
            animation-delay: -1s;
            background-color: #4427d8;
        }

        #loaderDown .loaderBall:nth-child(2) {
            animation-delay: -0.25s;
            background-color: #1fddc0;
        }

        #loaderDown .loaderBall:nth-child(3) {
            animation-delay: -0.5s;
            background-color: #2fd3d9;
        }

        #loaderDown .loaderBall:nth-child(4) {
            animation-delay: -0.75s;
            background-color: #27b4ea;
        }

        #loaderDown .loaderBall:nth-child(5) {
            animation-delay: -1s;
            background-color: #2887e2;
        }

        @keyframes loaderWave {

            0%,
            100% {
                transform: translateY(100px);
            }

            50% {
                transform: translateY(-80px);
            }
        }

        @keyframes loaderReverseWave {

            0%,
            100% {
                transform: translateY(-100px);
            }

            50% {
                transform: translateY(80px);
            }
        }

        .rangerswidth {
            display: flex !important;
            justify-content: center;
            align-items: center;
        }
        .myboxtext{
            font-size:18px !important;
            color:000000 !important
        }
        .myboxheading{
            color:linear-gradient(180deg, #275FAB 0%, #5ABDDE 100%) !important;
            font-size:linear-gradient(180deg, #275FAB 0%, #5ABDDE 100%) !important;
            font-weight:bold
        }
    </style>
    <script>
        window.addEventListener("load", function () {
            document.getElementById("loaderContainer").style.display = "none";
        });
    </script>

    <section id="hero-section">
        <div id="hero-sectionpart1" data-aos="slide-right" data-aos-duration="1000">
            <p  class="myboxheading">ABOUT US</p>
            <br>
            <br>
            <h1>Our vision is to make work inspiring and fulfilling</h1>
            <br>
            <br>
            <p>IlluminateTech offers cutting-edge LED lighting solutions that are designed to enhance productivity and
                create a comfortable work environment. RadiantGlow provides innovative LED lighting products that can
                transform any space into a well-lit and energy-efficient area.</p>
            <br>
            <br>
        </div>
        <div id="hero-sectionpart2" data-aos="slide-left" data-aos-duration="1000">
            <img src="/images/Aboutus-section1.png" alt="" srcset="">
        </div>
        <br><br>


    </section>
<style>
    #card-content{
        display: flex;
        height: 100%;

        flex-direction: column;
align-items: start;

        
    }
</style>
    <section id="card-section" data-aos="flip-down" data-aos-duration="1000" data-aos-delay="500">

        <div id="card">
            <img src="/images/card-img.png" alt="" srcset="">
            <div id="card-content">
                <h1 style="text-align: left;">Company’s Mission</h1>
                <br><br>
                <p>A group of bright, disciplined, and dynamic members forging a space in this dynam- ic sector, taking
                    problems by the horns, striving for perfection and determination in our eyes.</p>
            </div>
        </div>
    </section>
    <section id="card-section" data-aos="flip-up" data-aos-duration="1000">

        <div id="card">

            <div id="card-content">
                <h1 style="text-align: left;">Company’s Vision</h1>
                <br><br>
                <p>To offer our customer appropriate electrical solutions in the form of products, proj- ects and
                    services of superior value in expertise and experience.</p>
            </div>
            <img src="/images/vision.png" alt="" srcset="">
        </div>
    </section>
   @include('contactus')





    <br>
    <br>
    <footer data-aos="fade-right" data-aos-duration="1000">
        <div id="section1footer">
            <img src="/images/logo.png" height="100px" alt="" srcset="">
            <h1 style="margin-top: 30px;">Motvic Consumable <br> Electrical PVT ltd</h1>
            <p style="margin-top: 30px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero
                et velit interdum, ac
                aliquet odio mattis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et
                velit interdum, a</p>

        </div>
        <style>
            a {
                text-decoration: none;
                /* Removes the underline */
                color: inherit;
                /* Inherits the color from the parent element */
            }
        </style>
        <div id="section2footer">
            <ul>
                <a href="/home.html">

                    <li>Home</li>
                </a>
                <a href="/categories.html">

                    <li>Categories</li>
                </a>
                <a href="/aboutus.html">

                    <li>AboutUs</li>
                </a><a href="/contact.html">

                    <li>Contact Us</li>
                </a>
            </ul>
            <div id="phone-footer">
                <img src="/images/phone.png" alt="" id="phone-img" srcset="" height="40px">
                <label for="" style="font-size: 1.4rem; color: black;">
                    +91 99203 12344
                </label>
            </div>

        </div>
        <div id="section3footer">
            <div id="socialmedia">
                <h5>Social Links</h5>
                <div id="footersocial">

                    <a href="https://www.linkedin.com/company/motvic-consumable-electrical-p-ltd">
                        <img src="/images/linkdein.png" class="social" height="60px" alt="">
                    </a>
                    <!-- <img src="images/facebook.png" class="social" height="60px" alt=""> -->
                    <a href="https://www.instagram.com/motvic_consumable/?igsh=MWJicWc2ZGoyZ280MA%3D%3D"> <img
                            src="images/instagram.png" class="social" height="60px" alt="">
                    </a>
                </div>
            </div>
            <div id="footermail">
                <img src="/images/mail.png" height="40px" alt="">
                <h4>sales@mvconsumable.com <br>
                    vijay@motvic.co
                </h4>
            </div>
        </div>
    </footer>
    <div id="second-footertitle">
        <h5>Designed, Ideated & Developed with ❤️ by Digilligent</h5>
        <h5 style="color: grey;">©️ Motvic Consumables Electrical PVT LTD</h5>
        <h5 style="color: grey;">Terms and conditions</h5>

    </div>
    <script src="/javascript/index.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init(
            {

            }
        );
    </script>
</body>
</body>

</html>