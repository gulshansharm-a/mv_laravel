<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Banners</title>
  <style>
    #banners {
      width: 100%;
      margin-top: 100px;
      height: 110vh;
      display: flex;
      align-items: center;
      flex-direction: column;
      justify-content: space-around;
    }
    #banner, #banner1 {
      width: 100%;
      height: 50%;
      background-size: cover;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      background-repeat: no-repeat;
    }
    #imgbanner1, #imgbanner2 {
      width: 1600px; 
      height: 800px;
      border: none;
      outline: none;
      display: block;
    }
    @media only screen and (max-width: 1320px) {
      #imgbanner1, #imgbanner2 {
        width: 100%; 
        height: 600px;
      }
    }
    @media only screen and (max-width: 1000px) {
      #banners {
        height: 60vh;
        margin: 0px;
      }
      #banner {
       
        background-position: center;
        background-size: contain; 
        width: 100% !important;
      }
      #banner1 {
     
        height: 60%;
        margin-top: 60px;
        background-position: center;
        background-size: contain;
      }
    }
  </style>
</head>
<body>
  <section class="container-fluid my-2 mt-5">
    <div id="banners">
      <div id="banner">
        <img src="images/frame1.png" alt="hello" id="imgbanner1">
      </div>
      <div id="banner1">
        <img src="images/frame2.png" alt="" id="imgbanner2">
      </div>
    </div>
  </section>
  <script>
    function updateBanner() {
      if (window.innerWidth <= 1000) {
        document.getElementById('imgbanner1').src = "images/mobile-banner.png";
        document.getElementById('imgbanner2').src = "images/mobile-banner1.png";
      }
    }

    // Run the function when the page loads
    window.onload = updateBanner;

    // Run the function whenever the window is resized
    window.onresize = updateBanner;
  </script>
</body>
</html>
