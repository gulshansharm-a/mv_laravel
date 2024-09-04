<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Boucher Section</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom Styles */
        #boucher-section {
            border-radius: 15px;
            background: linear-gradient(180deg, #0551D5 0%, #27A8F0 100%);
            padding: 20px;
            display: flex;
            justify-content: space-between; /* Align items to the edges */
            align-items: center; /* Center items vertically */
            color: white;
            font-weight: bolder;
            text-align: left; /* Align text to the left */
            max-width: 1200px; /* Limit the maximum width */
            margin: 0 auto; /* Center the section horizontally */
        }

        #boucher-section .text-content {
            flex: 1; /* Allow the text content to take available space */
        }

        #boucher-button {
            padding: 15px 40px;
            border-radius: 40px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background-color: white;
            color: #0056b3;
            text-decoration: none;
            font-size: 1rem;
        }

        @media (max-width: 768px) {
            #boucher-section {
                flex-direction: column; /* Stack items vertically on smaller screens */
                text-align: center; /* Center text alignment */
            }

            #boucher-button {
                padding: 10px 30px;
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <section class="container ">
        <div id="boucher-section" class="row gx-4"> <!-- Added gx-4 for horizontal spacing -->
            <div class="col-md-6 text-content">
                <h2 class="mx-5">Download Our Latest Brochure!</h2>
            </div>
            <div class="col-md-6 text-md-end">
                <a id="boucher-button" href="#">Download Now</a>
            </div>
        </div>
    </section>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>