<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Responsive Marquee Slider</title>
    <style>
      
        .wrapper {
            background-color: #f7f7f7;
            padding: 20px 0;
            width:100%;
        }

        .marquee {
            overflow: hidden;
            position: relative;
            white-space: nowrap;
            box-sizing: border-box;
        }

        .marquee__group {
            display: flex;
            animation: marquee 20s linear infinite;
        }

        .marquee__group img {
            margin: 0 8px;
            height: 60px;
            width: auto;
            max-width: 120px;
            object-fit: contain;
        }

        @keyframes marquee {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%);
            }
        }

        @media (max-width: 768px) {
            .marquee__group img {
                height: 40px;
                max-width: 80px;
            }
        }

        @media (max-width: 480px) {
            .marquee__group img {
                height: 30px;
                max-width: 60px;
            }
        }

        #clients h1 {
            text-align: center;
            background: linear-gradient(180deg, #275FAB 0%, #5ABDDE 100%);
            -webkit-background-clip: text;
            background-clip: text;
            margin-bottom: 60px;
            color: transparent;
        }
    </style>
</head>
<body>
    <section id="clients" class="container-fluid " data-aos="fade-left" data-aos-duration="800">
        <h1>Our Clientele</h1>

    <article class="wrapper">
        <div class="marquee">
            <div class="marquee__group">
                <img src="/images/zara.jpeg" alt="Zara">
                <img src="/images/reliance.jpeg" alt="Reliance">
                <img src="/images/atul.jpeg" alt="Atul">
                <img src="/images/godrej.jpeg" alt="Godrej">
                <img src="/images/fablab.jpeg" alt="Fablab">
                <img src="/images/sunpet.jpeg" alt="Sunpet">
                <img src="/images/zydus.jpeg" alt="Zydus">
                <img src="/images/asia.jpeg" alt="Asia">
                <img src="/images/suntech.jpeg" alt="Suntech">
                <img src="/images/john.jpeg" alt="John">
                <img src="/images/fertin.jpeg" alt="Fertin">
                <img src="/images/jupiter.jpeg" alt="Jupiter">
                <img src="/images/BF.jpeg" alt="BF">
                <!-- Cloning the images to create a seamless loop -->
                <img src="/images/zara.jpeg" alt="Zara">
                <img src="/images/reliance.jpeg" alt="Reliance">
                <img src="/images/atul.jpeg" alt="Atul">
                <img src="/images/godrej.jpeg" alt="Godrej">
                <img src="/images/fablab.jpeg" alt="Fablab">
                <img src="/images/sunpet.jpeg" alt="Sunpet">
                <img src="/images/zydus.jpeg" alt="Zydus">
                <img src="/images/asia.jpeg" alt="Asia">
                <img src="/images/suntech.jpeg" alt="Suntech">
                <img src="/images/john.jpeg" alt="John">
                <img src="/images/fertin.jpeg" alt="Fertin">
                <img src="/images/jupiter.jpeg" alt="Jupiter">
                <img src="/images/BF.jpeg" alt="BF">
            </div>
        </div>
    </article>
    </section>

</body>
</html>