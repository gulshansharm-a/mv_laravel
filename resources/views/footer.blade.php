<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        footer {
    background: url('/images/footerimage.png');
    height: 500px;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    display: flex;
    justify-content: space-around;
    align-items: center;
    padding-left: 5%;    
    padding-right: 5%; 
    border-bottom: 2px dotted black;   
    padding-top: 5%;    
}

#section1footer {
    width: 600px;
    max-width: 100%; /* Ensure it doesn't overflow */
    box-sizing: border-box; /* Include padding/border in the width */
}

#section2footer {
    width: 300px;
    max-width: 100%; /* Ensure it doesn't overflow */
    display: flex;
    align-items: center;
    flex-direction: column;
    box-sizing: border-box; /* Include padding/border in the width */
}

#section3footer {
    width: 300px;
    max-width: 100%; /* Ensure it doesn't overflow */
    box-sizing: border-box; /* Include padding/border in the width */
}

#second-footertitle {
    display: flex;
    padding-left: 5%;
    padding-right: 5%;
    padding-top: 30px;
    justify-content: space-around;
    flex-wrap: wrap; /* Allow wrapping for smaller screens */
}

footer div ul {
    font-size: 1.4rem;
    list-style: none;
    display: flex;
    flex-direction: column;
    align-items: center;
}

footer div li {
    margin-bottom: 10px;
}

#phone-footer {
    margin-top: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
}

#footersocial {
    margin-top: 20px;
}

#socialmedia h5 {
    margin-left: 20px;
}

#footersocial img {
    margin-left: 20px;
}

#footermail {
    margin-top: 60px;
}

#card-section {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

#card {
    background: url('/images/aboutus-card.png');
    width: 90%;
    height: 800px;
    background-repeat: no-repeat;
    background-size: cover;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 5%;
    box-sizing: border-box;

}

#card img {

    max-width: 35%;
}

#card-content {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 50%;
    flex-direction: column;
}

#card-content h1 {
    background: linear-gradient(180deg, #0551D5 0%, #27A8F0 100%);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    font-size: 4.4rem;
    text-align: center;
}

#card-content p {

    font-size: 1.4rem;
}

@media only screen and (max-width: 1180px) {
    #card-content h1 {
    background: linear-gradient(180deg, #0551D5 0%, #27A8F0 100%);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    font-size: 1.4rem;
    text-align: center;
}
#card img {

max-width: 100%;
}
#card-content p {

font-size: 1rem;
}
    #card {
        background: url('/images/mobile-card.png');
        width: 90%;
        height: auto;
        background-repeat: no-repeat;
        background-size: cover;
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: space-between;
        padding: 10%;
        box-sizing: border-box;

    }
    #card br {
       display: none;

    }
    #card-content {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    flex-direction: column;
}

}

/* Responsive Design */
@media only screen and (max-width: 1183px) {
    footer {
        flex-direction: column;
        height: auto;
    }
  
    #container-navigation ul li{
       font-size: 1.2rem;
    }

    #section2footer {
        width: 100%;
    
    }

    #section1footer {
        width: 100%;
    }
    #socialmedia{
        margin-top: 40px;
    }
}

@media only screen and (max-width: 768px) {
    #second-footertitle {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    #section1footer, #section2footer, #section3footer {
        width: 100%;
    }
}

    </style>
</head>
<body>
<footer  data-aos="fade-right" data-aos-duration="1000" >
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
    text-decoration: none; /* Removes the underline */
    color: inherit; /* Inherits the color from the parent element */
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
                    <a href="https://www.instagram.com/motvic_consumable/?igsh=MWJicWc2ZGoyZ280MA%3D%3D">   <img src="images/instagram.png" class="social" height="60px" alt="">
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
</body>
</html>