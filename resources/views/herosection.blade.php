<style>
#commercial-lighting-section {
    display: flex;
    width: 100%;
    align-items: center;
    justify-content: center ;
    position: relative;
    padding: 20px;
    height: 600px;
}

.text-container {
    position: absolute;
    top: 10%; /* Adjusted to move the text higher */
    left: 0%; /* Adjusted to better position the text */
    z-index: 2;
    max-width: 60%;
}

.text-container h1 {
    font-size: 3.5rem;
    color: #0551D5;
}

.text-container p {
    margin: 20px 0;
    font-size: 1.2rem;
    color: #333;
}

.text-container .view-category {
    display: inline-block;
    padding: 10px 20px;
    background-color: #f5f5f5;
    border-radius: 5px;
    text-decoration: none;
    color: #0551D5;
    font-weight: bold;
}

.image-container {
    display: flex;
    gap: 10px;
    width: 100%;
    left: -100px;
    justify-content: flex-start;
    align-items:center;
    position: relative;
    height: 100%;
    padding-left: 50%;
}

.image-container img {
    width: auto;
    height: 100%;
    object-fit: cover;
}

.image-container img:first-child {
    height: 500px; /* Adjusted to make the first image larger */
}
.hero-button {
            background-color: white !important;
            padding: 18px 20px;
            color: blue;
            border: none;
            border-radius: 28px;
            box-shadow: 2px 2px 2px 2px black;
            margin-top: 30px; /* Add space above the button */
        }
        #image-hero1{
           height: 400px; width: 300px
        }
        
        @media (max-width: 1200px) {
            .image-container img:first-child {
    height: 400px; /* Adjusted to make the first image larger */
}
            #image-hero1{
               height: 300px; width: 200px
            }
            #commercial-lighting-section {
    display: flex;
    width: 100%;
    align-items: center;
    justify-content: center ;
    position: relative;
    padding: 20px;
    height: 800px;
}

        }
        @media (max-width: 800px) {
            .image-container img:first-child {
    height: 300px; /* Adjusted to make the first image larger */
}
            #image-hero1{
               height: 200px; width: 150px
            }
            #commercial-lighting-section {
    display: flex;
    width: 100%;
    align-items: center;
    justify-content: center ;
    position: relative;
    padding: 20px;
    height: 800px;
}

        }
        @media (max-width: 576px) {
            .text-container {
    position: absolute;
    top: 10%; /* Adjusted to move the text higher */
    left: 0%; /* Adjusted to better position the text */
    z-index: 2;
    max-width: 100%;
    text-align:center;
    
}
.image-container{
    display:none;
}
        }
            
        @media (max-width: 576px) {
            
            .hero-button {
                padding: 14px 16px !important; /* Adjust button padding for smaller screens */
            }
        }
        
</style>
<div class="container-fluid  ">

    <div id="commercial-lighting-section">
        <div class="text-container ">
            <h1>Commercial Lighting</h1>
            <p >
            There are countless versions of lorem ipsum, the most famous fake text in the world. The versions of lorem ipsum differ in the order in which the Latin words are repeated or how they are cut.
            There are countless versions of lorem ipsum, the most famous fake text in the world. The versions of lorem ipsum differ in the order in which the Latin words are repeated or how they are cut.
            </p>
            <button class="hero-button">
                View Products
                <span class="ml-2">&#8594;</span>
            </button>
        </div>
        <div class="image-container">
            <img src="/images/dummy-frame.png" alt="Commercial Lighting Image 1">
            <img src="/images/dummyimage2.png" id="image-hero1"  alt="Commercial Lighting Image 2">
        </div>
    </div>
    
</div>