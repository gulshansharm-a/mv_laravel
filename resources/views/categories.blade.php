<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MV LED's</title>
    <link rel="stylesheet" href="/css/style.css">
   

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Zilla+Slab:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="/css/contact.css">
</head>


</head>
<style>
    /* mystyle */
    #box-curve,
    #box-curve1,
    #box-curve2,
    #box-curve3,
    #box-curve6 {
        width: 100px;
        height: 100px;
        margin: 10px;
        background-color: #3498db;
        /* Initial color */
        border-radius: 15px;
        transition: 0.3s ease, transform 0.3s ease;
    }

    /* Hover effect for only #box-curve */
    #box-curve:hover {
        background: linear-gradient(to right, #0551D5 0%, #27A8F0 100%);
        transform: scale(1.1);
    }

    #box-curve:hover img {
        filter: brightness(0) invert(1);
        /* Change image to white */
    }

    /* Always apply the gradient and scaling to these elements */
    #box-curve1 {
        background: linear-gradient(to right, #0551D5 0%, #27A8F0 100%);
        transform: scale(1.1);
    }

    #box-curve2 {
        background: linear-gradient(to right, #0551D5 0%, #27A8F0 100%);
        transform: scale(1.1);

    }

    #box-curve3 {
        background: linear-gradient(to right, #0551D5 0%, #27A8F0 100%);
        transform: scale(1.1);

    }

    #box-curve6 {
        background: linear-gradient(to right, #0551D5 0%, #27A8F0 100%);
        transform: scale(1.1);

    }

    .makesure {
        width: 180px;
        text-align: left;

    }
</style>


<body>
    @include('nav')
    <!-- crousal -->
    <section>
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/Hero1.png" class="d-block w-100" alt="..." id="crousal">
                </div>
                <div class="carousel-item">
                    <img src="/images/" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

        </div>
    </section>
    <!-- crousal end -->
    <!-- minoor cards   -->
    <section>
        <div id="mid" data-aos="slide-down" data-aos-duration="800" style="margin-top: 50px;">
            <h3>Explore Our Range</h3>
        </div>
        <div id="mid-div" data-aos="fade-right" data-aos-duration="800" style="margin-top: 50px;">

            <div
                style="display: flex; align-items: center; justify-content: center; flex-direction: column; width: 250px; margin-top: 20px">
                
                <div id="box-curve">
        <a href="/commercial" style="color: black">
        <img src="/images/bshop.png" alt="" srcset="">
    </a>
    </div>
    <h3 class="all">
        <a href="/commercial">

            Commercial Light
        </a>
    </h3>
