<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Banners</title>
  <style>
    #banners {
      width: 100%;
      margin-top: 50px;
      height: 130vh;
      display: flex;
      align-items: center;
      flex-direction: column;
      justify-content: space-around;
    }
    #banner, #banner1 {
      width: 100%;
      height: 50%;
      background-size: cover;
      background-repeat: no-repeat;
    }
    #imgbanner1, #imgbanner2 {
      width: 100%; 
      height: 800px;
      border: none;    /* Ensure no border is applied */
      outline: none;   /* Remove any outline */
      display: block;  /* Ensures no inline elements' spacing issues */
    }
    @media only screen and (max-width: 1320px) {
      #imgbanner1, #imgbanner2 {
        width: 100%; 
        height: 600px;
      }
    }
    @media only screen and (max-width: 1000px) {
      #banners {
        height: 80vh;
      }
      #banner {
        background-image: url('images/mobile-banner.png');
        background-position: center;
        background-size: contain; 
        width: 100% !important;
      }
      #banner1 {
        background-image: url('images/mobile-banner1.png');
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
        <img src="images/frame1.png" alt="" id="imgbanner1" alt="hello">
      </div>
      <div id="banner1">
        <img src="images/frame2.png" alt="" id="imgbanner2">
      </div>
    </div>
  </section>
  <script>
    function updateBanner() {
      if (window.innerWidth <= 1000) {
        document.getElementById('imgbanner1').style.display = "none";
document.getElementById('imgbanner2').style.display = "none";

     
       
      }
    }

    // Run the function when the page loads
    window.onload = updateBanner;

    // Run the function whenever the window is resized
    window.onresize = updateBanner;
  </script>
</body>
</html>
