<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MV LED's-Categories</title>
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MV LED's</title>
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <style>
        *{
            font-family: "Plus Jakarta Sans", sans-serif;
        }
        p{
            color: grey;
        }
        .mEdits {
    color: black; /* Default text color */
    text-decoration: none; /* Remove underline */
    font-weight: bold; /* Bold text */
    padding:4px 4px;
    transition: color 0.3s, background-color 0.3s, border 0.3s; /* Smooth transition effects */
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
.jdd{
  border-top:none ;
  border-right:none ;
  border-left:none ;


}
.mContact{font-size: 3.4rem;
background: linear-gradient(180deg, #0551D5 0%, #27A8F0 100%);
-webkit-background-clip: text;
background-clip: text;
color: transparent;
text-align: center;}
    </style>
</head>

<body>
   @include('nav')
  
        <div id="carouselExample" class="carousel slide" data-aos="fade-left" data-aos-duration="1000" >
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/ret.jpeg" class="d-block w-100"  alt="..." id="crousal">
                </div>
                <div class="carousel-item">
                    <img src="/images/Hero.png" class="d-block w-100" alt="..." id="crousal">
                </div>
                <div class="carousel-item">
                    <img src="" class="d-block w-100" alt="..." id="crousal">
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
    </div>
    <div id="hero-categories">
        <div id="hero-image"></div>

       
     

        <style>
            #info-section h4 {
                margin-left: 60px;
                font-size: 1.6rem;
                margin-top: 2%;
            }

            #info-section h1 {
                margin-left: 60px;
                font-size: 2.2rem;
                margin-top: 2%;
                color: rgb(85, 156, 255);
            }

            #info-section p {
                margin-right: 60px;
                margin-left: 60px;
                margin-top: 2%;
                font-size: 1.4rem;
            }

            #info-section em {
                color: rgb(85, 156, 255);
            }

            @media only screen and (max-width: 1520px) {
                #info-section {
                    padding: 2%;
                }

                #info-section h4 {
                    font-size: 1rem;
                    margin: 0px;
                    margin-top: 20px;
                }

                #info-section h1 {
                    font-size: 1.6rem;
                    margin-top: 30px;
                    margin: 0px;
                    margin-top: 20px;
                }

                #info-section p {
                    margin: 0px;
                    margin-top: 20px;
                    font-weight: 500;
                    font-size: 1.1rem;
                }
            }
            body{
                overflow-x: hidden;
                overflow-x: hidden;
            }
            div{
                overflow-x: hidden ;
            }
        </style>
        <section id="info-section">
            <h4 data-aos="slide-right" data-aos-duration="1000" data-aos-mirror="true" > <strong >Categories><em>Retail Lighting</em></strong></h4>
            <h1 data-aos="slide-left" data-aos-duration="1000" data-aos-mirror="true" > <strong>Retail Lighting<strong></h1>
            <p data-aos="fade-right" data-aos-duration="1000" data-aos-mirror="true" style="color: black; font-weight: 500;"  >Morem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac
                aliquet odio mattis.Morem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et
                velit interdum, ac aliquet odio mattis.Morem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                vulputate libero et velit interdum, ac aliquet odio mattis.Morem ipsum dolor sit amet, consectetur
                adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.</p>
        </section>
      
          
      
          
     @include('subslider')
          
    
   @include('broucher')
   @include('contactus')

@include('footer')
    <script src="/javascript/script.js"></script>
    <script src="/javascript/index.js"></script>
    <script>
        document.querySelectorAll('.slider-container').forEach(container => {
            const slider = container.querySelector('.slider');
            const prev = container.querySelector('.prev');
            const next = container.querySelector('.next');

            let currentSlide = 0;

            prev.addEventListener('click', () => {
                currentSlide = (currentSlide <= 0) ? slider.children.length - 1 : currentSlide - 1;
                updateSlider();
            });

            next.addEventListener('click', () => {
                currentSlide = (currentSlide >= slider.children.length - 1) ? 0 : currentSlide + 1;
                updateSlider();
            });

            function updateSlider() {
                slider.style.transform = `translateX(-${currentSlide * 100}%)`;
            }
        });
        document.querySelectorAll('.slider-container1').forEach(container => {
            const slider = container.querySelector('.slider');
            const prev = container.querySelector('.prev');
            const next = container.querySelector('.next');

            let currentSlide = 0;

            prev.addEventListener('click', () => {
                currentSlide = (currentSlide <= 0) ? slider.children.length - 1 : currentSlide - 1;
                updateSlider();
            });

            next.addEventListener('click', () => {
                currentSlide = (currentSlide >= slider.children.length - 1) ? 0 : currentSlide + 1;
                updateSlider();
            });

            function updateSlider() {
                slider.style.transform = `translateX(-${currentSlide * 100}%)`;
            }
        });
    </script>
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>
        AOS.init();
      </script>
    <script src="/javascript/index.js"></script>
</body>

</html>