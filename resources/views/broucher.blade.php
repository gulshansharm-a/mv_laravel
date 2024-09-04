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
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
            font-weight: bolder;
            height: 200px;
            padding: 20px 30px; /* Padding to move content away from corners */
            margin: 0 auto;
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
                flex-direction: column;
                text-align: center;
                height: auto;
                padding: 20px 20px; /* Adjust padding for smaller screens */
            }

            #boucher-button {
                padding: 10px 30px;
                font-size: 0.9rem;
                margin-top: 15px;
            }
        }
    </style>
</head>
<body>
    <section class="container mt-5">
        <div id="boucher-section">
            <div class="text-content">
                <h2>Download Our Latest Brochure!</h2>
            </div>
            <div>
                <a id="boucher-button" href="#">Download Now</a>
            </div>
        </div>
    </section>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
