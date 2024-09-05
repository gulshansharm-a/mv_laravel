<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commercial Lighting</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .bg-cover-renamed {
            background-size: cover;
            background-position: center;
        }

        .no-wrap-text {
            white-space: nowrap;
        }

        .bg-layer {
            position: absolute;
            inset: 0;
            z-index: 0;
            background-image: url('/path/to/your/background-image.jpg');
            background-size: cover;
            background-position: center;
        }

        .main-content {
            position: relative;
            z-index: 10;
        }

        .img-wrapper {
            position: relative;
            z-index: 5;
        }

        .img-spacing {
            margin-right: 0;
        }

        /* Media Queries */
        @media only screen and (min-width: 640px) {
            .responsive-text h1 {
                font-size: 2.5rem;
            }

            .responsive-text p {
                font-size: 1rem;
            }
        }

        @media only screen and (min-width: 768px) {
            .responsive-text h1 {
                font-size: 3.5rem;
            }

            .responsive-text p {
                font-size: 1.25rem;
            }
        }

        @media only screen and (min-width: 1024px) {
            .responsive-text h1 {
                font-size: 4.5rem;
            }

            .responsive-text p {
                font-size: 1.5rem;
                width: 600px;
            }

            .img-spacing {
                margin-right: 80px;
            }
        }

        @media only screen and (min-width: 1280px) {
            .responsive-text h1 {
                font-size: 6rem;
            }

            .responsive-text p {
                font-size: 1.75rem;
            }
        }

        @media only screen and (min-width: 1536px) {
            .responsive-text h1 {
                font-size: 8rem;
            }

            .responsive-text p {
                font-size: 2rem;
            }
        }
    </style>
</head>

<body class="bg-white font-sans">

    <div class="relative flex flex-col md:flex-row justify-between items-center p-6 md:p-12">
        <div class="bg-layer"></div>
        <div class="relative main-content responsive-text text-center md:text-left md:w-1/2 p-4 md:p-8">
            <h1 class="text-3xl md:text-4xl lg:text-6xl font-bold text-blue-900 mb-4 md:mb-8 no-wrap-text">
                Commercial Lighting
            </h1>

            <p class="text-base md:text-lg lg:text-xl text-gray-1000 mb-4 md:mb-8"
                style="text-align:left;margin-left:20px">
                Borem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis
                tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus
                elit sed risus.
            </p>

            <div>
                <button style="padding:20px;!important;margin-left:20px"
                    class="mt-4 py-2 px-6 md:py-4 md:px-8 bg-white text-blue-600 border border-blue-600 rounded-full shadow-lg hover:bg-blue-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50 flex items-center justify-center text-lg md:text-xl">
                    View Category <i class="fas fa-arrow-right ml-2"></i>
                </button>
            </div>
        </div>
        <div class="relative img-wrapper md:w-1/2 p-4 md:p-8">
            <div class="flex flex-col md:flex-row justify-center items-center">
                <img src="/images/fun.png" alt="A well-lit commercial hallway"
                    class="mb-4 md:mb-0 rounded-lg shadow-lg w-full md:w-3/5 img-spacing">
                <img src="/images/fun2.png" alt="A modern office space with proper lighting"
                    class="rounded-lg shadow-lg w-full md:w-2/4">
            </div>
        </div>
    </div>

</body>

</html>
