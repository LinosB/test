<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fitness Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/js/app.js')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero {
            background-image: url('https://images.unsplash.com/photo-1558611848-73f7eb4001a1?fit=crop&w=1950&q=80');
            background-size: cover;
            background-position: center;
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-shadow: 0 2px 4px rgba(0,0,0,0.6);
        }
        .gallery img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .navbar {
            background-color: #1A1A2E;
        }
        footer {
            background-color: #1A1A2E;
        }
        .logo{
            width: 150px;
            margin-right: 10px;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
       <img class="logo" src="{{ asset('storage/images/logo-white.png') }}" alt="Logo">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Products</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero">
    <div class="text-center">
        <h1 class="display-4">Welcome to FitLife</h1>
        <p class="lead">Train. Transform. Triumph.</p>
    </div>
</section>

<!-- Gallery -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Our Training Moments</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <img src="https://static.independent.co.uk/2025/03/14/12/14/If-you-understand-the-principles-behind-lifting-weight-effectively-results-are-sure-to-follow.jpeg" alt="Training 1" class="img-fluid gallery">
            </div>
            <div class="col-md-4">
                <img src="https://youfit.com/wp-content/uploads/2024/06/YouFit-06-20-22-2527-Edit.jpg" alt="Training 2" class="img-fluid gallery">
            </div>
            <div class="col-md-4">
                <img src="https://media-cldnry.s-nbcnews.com/image/upload/t_fit-760w,f_auto,q_auto:best/newscms/2016_28/1143075/crossfit-001-inline-today-160714.jpg" alt="Training 3" class="img-fluid gallery">
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="text-white text-center py-4">
    <div class="container">
        <p>Email: contact@setsnreps.com</p>
        <p>Phone: +123 456 7890</p>
        <p>Location: Prishtina</p>
        <p class="mb-0">&copy; 2025 Sets n'Reps. All rights reserved.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
