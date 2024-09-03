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
      width: 90%;
      height: 50%;
      background-size: cover;
      background-repeat: no-repeat;
    }
    #banner {
      background-image: url('images/frame1.png');
    }
    #banner1 {
      background-image: url('images/frame2.png');
    }
    @media only screen and (max-width: 1000px) {
      #banners {
        height: 80vh;
      }
      #banner {
        background-image: url('images/mobile-banner.png');
        background-position: center;
        background-size: contain;
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
  <section class="container my-2 mt-5">
    <div id="banners">
      <div id="banner">
        <a href="Roca.pdf" download="Roca.pdf" style="display: block; width: 100%; height: 100%; text-decoration: none; color: inherit;">
          <div style="width: 100%; height: 100%;"></div>
        </a>
      </div>
      <div id="banner1">
        <a href="https://www.dolanto.com/" style="display: block; width: 100%; height: 100%;">
          <div style="width: 100%; height: 100%;"></div>
        </a>
      </div>
    </div>
  </section>
</body>
</html>