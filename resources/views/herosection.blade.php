<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commercial Lighting</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        span {
            cursor: pointer;
        }

        .content {
            position: relative;
            z-index: 10;
            padding: 1rem;
            text-align: left;
        }

        .images-container {
            position: relative;
            z-index: 5;
            padding-bottom: 60px;
        }

        .hidden {
            opacity: 0;
            height: 0;
            overflow: hidden;
            transition: opacity 0.5s ease, height 0.5s ease;
        }

        .visible {
            opacity: 1;
            height: auto;
            transition: opacity 0.5s ease, height 0.5s ease;
        }

        .text-gradient {
            background: linear-gradient(180deg, #0551D5 0%, #27A8F0 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            color: transparent;
        }

        .arrow-button {
            background: none;
            border: none;
            cursor: pointer;
            color: #0551D5;
            font-size: 24px;
            margin: 10px;
        }

        .navigation-buttons {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
            display: flex;
            gap: 5px;
            width: auto;
        }

        .navigation-buttons span {
            color: #0551D5;
            font-size: 36px;
            cursor: pointer;
            padding: 10px;
            user-select: none;
        }

        @media only screen and (max-width: 768px) {
            .navigation-buttons span {
                font-size: 24px;
                padding: 8px;
            }

            .text-gradient {
                font-size: 2rem;
            }

            .content {
                padding: 1rem;
                text-align: left;
            }

            .images-container {
                padding: 1rem;
            }
        }

        @media only screen and (min-width: 768px) {
            .text-gradient {
                font-size: 3rem;
            }
        }

        .image {
            transition: width 0.5s ease, height 0.5s ease;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        #current-cu {
            transition: background-color 0.5s ease; /* Smooth transition for background color */
        }
    </style>
</head>

<body>
    <div class="relative flex flex-col md:flex-row justify-between items-center p-6 md:p-12">
        <div class="background"></div>
        <div class="relative content md:w-1/2 p-4 md:p-8 fix-text-man">
            <h1 id="title" style="font-size: 4.0rem; font-weight: bold; background: linear-gradient(180deg, #0551D5 0%, #27A8F0 100%); -webkit-background-clip: text; background-clip: text; color: transparent; text-align: left;">
                Commercial Lighting
            </h1>

            <br>
            <p id="description" class="text-lg md:text-xl text-gray-700 mb-4 md:mb-8" style="max-width: 700px; font-size: 1.3rem;">
                Borem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus.
            </p>
            <br>
            <div>
                <button class="mt-4 py-2 px-6 md:py-4 md:px-8 bg-white text-blue-600 border border-blue-600 rounded-full shadow-lg hover:bg-blue-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50 flex items-center justify-center text-lg md:text-xl">
                    View Category <i class="fas fa-arrow-right ml-2"></i>
                </button>
            </div>
        </div>
        <div class="relative images-container md:w-1/2 p-4 md:p-8" id="images-container">
            <div id="current-cu" class="flex flex-col md:flex-row justify-center items-center visible" style="background: #F3F4F6">
                <img src="/images/fun.png" id="image1" alt="A well-lit commercial hallway" class="mb-4 md:mb-0 w-full md:w-3/5 image" style="margin-right: 40px">
                <img src="/images/fun2.png" alt="A modern office space with proper lighting" id="image2" class="w-full md:w-2/5 image">
            </div>

            <!-- Navigation Buttons below the images -->
            <div class="navigation-buttons">
                <span class="material-symbols-outlined" id="arrow1" onclick="arrow1swiper()">
                    arrow_back_ios
                </span>
                <span class="material-symbols-outlined" id="arrow2" onclick="arrow2swiper()">
                    arrow_forward_ios
                </span>
            </div>
        </div>
    </div>

    <script>
        const images = [
            '/images/comercial.png',
            '/images/Retail-light.png',
            '/images/Landscapelight.png',
            '/images/archi.png',
            '/images/indust.png',
            '/images/solar.png',
            '/images/other.png',
        ];

        const titles = [
            'Commercial Lighting ',
            'Retail Lighting ',
            'Landscape Lighting ',
            'Architectural Lighting',
            'Industrial Lighting ',
            'Solar Lighting',
            'Other Lighting'
        ];

        const descriptions = [
            'Enhance your business with MV LED commercial lighting solutions. Designed for offices, warehouses, and public spaces, our lights offer Energy Efficiency: Save on energy costs with our high-performance LED technology. Bright & Consistent Illumination: Ensure optimal lighting across large areas. Durability: Built to last with long-term reliability. Perfect for modern offices and large-scale businesses.',
            'Create an inviting shopping experience with MV LED retail lighting. Our solutions include: Accent Lighting: Highlight key products and displays. Ambient Lighting: Set the perfect mood for your customers. Enhanced Product Visibility: Make your merchandise stand out. Ideal for boutiques, department stores, and all retail environments.',
            'Transform your outdoor spaces with MV LED landscape lighting: Garden & Pathway Illumination: Enhance the beauty of your landscape. Safety & Security: Brighten paths and entryways for improved safety. Eco-Friendly Options: Choose from solar-powered fixtures and energy-efficient LEDs. Perfect for residential and commercial outdoor spaces.',
            'Highlight the unique features of your building with MV LED architectural lighting: Design Integration: Seamlessly blends with your building architecture. Visual Impact: Create captivating light effects for modern or historical structures. Energy Efficiency: Superior LED technology for sustainable lighting. Ideal for enhancing the identity and appeal of any building.',
            'Equip your industrial spaces with MV LED robust lighting solutions. Energy Efficiency: Save on energy costs with our high-performance LED technology. High Lumen Output: Maximum visibility for factories and warehouses. Rugged Durability: Withstands dust, moisture, and extreme conditions. Essential for maintaining productivity and safety in industrial environments.',
            'Choose MV LED solar lighting for a sustainable outdoor solution: Energy Efficiency: Save on energy costs with our high-performance LED technology. Versatile Applications: Perfect for gardens, pathways, and remote areas. Reliable Performance: Operates independently of the electrical grid. Reduce your environmental footprint with our cutting-edge solar technology.',
            'Enhance your business with MV LED commercial lighting solutions. Designed for offices, warehouses, and public spaces, our lights offer Energy Efficiency: Save on energy costs with our high-performance LED technology. Bright & Consistent Illumination: Ensure optimal lighting across large areas. Durability: Built to last with long-term reliability. Perfect for modern offices and large-scale businesses.'
        ];

        let currentIndex = 0;

        function updateContent() {
            const imageElements = document.querySelectorAll('#current-cu img');
            const titleElement = document.getElementById('title');
            const descriptionElement = document.getElementById('description');
            const currentCu = document.getElementById('current-cu');

            imageElements.forEach((img, index) => {
                img.src = images[(currentIndex + index) % images.length];
            });

            titleElement.textContent = titles[currentIndex];
            descriptionElement.textContent = descriptions[currentIndex];
            currentCu.style.backgroundColor = `#F3F4F6`; // Example color, change as needed
        }

        function arrow1swiper() {
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            updateContent();
        }

        function arrow2swiper() {
            currentIndex = (currentIndex + 1) % images.length;
            updateContent();
        }

        document.addEventListener('DOMContentLoaded', () => {
            updateContent(); // Initialize content on page load
            setInterval(arrow2swiper, 5000); // Auto-slide every 5 seconds
        });
    </script>
</body>

</html>
