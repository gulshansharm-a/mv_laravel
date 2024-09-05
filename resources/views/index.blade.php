<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .centers{
            display: flex;
            align-items:center;
            justify-content:center;
        }
        .width-90{
            width: 90%;
        }
    </style>
</head>
<body>
    @include('nav')
    @include('hero1')
    <div class="centers">

        <div class="width-90" >
            @include('herosection')
            @include('aboutus')
            
        </div>
    </div>
    </body>
</html>