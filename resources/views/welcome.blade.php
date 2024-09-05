<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        html {
            overflow-x: hidden;
        }
        body{
        
        }

        h1 {
            font-size: 10px;
        }

        #div-center {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        #widths {
            width: 80%;
            margin: 0 auto;
        }

        .myboxtext {
            font-size: 18px !important;
            color: #000000 !important;
        }

        .myboxheading {
            color: linear-gradient(180deg, #275FAB 0%, #5ABDDE 100%) !important;
            font-size: 36px !important;
            font-weight: bold;
        }
        #heromobile{
            display: none;
        }
        @media only screen and (max-width: 700px) {
            #heromobile{
            display: block;

        }
        #herodesk{
            display: none;
        }
        }
    </style>
</head>

<body>
    @include('nav')
    @include('hero1')
    <div style="margin-left:5vw;margin-right:5vw">
        <div id="herodesk">

            @include('herosection')
        </div>
    <div id="heromobile">

        @include('herosectionmobile')
    </div>
    <div style="margin-left:5vw;margin-right:5vw">
    @include('aboutus')
    @include('cards')

    </div>

    </div>
    @include('ourclient')
    @include('banner')
    <br>
    <br>
    <br>
    <br>
    @include('contactus')
    @include('footer')
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        input {
            border-bottom: 2px solid #f00;
        }
    </style>
</body>

</html>