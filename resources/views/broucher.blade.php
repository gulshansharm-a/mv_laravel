<style>
        #boucher-section {
            background: linear-gradient(180deg, #0551D5 0%, #27A8F0 100%);
            height: 300px;
            display: flex;
            justify-content: space-around;
            align-items: center;
            color: white;
            font-weight: bolder;
            margin-top: 40px;
        }

        #boucher-button {
            height: 80px;
            width: 250px;
            border-radius: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: white;
            color: #0056b3;
        }

        @media only screen and (max-width: 1520px) {
            #boucher-section {
                background: linear-gradient(180deg, #0551D5 0%, #27A8F0 100%);
                height: 300px;
                display: flex;
                justify-content: space-around;
                flex-direction: column;
                align-items: center;
                color: white;
                font-weight: bolder;
                margin-top: 40px;
            }
        }
        .rad{
            border-radius: 30px
        }
    </style>
    <div class=" rad container  ">

        <section id="boucher-section" data-aos="flip-down" data-aos-mirror="true" data-aos-duration="1000">
            <h1>Download Our Brochure</h1>
            <a href="./Broucher.pdf" download id="boucher-button">
                <h3>Download Now</h3>
            </a>
        </section>
    </div>