</div>

            <div
                style="display: flex; align-items: center; justify-content: center; flex-direction: column; width: 250px; margin-top: 20px">

                <div id="box-curve">
                    <a href="/retail">

                        <img src="/images/fbr.png" alt="" srcset="">
                    </a>
                </div>
                <a href="/retail">

                    <h3 class="all">Retail-Light</h3>
                </a>
            </div>
            <div
                style="display: flex; align-items: center; justify-content: center; flex-direction: column; width: 250px; margin-top: 20px">

                <div id="box-curve">
                    <a href="/landscape">

                        <img src="/images/mslb.png" alt="" srcset="">
                    </a>
                </div>
                <a href="/landscape">

                    <h3 class="all">Landscape Light</h3>
                </a>
            </div>
            <div
                style="display: flex; align-items: center; justify-content: center; flex-direction: column; width: 250px; margin-top: 20px">

                <div id="box-curve">
                    <a href="/architecture">

                        <img src="/images/bhome.png" alt="" srcset="">
                    </a>
                </div>
                <a href="/architectural">

                    <h3 class="all">Architectural Light</h3>
                </a>
            </div>


            <div
                style="display: flex; align-items: center; justify-content: center; flex-direction: column; width: 250px; margin-top: 20px">

                <div id="box-curve">
                    <a href="/industrial">

                        <img src="/images/bindust.png" alt="" srcset="">
                    </a>

                </div>
                <a href="/industrial">

                    <h3 class="all">Industrial Light </h3>
                </a>
            </div>
            <div
                style="display: flex; align-items: center; justify-content: center; flex-direction: column; width: 250px; margin-top: 20px">

                <div id="box-curve">
                    <a href="/solar">

                        <img src="/images/bpl.png" alt="" srcset="">
                    </a>
                </div>
                <a href="/solar">

                    <h3 class="all">SolarLight </h3>
                </a>

            </div>
            <div
                style="display: flex; align-items: center; justify-content: center; flex-direction: column; width: 250px; margin-top: 20px">

                <div id="box-curve">
                    <a href="/other">

                        <img src="/images/bother.png" alt="" srcset="">
                    </a>
                </div>
                <a href="/other">

                    <h3 class="all" style="margin-right: 20px ;">Other-Light</h3>
                </a>
            </div>


        </div>
    </section>
    <!-- minorcards ends -->
    <!-- view catorgory -->
    <section id="explain" style="margin-top: 100px;">
        <div id="commercial">
            <div id="commercial-half" data-aos="slide-right" data-aos-duration="1000"></div>
            <div id="commercial-otherhalf" data-aos="slide-left" data-aos-duration="1000">
                <br>
                <h1>Commercial Lighting</h1>
                <br>

                <p>Enhance your business with MV LED'S commercial lighting solutions. Designed for offices,
                    warehouses, and public spaces, our lights offer</p>
                <br>
                <ul style="color: grey;">
                    <li>Energy Efficiency: Save on energy costs with our high-performance LED technology.</li>
                    <br>

                    <li>Bright & Consistent Illumination: Ensure optimal lighting across large areas.
                        <br>

                    </li>

                    <li>Durability: Built to last with long-term reliability.</li>
                    <br>

                    <p>Perfect for modern offices and large-scale businesses. </p>
                </ul>
                <br>
                <style>
                    #cat-button {
                        width: 180px;
                        background: linear-gradient(180deg, #0551D5 0%, #27A8F0 100%);
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        border: none;
                        margin-top: 30px;
                        border-radius: 30px;
                        padding-bottom: 10px;

                    }

                    #cat-button a p {
                        margin-top: 15px;
                        color: white;
                        font-size: 1.1rem;
                    }
                </style>
                <button id="cat-button">
                    <a href="/commercial">
                        <p>View Category</p>
                    </a>
                </button>
                <br>
                <br><br>
                <style>

                </style>

            </div>
        </div>
        <br>
        <br>
        <style>
            #commercial1 {
                margin-top: 50px;
            }

            #commercial {
                margin-top: 50px;
            }
        </style>
        <div id="commercial1">
            <div id="commercial-otherhalf" data-aos="slide-right" data-aos-duration="1000">
                <br>
                <h1>Retail Lighting</h1>
                <br>
                <br>

                <p>Create an inviting shopping experience with MV LED'S retail lighting. Our solutions include:</p>
                <br>
                <ul style="color: grey;">
                    <li>Accent Lighting: Highlight key products and displays .</li>
                    <br>

                    <li>Ambient Lighting: Set the perfect mood for your customers.

                        <br>

                    </li>

                    <li>Enhanced Product Visibility: Make your merchandise stand out.</li>
                    <br>

                    <p>Ideal for boutiques, department stores, and all retail environments.
                    </p>

                </ul>
                <style>
                    #cat-button {
                        width: 180px;
                        background: linear-gradient(180deg, #0551D5 0%, #27A8F0 100%);
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        border: none;
                        border-radius: 30px;

                    }

                    #cat-button a p {
                       
                        color: white;
                        font-size: 1.1rem;
                    }
                </style>

                <button id="cat-button">
                    <a href="/retail">
                        <p>View Category</p>
                    </a>
                </button>
                <br>
                <br>
            </div>
            <div id="commercial-half-retail" data-aos="slide-left" data-aos-duration="1000"></div>
        </div>
        <br>
        <br>
        <div id="commercial">
            <div id="commercial-halfland" data-aos="slide-right" data-aos-duration="1000"></div>
            <div id="commercial-otherhalf" data-aos="slide-left" data-aos-duration="1000">
                <br>
                <h1>Landscape Lighting</h1>
                <br>

                <p>Transform your outdoor spaces with MV LED'S landscape lighting:</p>
                <br>
                <ul style="color: grey;">
                    <li>Garden & Pathway Illumination: Enhance the beauty of your landscape.</li>
                    <br>

                    <li>Safety & Security: Brighten paths and entryways for improved safety.

                        <br>

                    </li>

                    <li>Eco-Friendly Options: Choose from solar-powered fixtures and energy-efficient LEDs.</li>
                    <br>

                    <p>Perfect for residential and commercial outdoor spaces.
                    </p>
                </ul>
                <style>

                </style>
                <button id="cat-button">
                    <a href="/landscape">
                        <p>View Category</p>
                    </a>
                </button>
                <br><br>
            </div>
        </div>
        <br>
        <div id="commercial1">
            <div id="commercial-otherhalf" data-aos="slide-right" data-aos-duration="1000">
                <br>
                <h1>Architectural Lighting</h1>
                <br>

                <p>Highlight the unique features of your building with MV LED'S architectural lighting:</p>
                <br>
                <ul style="color: grey;">
                    <li>Design Integration: Seamlessly blends with your building's architecture.</li>
                    <br>

                    <li>Visual Impact: Create captivating light effects for modern or historical structures.

                        <br>

                    </li>

                    <li>Energy Efficiency: Superior LED technology for sustainable lighting.</li>
                    <br>

                    <p>Ideal for enhancing the identity and appeal of any building.</p>
                </ul>
                <style>
                    #cat-button {
                        width: 180px;
                        background: linear-gradient(180deg, #0551D5 0%, #27A8F0 100%);
                        height: 60px;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        border: none;
                        border-radius: 30px;

                    }

                    #cat-button a p {
                        margin-top: 15px;
                        color: white;
                        font-size: 1.1rem;
                    }
                </style>
                <button id="cat-button">
                    <a href="/architecture">
                        <p>View Category</p>
                    </a>
                </button>
                <br><br>
            </div>
            <div id="commercial-half-retailarc" data-aos="slide-left" data-aos-duration="1000"></div>
        </div>
        <br>
        <div id="commercial">
            <div id="commercial-halflandind" data-aos="slide-right" data-aos-duration="1000"></div>
            <div id="commercial-otherhalf" data-aos="slide-left" data-aos-duration="1000">
                <br>
                <h1>Industrial Lighting</h1>
                <br>

                <p>Equip your industrial spaces with MV LED'S robust lighting solutions.</p>
                <br>
                <ul style="color: grey;">
                    <li>Energy Efficiency: Save on energy costs with our high-performance LED technology.</li>
                    <br>

                    <li>High Lumen Output: Maximum visibility for factories and warehouses.
                        <br>

                    </li>

                    <li>Rugged Durability: Withstands dust, moisture, and extreme conditions.</li>
                    <br>

                    <p>Essential for maintaining productivity and safety in industrial environments.
                    </p>
                </ul>
                <style>
                    #cat-button {
                        width: 180px;
                        background: linear-gradient(180deg, #0551D5 0%, #27A8F0 100%);
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        border: none;
                        border-radius: 30px;

                    }

                    #cat-button a p {
                        margin-top: 15px;
                        color: white;
                        font-size: 1.1rem;
                    }
                </style>
                <button id="cat-button">
                    <a href="/industrial">
                        <p>View Category</p>
                    </a>
                </button>
                <br><br>
            </div>
        </div>
        <br>
        <div id="commercial1">
            <div id="commercial-otherhalf" data-aos="slide-right" data-aos-duration="1000">
                <br>
                <h1>Solar Lighting</h1>
                <br>

                <p>Choose MV LED'S solar lighting for a sustainable outdoor solution: </p>
                <br>
                <ul style="color: grey;">
                    <li>Energy Efficiency: Save on energy costs with our high-performance LED technology.</li>
                    <br>

                    <li>Versatile Applications: Perfect for gardens, pathways, and remote areas
                        <br>

                    </li>

                    <li>Reliable Performance: Operates independently of the electrical grid.
                    </li>
                    <br>

                    <p>Reduce your environmental footprint with our cutting-edge solar technology.
                    </p>
                </ul>
                <style>
                    #cat-button {
                        width: 180px;
                        background: linear-gradient(180deg, #0551D5 0%, #27A8F0 100%);
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        border: none;
                        border-radius: 30px;

                    }

                    #cat-button a p {
                     
                        color: white;
                        font-size: 1.1rem;
                    }
                </style>
                <button id="cat-button">
                    <a href="/solar">
                        <p>View Category</p>
                    </a>
                </button>
                <br><br>
            </div>
            <div id="commercial-half-retailarcsolar" data-aos="slide-left" data-aos-duration="1000"></div>
        </div>
        <br>
        <div id="commercial">
            <div id="commercial-halflandindoth" data-aos="slide-right" data-aos-duration="1000"></div>
            <div id="commercial-otherhalf" data-aos="slide-left" data-aos-duration="1000">
                <br>
                <h1>Other Lighting</h1>
                <br>
                <br>

                <p>Enhance your business with MV LED'S commercial lighting solutions. Designed for offices,
                    warehouses, and public spaces, our lights offer</p>
                <br>
                <ul style="color: grey;">
                    <li>Energy Efficiency: Save on energy costs with our high-performance LED technology.</li>
                    <br>

                    <li>Bright & Consistent Illumination: Ensure optimal lighting across large areas.
                        <br>

                    </li>

                    <li>Durability: Built to last with long-term reliability.</li>
                    <br>

                    <p>Perfect for modern offices and large-scale businesses. </p>
                </ul>
                <style>
               
                </style>
                <button id="cat-button">
                    <a href="/other">
                        <p>View Category</p>
                    </a>
                </button>
                <br><br>
            </div>

        </div>
        <br>
    </section>
    <!-- end -->
    <br><br>



@include('contactus')
@include('footer')


    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            once: false
        });
    </script>
    <script src="/javascript/index.js"></script>
    <script src="/javascript/script.js"></script>
</body>