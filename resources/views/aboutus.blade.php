<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->

    
    <style>
        /* Custom Styles */
        #about-us{
            margin-top:0px !important;
        }
      
       

        #about-us p {
            font-size: 1rem;
        }

        @media (min-width: 768px) and (max-width: 1200px) {
            #about-us h1 {
                font-size: 1.2rem; 
            }

            #about-us p {
                font-size: 0.7rem; 
            }

            .col-12.col-md-6 {
                padding-left: 15px;
                padding-right: 15px;
            }
        }

        .myboxtext{
            font-size:18px !important;
            color:000000 !important
        }
        .myboxtext1{
font-size:22px !important
        }
        #myboxheading{
            color:linear-gradient(180deg, #275FAB 0%, #5ABDDE 100%) !important;
            font-size:linear-gradient(180deg, #275FAB 0%, #5ABDDE 100%) !important;
            font-weight:bold
        }
        @media (max-width: 768px) {
            #about-us h3 {
                font-size: 1.1rem;
                color:linear-gradient(180deg, #275FAB 0%, #5ABDDE 100%) !important;m;
            }

            #about-us p {
                font-size: 0.7rem;
            }

            .d-flex.align-items-center.mb-3 {
                justify-content: center;
                height: auto;
                text-align: center;
            }

            .d-flex.align-items-center.mb-3 div {
                margin: 0 auto 10px;
            }
        }

        @media (max-width: 576px) {
            #about-us h1 {
                font-size: 1.5rem;
            }

            #about-us p {
                font-size: 0.8rem;
            }
        }

        @media (max-width: 400px) {
          .h33{
            text-align: center;
          }
            #about-us h1 {
                font-size: 1.2rem;
            }

            #about-us p {
                font-size: 0.7rem;
            }
        }

        /* Custom Container Style */
        
    </style>
</head>
<body>
  <section id="about-us" class="">
    <div class="row">
        <!-- Text Content (Left Side) -->
        <div class="col-12 col-md-6" data-aos="slide-right" data-aos-duration="800">
            <div class="d-flex align-items-center  justify-content-start mb-3" style="height: 60px; ;">
                <div style="width: 150px; border: 2px solid blue; margin-left: 10px;"></div>
                <h3 class="text-center myboxheading" id="myboxheading" style=" color:#0551D5; font-size:36px" >About us</h3> 
            </div>
            <h1 id="about-us-title" class="myboxtext1">
                Welcome to MV LED'S, where we bring brilliance to life through cutting-edge LED technology.
            </h1>
            <p class="mt-3 myboxtext">
                Our journey began with a simple yet powerful idea: to create lighting solutions that are not only efficient
                and durable but also aesthetically pleasing and environmentally conscious. Today, MV LED'S is synonymous with
                innovation, quality, and sustainability in the world of LED lighting.
                Our wide range of LED products caters to various needs, whether you’re looking to brighten your home with
                elegant, modern designs or seeking robust, industrial-grade lighting solutions for your business.
                Every product we offer is meticulously crafted, blending advanced technology with superior craftsmanship to
                deliver unmatched performance and energy savings.
            </p>
        </div>

        <!-- Images (Right Side) -->
        <div class="col-12 col-md-6 d-flex flex-column align-items-center" data-aos="slide-left" data-aos-duration="800">
            <div class="mb-3">
                <img src="/images/Section.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- Include other sections -->


<!-- Bootstrap JS and dependencies -->

</body>
</html>
