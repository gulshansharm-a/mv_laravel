<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commercial Lighting</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .bg-cover-custom {
            background-size: cover;
            background-position: center;
        }

        .nowrap {
            white-space: nowrap;
            /* Prevent text from wrapping */
        }

        .background {
            position: absolute;
            inset: 0;
            z-index: 0;
            background-image: url('/path/to/your/background-image.jpg');
            background-size: cover;
            background-position: center;
        }

        .content {
            position: relative;
            z-index: 10;
        }

        .images-container {
            position: relative;
            z-index: 5;
        }

        @media only screen and (min-width: 1000px) {
            .image-spacing {

                margin-right: 100px;
                /* Remove space between images on small screens */
            }

        }
      
    </style>
</head>

<body class="bg-white font-sans">
    <div id="letsfix">

        <div class="relative flex flex-col md:flex-row justify-between items-center p-6 md:p-12">
            <div class="background"></div>
            <div class="side-left-100  relative content text-center md:text-left md:w-1/2 p-4 md:p-8">
                <h1 class="text-4xl md:text-7xl lg:text-7xl font-bold text-blue-900 mb-4 md:mb-8">
                    Commercial Lighting
                </h1>
                <p class="text-lg md:text-2xl text-gray-700 mb-4 md:mb-8"
                    style="text-align:left;width:500px;margin-left:20px">
                    Borem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a,
                    mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut
                    interdum tellus elit sed risus.
                </p>
                <div>
                    <button style="padding:20px;!important;margin-left:20px"
                        class="mt-4 py-2 px-6 md:py-4 md:px-8 bg-white text-blue-600 border border-blue-600 rounded-full shadow-lg hover:bg-blue-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50 flex items-center justify-center text-lg md:text-xl">
                        View Category <i class="fas fa-arrow-right ml-2"></i>
                    </button>
                </div>
            </div>
            <div class="relative images-container md:w-1/2 p-4 md:p-8">
                <div class="flex flex-col md:flex-row justify-center items-center">
                    <img src="/images/fun.png" alt="A well-lit commercial hallway"
                        class="mb-4 md:mb-0 rounded-lg shadow-lg w-full md:w-3/5 image-spacing">
                    <img src="/images/fun2.png" alt="A modern office space with proper lighting"
                        class="rounded-lg shadow-lg w-full md:w-2/5">
                </div>
            </div>
        </div>
    </div>
    

</body>

</html>