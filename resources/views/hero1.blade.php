<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hero Section</title>
    <style>
        /* Base styles for the hero section */
        #hero-back {
            background: url('/images/home-hero.png') center/cover no-repeat;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
            padding: 20px; /* Add padding to ensure content isn't too close to the edges on smaller screens */
            position: relative;
        }

        /* Pseudo-element for overlay */
        #hero-back::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('/images/home-grid.png') bottom/contain no-repeat;
            z-index: -1;
        }

        /* Styling for the heading */
        .hero-heading {
            font-size: 2.5rem; /* Default font size for larger screens */
            margin-bottom: 20px; /* Space below the heading */
            color: white;
        }

        /* Styling for the paragraph */
        .hero-paragraph {
            font-size: 1.25rem; /* Default font size for larger screens */
            margin-bottom: 30px; /* Space below the paragraph */
            color: #647E8B;
        }

        /* Styling for the button */
        .hero-button {
            background-color: white !important;
            padding: 18px 20px;
            color: blue;
            border: none;
            border-radius: 28px;
            margin-top: 30px; /* Add space above the button */
        }

        /* Responsive styles for tablets */
        @media (max-width: 768px) {
            .hero-heading {
                font-size: 2.3rem !important; /* Adjust font size for tablet devices */
            }

            .hero-paragraph {
                font-size: 1.2rem !important; /* Adjust font size for tablet devices */
            }
        }

        /* Responsive styles for mobile devices */
        @media (max-width: 576px) {
            .hero-heading {
                font-size: 2.3rem !important; /* Adjust font size for mobile devices */
            }

            .hero-paragraph {
                font-size: 1.2rem !important; /* Adjust font size for mobile devices */
            }

            .hero-button {
                padding: 14px 16px !important; /* Adjust button padding for smaller screens */
            }
        }
    </style>
</head>

<body>
    <div id="hero-back">
        <div class="content mt-3">
            <h1 class="hero-heading display-3 font-weight-bold text-light">
                Smart Lighting Solutions with <br> Motvic Consumable Lights
            </h1>
            <p class="hero-paragraph text-secondary lead">
                Worem ipsum dolor sit amet, consectetur adipiscing elit. <br>
                Nunc vulputate libero et velit interdum, ac aliquet odio mattis.
            </p>
            <button class="hero-button">
                View Products
                <span class="ml-2">&#8594;</span>
            </button>
        </div>
    </div>
</body>

</html>
