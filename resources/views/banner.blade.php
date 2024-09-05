<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Cards</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .card-100 {
            background: url('images/bannerback1.png');
            width: auto;
            background-color: white; 
            height: 550px;
            background-position: center;
            background-position-y: 10px;
            margin: 40px;
            z-index: -100;
            border-radius: 20px;
            position: relative;
        }

        .card-100-2 {
            background: url('images/bannerback2.png');
            width: auto;
            background-color: white; 
            height: 550px;
            border: 0.2px solid rgb(207, 207, 207);
            background-position: center;
            background-position-y: 10px;
            margin: 40px;
            border-radius: 20px;
            position: relative;
        }

        .card-row {
            position: absolute;
            top: 0;
            width: 100%;
        }

        .left-col-card {
            z-index: 500;
            height: 450px;
        }

        .right-col-card1 {
            margin-top: 50px !important;
            height: 500px;
            width: auto;
            background-color: black;
            background: url('images/leftsideimageofcard1.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
        }

        .right-col-card2 {
            margin-top: 80px !important;
            height: 500px;
            background-color: black;
            background: url('images/leftsideimageofcard2.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
        }

        .left-side-margin {
            margin-top: 100px;
            margin-left: 50px;
            width: auto;
        }

        #mobile-banner {
            display: none; /* Hide the mobile section by default */
        }

        #desktop-banner {
            display: block; /* Show the desktop section by default */
        }

        @media only screen and (max-width: 700px) {
            #desktop-banner {
                display: none; /* Hide the desktop section on small screens */
            }

            #mobile-banner {
                display: block; /* Show the mobile section on small screens */
            }
        }

        .mobile-responsive-cards {
            width: 100vw;
            height: auto;
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
            margin: 10px;
        }
    </style>
</head>
<body>

    <!-- Desktop Banner Section -->
    <div style="margin: 5vw;" id="desktop-banner">
        <div class="card-100">
            <div class="row card-row">
                <div class="col-6 left-col-card">
                    <div class="left-side-margin">
                        <img src="images/roco.png" height="70px" alt="">
                        <br><br>
                        <h3>Jorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate.</h3>
                        <br>
                        <img src="images/viewproductbutton.png" width="300px" alt="">
                    </div>
                </div>
                <div class="col-6 right-col-card1"></div>
            </div>
        </div>
        <div class="card-100-2">
            <div class="row card-row">
                <div class="col-6 left-col-card">
                    <div class="left-side-margin">
                        <img src="images/dolanto.png" height="70px" alt="">
                        <br><br>
                        <h3>Presenting Engineering Prowess with a Key Focus on Details</h3>
                        <br>
                        <img src="images/visitWebsiteButton.png" width="150px" alt="">
                    </div>
                </div>
                <div class="col-6 right-col-card2"></div>
            </div>
        </div>
    </div>

    <!-- Mobile Banner Section -->
    <div id="mobile-banner" class="row">
        <img class="col-12 mobile-responsive-cards" src="images/cardmobile2.png" alt="Mobile Card 1">
        <img class="col-12 mobile-responsive-cards" src="images/cardmobile1.png" alt="Mobile Card 2">
    </div>

</body>
</html>
