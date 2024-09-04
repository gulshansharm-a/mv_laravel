<style>
    /* Hero Section Styles */
#hero-section {
    width: 100%;
    display: flex;
    flex-wrap: wrap; /* Allow wrapping for responsive layouts */
}

#hero-sectionpart1 {
    width: 50%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 5%;
    box-sizing: border-box;
}

#hero-sectionpart1 h4 {
    font-weight: bolder;
    font-size: 2.4rem;
    font-family: Plus Jakarta Sans, sans-serif;
    color: grey;
}

#hero-sectionpart1 h1 {
    font-weight: bolder;
    font-family: Plus Jakarta Sans, sans-serif;
    font-size: 3.4rem;
    background: linear-gradient(180deg, #275FAB 0%, #5ABDDE 100%);
    -webkit-background-clip: text;
    background-clip: text;
    margin-top: 8px;
    color: transparent;
}

#hero-sectionpart1 p {
    font-size: 1.4rem;
}

#hero-sectionpart2 {
    width: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

#hero-sectionpart2 img {
    height: 400px; /* Reduced size */
    width: auto; /* Maintain aspect ratio */
}

@media only screen and (max-width: 1180px) {
    #hero-section {
        flex-direction: column;
        align-items: center;
    }

    #hero-sectionpart1 {
        width: 100%;
        padding: 5%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        box-sizing: border-box;
    }

    #hero-sectionpart2 {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    #hero-sectionpart1 p {
        font-size: 1.2rem;
    }

    #hero-sectionpart2 img {
        height: auto;
        width: 80%; /* Adjusted size for mobile */
        margin: 0; /* Remove margins for mobile view */
    }

    #hero-sectionpart1 h1 {
        font-size: 2.0rem;
    }
}

/* Card Sections Styles */
#card-section {
    display: flex;
    flex-wrap: wrap; /* Allow wrapping for responsive layouts */
    justify-content: space-between;
    align-items: center;
    padding: 5%;
    box-sizing: border-box;
    width: 100%;
    margin-bottom: 30px; /* Space between sections */
}

#card-section #card {
    display: flex;
    flex-wrap: wrap; /* Allow wrapping for responsive layouts */
    align-items: center;
    justify-content: space-between;
    width: 100%;
}

#card-section img {
    width: 40%; /* Reduced size */
    height: auto;
}

#card-section #card-content {
    width: 55%; /* Adjusted width for better alignment */
    padding: 0 5%;
}

#card-section h1 {
    font-weight: bolder;
    font-family: Plus Jakarta Sans, sans-serif;
    font-size: 2.4rem;
    color: #275FAB; /* Match the hero section color */
    text-align: left;
}

#card-section p {
    font-size: 1.2rem;
    line-height: 1.5;
}

@media only screen and (max-width: 1180px) {
    #card-section {
        flex-direction: column;
        align-items: center;
        text-align: center; /* Center text in mobile view */
    }

    #card-section #card {
        flex-direction: column-reverse; /* Stack images first, then text */
    }

    #card-section img {
        width: 80%; /* Adjusted size for mobile */
        margin-bottom: 20px; /* Add space below the image */
    }

    #card-section #card-content {
        width: 100%;
        padding: 0;
    }

    #card-section h1 {
        font-size: 2rem; /* Smaller font size for mobile */
    }

    #card-section p {
        font-size: 1.1rem; /* Smaller font size for mobile */
    }
}

</style>
<section id="about-us" class="container my-2 mt-5">
        <div class="row align-items-center">
            <!-- Text Content (Left Side) -->
            <div class="col-12 col-md-6">
                <div class="d-flex align-items-center justify-content-start mb-3">
                    <div class="dipper"></div>
                    <h3 class="text-center myboxheading" id="myboxheading">About us</h3>
                </div>
                <h1 id="about-us-title" class="myboxtext1">
                    We help to bring your dream home to reality
                </h1>
                <p class="mt-3 myboxtext">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Faucibus fringilla dui amet faucibus nam. Erat id laoreet posuere etiam morbi.
                    <br>
                    <br>
                    Tempor dolor elementum tellus non ipsum faucibus. Justo, magna mauris posuere auctor justo. Habitant proin aliquet volutpat leo ultricies. Dui blandit eget vitae turpis ultrices aliquet nunc. Faucibus sit odio bibendum lobortis diam.
                    
                </p>
            </div>

            <!-- Images (Right Side) -->
            <div class="col-12 col-md-6 d-flex flex-column align-items-center" data-aos="slide-left"
                data-aos-duration="800">
                <div class="mb-3">
                    <img src="images/Group1.png" alt="MV LED's Product" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
