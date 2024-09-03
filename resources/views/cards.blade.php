<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Cards Grid</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .card {
      display: flex;
      flex-direction: row;
      border: 2px solid rgba(80, 80, 80, 0.369);
      margin-bottom: 20px;
      height: 200px;
      background-color: white;
      position: relative;
      overflow: hidden;
    }
.test{
    display:flex;
    height:200px !important;
    justify-content:center;
    align-items:center;
    
}
.custom-button-container {
      height: 200px; /* Container height */
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .custom-button {
      display: flex;
      align-items: center;
      background: linear-gradient(to right, #0148BF, #81B0FF); /* Gradient background */
      color: white;
      border: none;
      border-radius: 50px; /* Pill-type border radius */
      font-weight: bold;
      font-size: 16px; /* Font size */
      padding: 15px 30px; /* Padding */
      text-align: center;
      text-decoration: none; /* Remove underline */
      white-space: nowrap; /* Prevent text wrapping */
      max-width: 90%; /* Ensure button does not overflow container */
    }

    .custom-button img {
      width: 20px; /* Arrow size */
      height: auto; /* Maintain aspect ratio */
      margin-left: 10px; /* Space between text and arrow */
    }

    .custom-button:hover {
      background: #0148BF;
      color: white;
    }
    .card-body-container {
      flex: 1;
      padding: 10px;
      display: flex;
      flex-direction: column;
      justify-content: center; /* Vertically center */
      align-items: flex-start; /* Horizontally left align */
      text-align: left; /* Align text to the left */
    }

    .card-img-container {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      background: linear-gradient(to right, #0148BF, #81B0FF);
    }

    .card-img-top {
      width: 100%;
      height: auto;
      max-height: 100%;
      object-fit: cover;
    }

    .card-title {
      font-size: 24px; /* Increased heading size */
      line-height: 1.2;
      margin-bottom: 5px; /* Reduced space below heading */
    }

    .card-text {
      font-size: 14px; /* Paragraph text size */
      margin-bottom: 5px; /* Reduced space below text and above button */
    }

    .btn {
      background: linear-gradient(to right, #0148BF, #81B0FF); /* Gradient for button */
      color: white;
      border: none;
      font-weight: bold;
      font-size: 14px; /* Decreased button text size */
      align-self: flex-start; /* Align button to the start (left) */
      margin-top: 5px; /* Reduced space above button */
      padding: 6px 12px; /* Adjust padding to fit the smaller text */
    }

    .btn:hover {
      background: #0148BF;
      color: white;
    }

    @media (max-width: 768px) {
      .card {
        flex-direction: row;
        height: auto;
        margin-bottom: 15px; /* Space between cards */
      }

      .card-body-container {
        width: 50%;
        text-align: left; /* Left align text on mobile */
        align-items: flex-start; /* Left align content */
        padding: 10px;
      }

      .card-img-container {
        width: 50%;
        margin: 0;
        background: none;
      }

      .card-img-top {
        width: 100%;
        height: auto;
        max-height: 100%;
      }
    }
  </style>
</head>
<body>
  <div class="mt-5">
    <div class="row">
      <!-- Upper Row -->
      <div class="col-md-4">
        <div class="card">
          <div class="card-body-container">
            <h5 class="card-title">Commercial Lighting</h5>
            <p class="card-text">Best and affordable LED Lamps</p>
            <a href="#" class="btn">View All Categories</a>
          </div>
          <div class="card-img-container">
            <img src="/images/product1.png" class="card-img-top" alt="Card Image">
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body-container">
            <h5 class="card-title">Commercial Lighting</h5>
            <p class="card-text">Best and affordable LED Lamps</p>
            <a href="#" class="btn">View All Categories</a>
          </div>
          <div class="card-img-container">
            <img src="/images/product2.png" class="card-img-top" alt="Card Image">
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body-container">
            <h5 class="card-title">Commercial Lighting</h5>
            <p class="card-text">Best and affordable LED Lamps</p>
            <a href="#" class="btn">View All Categories</a>
          </div>
          <div class="card-img-container">
            <img src="/images/product3.png" class="card-img-top" alt="Card Image">
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <!-- Lower Row -->
      <div class="col-md-4">
        <div class="card">
          <div class="card-body-container">
            <h5 class="card-title">Commercial Lighting</h5>
            <p class="card-text">Best and affordable LED Lamps</p>
            <a href="#" class="btn">View All Categories</a>
          </div>
          <div class="card-img-container">
            <img src="/images/product4.png" class="card-img-top" alt="Card Image">
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body-container">
            <h5 class="card-title">Commercial Lighting</h5>
            <p class="card-text">Best and affordable LED Lamps</p>
            <a href="#" class="btn">View All Categories</a>
          </div>
          <div class="card-img-container">
            <img src="/images/product1.png" class="card-img-top" alt="Card Image">
          </div>
        </div>
      </div>
    
      <div class="col-md-4 "  >
      <div class="d-flex justify-content-center align-items-center" style="height: 200px;">
          <a href="#" class="custom-button">
            View All Categories
            <img src="/images/arrow.jpeg" alt="Arrow" class="arrow">
          </a>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>