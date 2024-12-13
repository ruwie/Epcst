<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eastwoods Professional College</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        nav {
            background-color: #004d00; /* Green theme */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); /* Dynamic shadow effect */
        }
        nav .nav-link {
            color: white !important;
            font-size: 18px;
            margin-right: 20px;
        }
        nav .nav-link:hover {
            text-decoration: underline;
        }
        header img {
            width: 100%;
            height: auto;
        }
        section {
            min-height: 100vh; /* Make each section full height */
            padding: 50px;
        }
        .scroll-animation {
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.5s ease-in-out;
        }
        .scroll-animation.show {
            opacity: 1;
            transform: translateY(0);
        }
        footer {
            background-color: #004d00;
            color: white;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Fixed Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Eastwoods College</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#programs">Programs</a></li>
                    <li class="nav-item"><a class="nav-link" href="#news">News & Events</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header style="margin-top: 56px;"> <!-- Add margin to account for fixed navbar height -->
        <img src="{{ asset('../image/header.jpg') }}" alt="College Banner">
    </header>

    <!-- Sections -->
    <div id="home" class="bg-light text-dark scroll-animation">
        <section class="container">
            <h1 class="display-3 text-center">Welcome to Eastwoods Professional College</h1>
            <p class="lead text-center">
                We offer a learner-centered education to help you forge a better future.
            </p>
        </section>
    </div>

    <div id="about" class="bg-success text-white scroll-animation">
        <section class="container">
            <h1 class="display-3 text-center">About Us</h1>
            <p class="lead text-center">
                Eastwoods Professional College is committed to academic excellence and innovation.
            </p>
        </section>
    </div>

    <div id="programs" class="bg-light text-dark scroll-animation">
        <section class="container">
            <h1 class="display-3 text-center">Our Programs</h1>
            <p class="lead text-center">
                We offer various programs in Science, Technology, Hospitality, and Engineering.
            </p>
        </section>
    </div>

    <div id="news" class="bg-success text-white scroll-animation">
        <section class="container">
            <h1 class="display-3 text-center">News & Events</h1>
            <p class="lead text-center">
                Stay updated with the latest news and events at Eastwoods Professional College.
            </p>
        </section>
    </div>

    <div id="contact" class="bg-light text-dark scroll-animation">
        <section class="container">
            <h1 class="display-3 text-center">Contact Us</h1>
            <p class="lead text-center">
                Phone: 123-456-789 | Email: eastwoodsprofessional@yahoo.com <br>
                Address: Roman Superhighway, Bagong Silang
            </p>
        </section>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Eastwoods Professional College. All Rights Reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Scroll Animation
        document.addEventListener("DOMContentLoaded", function () {
            const scrollElements = document.querySelectorAll(".scroll-animation");

            const elementInView = (el, offset = 1) => {
                const elementTop = el.getBoundingClientRect().top;
                return (
                    elementTop <=
                    (window.innerHeight || document.documentElement.clientHeight) / offset
                );
            };

            const displayScrollElement = (element) => {
                element.classList.add("show");
            };

            const handleScrollAnimation = () => {
                scrollElements.forEach((el) => {
                    if (elementInView(el, 1.25)) {
                        displayScrollElement(el);
                    }
                });
            };

            window.addEventListener("scroll", () => {
                handleScrollAnimation();
            });
        });
    </script>
</body>
</html>
