<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Example</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        #footer-logo{
            height: 100px;
        }
        #social-lings{
            height: 60px
        }
        #align-footer-links{
            display:flex;
            flex-direction:column;
            align-items:center;
        }
        #fix-footers{
            display:flex;
            align-items:center;
        }
        #fot {
    background: url('images/footerimage.png') no-repeat center center;
    background-size: cover;
}

    </style>
</head>

<body class="bg-gray-100" >

    <!-- Footer Section -->
    <footer class="bg-white shadow-md p-6" id="fot">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-start" id="fix-footers">
            
            <!-- Logo and Company Info -->
            <div class="flex flex-col items-center md:items-start mb-8 md:mb-0">
                <img src="/images/logo.png" alt="Company logo" id="footer-logo" class="mb-4">
                <h2 class="font-bold text-xl text-center md:text-left">MOTVIC CONSUMABLE ELECTRICAL PVT LTD</h2>
                <p class="text-gray-600 text-center md:text-left text-sm mt-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.
                </p>
                <p class="text-gray-600 text-center md:text-left text-sm">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, a.
                </p>
            </div>

            <!-- Navigation Links -->
            <div class="flex flex-col items-center md:items-start mb-8 md:mb-0" id="align-footer-links">
                
                <ul class="space-y-2 text-center md:text-left">
                    <li><a href="#" class="text-gray-800 hover:text-gray-500">Home</a></li>
                    <li><a href="#" class="text-gray-800 hover:text-gray-500">Categories</a></li>
                    <li><a href="#" class="text-gray-800 hover:text-gray-500">Products</a></li>
                    <li><a href="#" class="text-gray-800 hover:text-gray-500">About Us</a></li>
                    <li><a href="#" class="text-gray-800 hover:text-gray-500">Contact Us</a></li>
                </ul>
            </div>

            <!-- Social Links -->
            <div class="flex flex-col items-center md:items-start">
                <h3 class="font-semibold mb-4">Social Links</h3>
                <div class="flex space-x-4">
                    <a href="#" class="text-blue-700" id="social-lings"><i class="fab fa-linkedin fa-4x" id="social-lings"></i></a>
                    <a href="#" class="text-blue-600"><i class="fab fa-facebook fa-4x" id="social-lings"></i></a>
                    <a href="#" class="text-pink-500"><i class="fab fa-instagram fa-4x" id="social-lings"></i></a>
                </div>
            </div>
        </div>

        <!-- Contact Info Section -->
        <div class="border-t mt-8 pt-6">
            <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center text-center md:text-left">
                <div class="mb-4 md:mb-0">
                    <i class="fas fa-phone-alt mr-2 text-blue-500"></i>
                    <span class="text-lg font-semibold">+91 99203 12344</span>
                </div>
                
                <div class="mt-8 text-center text-gray-500 text-sm">
                    <p>Designed, Ideated & Developed with <span class="text-red-500">❤️</span> by Digilligent</p>
                    <p>© Motvic Consumables Electrical PVT LTD</p>
                    <p><a href="#" class="hover:text-gray-800">Terms and conditions</a></p>
                </div>
                <div class="mb-4 md:mb-0">
                    <i class="fas fa-envelope mr-2 text-blue-500"></i>
                    <span class="text-lg font-semibold">sales@mvconsumable.com</span><br>
                    <span class="text-lg font-semibold">vijay@motvic.co</span>
                </div>
            </div>

            <!-- Footer Credits -->
        </div>
    </footer>

</body>

</html>