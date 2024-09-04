<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- Bootstrap CSS -->
    <style>
        .contact-wrapper {
            margin-top: 5rem;
            margin-bottom: 5rem;
        }

        .contact-wrapper .image-wrapper {
            display: block;
        }

        @media (max-width: 1000px) {
            .contact-wrapper .image-wrapper {
                display: none;
            }
        }

        .contact-wrapper .image-responsive {
            height: 550px;
            width: 450px;
        }

        .contact-wrapper .primary-text {
            color: #007bff;
        }

        .contact-wrapper .secondary-text {
            color: #6c757d;
        }

        .contact-wrapper .input-control {
            width: 100%;
        }

        .contact-wrapper .submit-btn {
            width: auto;
            background: linear-gradient(180deg, #275FAB 0%, #5ABDDE 100%);

            color: #fff; /* Text color */
            padding: 12px 30px;
            border-radius:7px;
        }
    </style>
</head>
<body>

<section class="container contact-wrapper">
    <div class="row gx-4">
        <div class="col-md-6 image-wrapper">
            <img src="images/contactus.png" alt="Decorative hanging lights with plants" class="image-responsive rounded-lg">
        </div>
        <div class="col-md-6">
            <h2 class="primary-text mb-4 myboxheading">Connect with us</h2>
            <p class="secondary-text mb-4 myboxtext">Borem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.</p>
            <form action="#" method="POST">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="first-name" class="form-label">First Name</label>
                        <input type="text" id="first-name" name="first-name" placeholder="John" class="input-control">
                    </div>
                    <div class="col-md-6">
                        <label for="last-name" class="form-label">Last Name</label>
                        <input type="text" id="last-name" name="last-name" placeholder="Doe" class="input-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" placeholder="email@example.com" class="input-control">
                    </div>
                    <div class="col-md-6">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" id="phone" name="phone" placeholder="+012 3456 789" class="input-control">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea id="message" name="message" rows="4" placeholder="Write your message.." class="input-control"></textarea>
                </div>
                <div class="text-end">
                    <button type="submit" class="submit-btn">
                        Send Message
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Bootstrap JS and dependencies -->
</body>
</html>
