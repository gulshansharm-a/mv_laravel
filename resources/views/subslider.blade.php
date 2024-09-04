  <section id="slider-cards">
            <style>
                .slider-container {
                    width: 40%;
                    margin-top: 40px;
                    position: relative;
                    overflow: hidden;
                }

                .slider-container1 {
                    width: 40%;
                    margin-top: 40px;
                    position: relative;
                    overflow: hidden;
                }

                .slider {
                    display: flex;
                    transition: transform 0.5s ease;
                }

                .card {
                    min-width: 100%;
                    box-sizing: border-box;
                    background-color: #0056b3;
                    color: #fff;
                    text-align: center;
                    height: 600px;
                    padding: 40px;
                    width: 90%;
                    border-radius: 10px;
                    display:flex;
                    align-items:center;
                    justify-content:center;
                }

                .card img {
                    width: 85%;
                    height: 50%;
                    margin-bottom: 20px;
                    max-width: 100%;

                }

                .slider-nav {
                    position: absolute;
                    top: 50%;
                    width: 100%;
                    display: flex;
                    justify-content: space-between;
                    transform: translateY(-50%);
                }

                .slider-nav button {
                    background-color: #0056b3;
                    border: none;
                    color: #fff;
                    font-size: 20px;
                    padding: 10px;
                    cursor: pointer;
                }

                .slider-nav button:hover {
                    background-color: #004299;
                }

                #fix-issue {
                    width: 100%;
                    display: flex;
                    justify-content: center;
                    gap: 0;
                }

                @media only screen and (max-width: 1520px) {
                    .slider-container1 {
                        display: none;
                    }

                    .slider-container {
                        width: 100%;
                        height: 600px;
                    }
                }
            </style>
            <div id="fix-issue" data-aos="flip-up" data-aos-mirror="true" data-aos-duration="1000">
                <div class="slider-container">
                    <div class="slider" >
                        <div class="card">
                            <img src="/images/led-square.png"     alt="Square LED Panel Light">
                            <h2>LED Panel Light</h2>
                            <p>Ceiling Light</p>
                        </div>
                        <div class="card">
                            <img src="/images/led-round.png"     alt="Round LED Panel Light">
                            <h2>LED Panel Light</h2>
                            <p>Ceiling Light</p>
                        </div>
                    </div>
                    <div class="slider-nav">
                        <button class="prev">←</button>
                        <button class="next">→</button>
                    </div>
                </div>
                <div class="slider-container1 " data-aos="slide-left" data-aos-duration="1500">
                    <div class="slider">
                        <div class="card">
                            <img src="images/led-round.png" alt="Square LED Panel Light">
                            <h2>LED Panel Light</h2>
                            <p>Ceiling Light</p>
                        </div>
                        <div class="card">
                            <img src="images/led-square.png" alt="Round LED Panel Light">
                            <h2>LED Panel Light</h2>
                            <p>Ceiling Light</p>
                        </div>
                    </div>
                    <div class="slider-nav">
                        <button class="prev">←</button>
                        <button class="next">→</button>
                    </div>
                </div>
            </div>
        </section>