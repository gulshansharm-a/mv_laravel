<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commercial Lighting</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <style>
        .bg-cover {
            position: absolute;
            inset: 0;
            z-index: -1;
            background-image: url('/path/to/your/background-image.jpg');
            background-size: cover;
            background-position: center;
        }

        .content-section {
            position: relative;
            z-index: 10;
            padding: 1rem;
           
        }

        .title-text {
            font-size: 2rem;
            color: #0044cc;
            margin-bottom: 1rem;
            font-weight: bold;
        }

        .info-text {
            font-size: 1rem;
            color: #333;
        
            margin-bottom: 1rem;
        }

        .btn-action {
            padding: 10px 20px;
            color: #0044cc;
            border: 2px solid #0044cc;
            border-radius: 9999px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.875rem;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }

        .btn-action:hover {
            background-color: #0044cc;
            color: #ffffff;
        }

        .slider-container {
            margin-top: 2rem;
            position: relative;
        }

        .image-slider {
            overflow: hidden;
            position: relative;
            width: 100%;
        }

        .image-slider img {
            width: 100%;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: none;
            transition: opacity 0.5s ease;
        }

        .image-slider img.active-slide {
            display: block;
        }

        .slider-navigation {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
            display: flex;
            gap: 10px;
        }

        .slider-navigation .nav-button {
            font-size: 24px;
            color: #0044cc;
            cursor: pointer;
            padding: 10px;
        }

        @media (min-width: 768px) {
            .content-section {
                text-align: left;
                padding: 2rem;
            }

            .slider-navigation {
                display: none;
            }
        }
    </style>
</head>

<body>

    <div class="bg-cover"></div>

    <div class="content-section">
        <h1 class="title-text">Commercial Lighting</h1>
        <p class="info-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus.
        </p>
        <div>
            <button class="mt-4 py-2 px-6 md:py-4 md:px-8 bg-white text-blue-600 border border-blue-600 rounded-full shadow-lg hover:bg-blue-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50 flex items-center justify-center text-lg md:text-xl">
                View Category <i class="fas fa-arrow-right ml-2"></i>
            </button>
        </div>

        <!-- Image Slider -->
        <div class="slider-container">
            <div id="custom-slider" class="image-slider">
                <img src="/images/fun.png" alt="A well-lit commercial hallway" class="active-slide" data-title="Commercial Lighting" data-description="Enhance your business with MV LED commercial lighting solutions. Designed for offices, warehouses, and public spaces, our lights offer Energy Efficiency: Save on energy costs with our high-performance LED technology. Bright & Consistent Illumination: Ensure optimal lighting across large areas. Durability: Built to last with long-term reliability. Perfect for modern offices and large-scale businesses.">
                <img src="/images/fun2.png" alt="A modern office space with proper lighting" data-title="Modern Office Lighting" data-description="Create an inviting shopping experience with MV LED retail lighting. Our solutions include: Accent Lighting: Highlight key products and displays. Ambient Lighting: Set the perfect mood for your customers. Enhanced Product Visibility: Make your merchandise stand out. Ideal for boutiques, department stores, and all retail environments.">
                <img src="/images/Landscapelight.png" alt="Landscape Lighting" data-title="Landscape Lighting" data-description="Transform your outdoor spaces with MV LED landscape lighting: Garden & Pathway Illumination: Enhance the beauty of your landscape. Safety & Security: Brighten paths and entryways for improved safety. Eco-Friendly Options: Choose from solar-powered fixtures and energy-efficient LEDs. Perfect for residential and commercial outdoor spaces.">
                <img src="/images/archi.png" alt="Architectural Lighting" data-title="Architectural Lighting" data-description="Highlight the unique features of your building with MV LED architectural lighting: Design Integration: Seamlessly blends with your building architecture. Visual Impact: Create captivating light effects for modern or historical structures. Energy Efficiency: Superior LED technology for sustainable lighting. Ideal for enhancing the identity and appeal of any building.">
                <img src="/images/indust.png" alt="Industrial Lighting" data-title="Industrial Lighting" data-description="Equip your industrial spaces with MV LED robust lighting solutions. Energy Efficiency: Save on energy costs with our high-performance LED technology. High Lumen Output: Maximum visibility for factories and warehouses. Rugged Durability: Withstands dust, moisture, and extreme conditions. Essential for maintaining productivity and safety in industrial environments.">
                <img src="/images/solar.png" alt="Solar Lighting" data-title="Solar Lighting" data-description="Choose MV LED solar lighting for a sustainable outdoor solution: Energy Efficiency: Save on energy costs with our high-performance LED technology. Versatile Applications: Perfect for gardens, pathways, and remote areas. Reliable Performance: Operates independently of the electrical grid. Reduce your environmental footprint with our cutting-edge solar technology.">
                <img src="/images/other.png" alt="Other Lighting" data-title="Other Lighting" data-description="Enhance your business with MV LED commercial lighting solutions. Designed for offices, warehouses, and public spaces, our lights offer Energy Efficiency: Save on energy costs with our high-performance LED technology. Bright & Consistent Illumination: Ensure optimal lighting across large areas. Durability: Built to last with long-term reliability. Perfect for modern offices and large-scale businesses.">
            </div>
            <!-- Navigation Buttons for Mobile View -->
            <div class="slider-navigation">
                <span class="material-icons nav-button" id="nav-left">arrow_back_ios</span>
                <span class="material-icons nav-button" id="nav-right">arrow_forward_ios</span>
            </div>
        </div>
    </div>

    <script>
        const sliderImages = document.querySelectorAll('.image-slider img');
        let sliderIndex = 0;

        function updateSlider() {
            sliderImages.forEach((image, index) => {
                image.classList.toggle('active-slide', index === sliderIndex);
            });

            const currentSlide = sliderImages[sliderIndex];
            document.querySelector('.title-text').textContent = currentSlide.dataset.title;
            document.querySelector('.info-text').textContent = currentSlide.dataset.description;
        }

        function slideLeft() {
            sliderIndex = (sliderIndex - 1 + sliderImages.length) % sliderImages.length;
            updateSlider();
        }

        function slideRight() {
            sliderIndex = (sliderIndex + 1) % sliderImages.length;
            updateSlider();
        }

        document.getElementById('nav-left').addEventListener('click', slideLeft);
        document.getElementById('nav-right').addEventListener('click', slideRight);

        // Auto-slide functionality (optional)
        setInterval(() => {
            slideRight();
        }, 5000); // Change image every 5 seconds

        // Initialize slider on page load
        document.addEventListener('DOMContentLoaded', updateSlider);
    </script>

</body>

</html>
