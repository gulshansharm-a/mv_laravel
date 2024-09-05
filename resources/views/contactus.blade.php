<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
    <style>
        .contact-wrapper {
            margin-bottom: 3rem;
            max-width: 1500px; /* Set a max-width for the contact-wrapper */
            margin: 0 auto; /* Center the contact-wrapper horizontally */
        }

        .contact-wrapper .image-wrapper {
            display: block;
            margin-bottom: 2rem; /* Adjust this value to increase or decrease the gap */
        }

        .contact-wrapper .image-responsive {
            height: 600px; /* Keep height as it is */
            width: 100%; /* Make image responsive */
            max-width: 1200px; /* Increased maximum width */
        }

        .contact-wrapper .primary-text {
            color: #007bff;
            font-size: 2rem; /* Increase font size */
        }

        .contact-wrapper .secondary-text {
            color: #6c757d;
            font-size: 1.2rem; /* Increase font size */
        }

        .contact-wrapper .input-control {
            width: 100%;
            border: 1px solid #ccc; /* Default border color */
            border-radius: 4px; /* Rounded corners */
            padding: 12px; /* Increased padding */
            box-sizing: border-box; /* Include padding in width calculation */
            transition: border-color 0.3s ease; /* Smooth transition */
        }

        .contact-wrapper .input-control:focus {
            border-color: #007bff; /* Border color on focus */
            outline: none; /* Remove default outline */
        }

        .contact-wrapper .submit-btn {
            width: 100%; /* Full width */
            background: linear-gradient(180deg, #275FAB 0%, #5ABDDE 100%);
            color: #fff; /* Text color */
            padding: 14px 20px; /* Increased padding */
            border-radius: 7px;
            border: none; /* Remove default border */
            font-size: 1rem; /* Increase font size */
            cursor: pointer; /* Change cursor on hover */
        }

        .contact-wrapper .submit-btn:hover {
            background: linear-gradient(180deg, #1e4c7a 0%, #3a9bdc 100%); /* Darker gradient on hover */
        }

        /* Responsive adjustments */
        @media (max-width: 1000px) {
            .contact-wrapper .image-wrapper {
                display: none;
            }
        }

        @media (max-width: 768px) {
            .contact-wrapper .image-responsive {
                height: 400px; /* Adjust image size for smaller screens */
                max-width: 100%; /* Ensure image does not exceed the container width */
            }

            .contact-wrapper .primary-text {
                font-size: 1.5rem; /* Adjust font size */
            }

            .contact-wrapper .secondary-text {
                font-size: 1rem; /* Adjust font size */
            }

            .contact-wrapper .submit-btn {
                padding: 10px 15px; /* Adjust padding */
                font-size: 0.9rem; /* Adjust font size */
            }
        }

        #contact-fix {
            display: flex;
            justify-content: center;
            align-items: flex-start; /* Adjust alignment as needed */
            padding: 20px; /* Added padding for spacing */
        }
    </style>
</head>
<body>
<section class="contact-wrapper" id="contact-fix"> 
    <div class="margin-side row gx-4">
        <div class="col-md-4 image-wrapper">
            <img src="images/contactus.png" alt="Decorative hanging lights with plants" class="image-responsive rounded-lg">
        </div>
        <div class="col-md-8 form-wrapper">
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
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
