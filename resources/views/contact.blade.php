@extends('layouts.app')

@section('content')
    <style>
        .container {
            width: 100%;
            margin: 0;
        }

        body,
        html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
        }

        @media (min-width: 1400px) {

            .container,
            .container-lg,
            .container-md,
            .container-sm,
            .container-xl,
            .container-xxl {
                max-width: 1536px;
            }
        }

        .image-list-horizontal {
            display: flex;
            overflow-x: auto;
            padding: 20px 0;
        }

        .image-list-horizontal-item {
            flex: 0 0 auto;
            margin-right: 15px;
            text-align: center;
        }

        .image-list-horizontal-item img {
            max-width: 200px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .temp {
            background-color: #e0f2f1;
        }

        .info {
            background-color: #e0f2f1;
        }

        /* General Styling */
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif;
        }

        /* Navbar Styling */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #f8f9fa;
        }

        .navbar-logo {
            display: flex;
            align-items: center;
        }

        .navbar-logo img {
            height: 40px;
            margin-right: 10px;
        }

        .navbar-links a {
            margin-left: 15px;
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        .navbar-buttons a {
            margin-left: 10px;
            padding: 8px 15px;
            border-radius: 4px;
            text-decoration: none;
        }

        .login-btn {
            background-color: #4CAF50;
            color: white;
        }

        .signup-btn {
            background-color: #007BFF;
            color: white;
        }

        .hero {
            min-height: calc(100vh - 80px);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #333;
        }

        .hero p {
            font-size: 1.25rem;
            color: #555;
        }

        .img-fluid {
            max-width: 100%;
            height: auto;
        }

        .footer {
            background-color: #2c3e50;
            color: #fff;
            padding: 40px 0;
        }

        .footer a {
            color: #bdc3c7;
            text-decoration: none;
        }

        .footer a:hover {
            color: #fff;
        }

        .footer h5 {
            font-size: 16px;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .footer .social-icons {
            margin-bottom: 20px;
        }

        .footer .social-icons a {
            margin: 0 10px;
            display: inline-block;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #34495e;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .footer .social-icons a:hover {
            background-color: #1abc9c;
        }

        .footer input[type="email"] {
            padding: 10px;
            border: none;
            border-radius: 4px;
            width: 80%;
        }

        .footer .email-btn:hover {
            background-color: #16a085;
        }

        li {
            list-style: none;
        }

        /* Style untuk mobile */
        @media (max-width: 768px) {
            .navbar-links {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 60px;
                right: 0;
                background-color: #f8f9fa;
                width: 100%;
                text-align: center;
            }

            .navbar-links.active {
                display: flex;
            }

            .navbar-buttons {
                display: none;
            }

            /* Style hamburger icon */
            .hamburger {
                display: block;
                cursor: pointer;
                width: 30px;
                height: 30px;
                flex-direction: column;
                justify-content: space-between;
                align-items: center;
            }

            .hamburger div {
                width: 100%;
                height: 3px;
                background-color: #333;
            }

            .card-img-square {
                width: 100%;
                height: 300px;
                object-fit: cover;
            }

            .card {
                height: 100%;
            }

            .card-img-square {
                width: 100%;
                height: 300px;
                object-fit: cover;
            }

            .card-body {
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                height: 100%;
            }

            .card-title {
                margin-bottom: 20px;
            }

            .btn-primary {
                margin-top: auto;
            }

            .contact-section{}
        }
    </style>

    <div class="container-fluid">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="navbar-logo">
                <img src="{{ asset('image/p.png') }}" alt="Logo">
                <h2 class="text-green-700 font-bold text-2xl">CAPIL</h2>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('informasi') }}">Informasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('grafik') }}">Grafik</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Show Data
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Data Penduduk</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">

                    </li>
                </ul>

            </div>
            <div class="navbar-buttons">
                <a href="#" class="login-btn">Login</a>
                <a href="#" class="signup-btn">Sign up</a>
            </div>
    </div>
        <!-- Contact Section -->
        <section class="contact-section" style="color:black;">
            <h1>Contact Us</h1>
            <p>Kami mempertimbangkan semua perubahan dan memberi Anda komponen yang Anda butuhkan untuk menciptakan sesuatu
                yang sedang terjadi.</p>
            <form class="contact-form">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Masukkan nama anda">
                    <input type="email" name="email" placeholder="Masukkan email anda">
                </div>
                <input type="text" name="subject" placeholder="Tuliskan sebuah subjek">
                <textarea name="message" placeholder="Tulis pesan anda"></textarea>
                <button type="submit">Kirim</button>
            </form>
        </section>

        <!-- Footer Section -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <!-- Contact Us & Social Links -->
                    <div class="col-md-4 text-center d-flex" style="justify-content: space-around;">
                        <li style="text-align: center;">
                            <img src="{{ asset('image/logo1.png') }}" alt="Gallery Image 1"
                                style="max-width: 40px; border-radius: 50%;">
                        </li>
                        <li style="text-align: center;">
                            <img src="{{ asset('image/logo2.png') }}" alt="Gallery Image 2"
                                style="max-width: 40px; border-radius: 50%;">
                        </li>
                        <li style="text-align: center;">
                            <img src="{{ asset('image/logo3.png') }}" alt="Gallery Image 3"
                                style="max-width: 40px; border-radius: 50%;">
                        </li>
                        <li style="text-align: center;">
                            <img src="{{ asset('image/logo4.png') }}" alt="Gallery Image 4"
                                style="max-width: 40px; border-radius: 50%;">
                        </li>
                    </div>

                    <!-- Company Links -->
                    <div class="col-md-2">
                        <h5>Company</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Pricing</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </div>

                    <!-- Support Links -->
                    <div class="col-md-2">
                        <h5>Support</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Help center</a></li>
                            <li><a href="#">Terms of service</a></li>
                            <li><a href="#">Legal</a></li>
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="#">Status</a></li>
                        </ul>
                    </div>

                    <!-- Stay Up to Date -->
                    <div class="col-md-4">
                        <h5>Stay up to date</h5>
                        <form action="#">
                            <div class="d-flex">
                                <input type="email" placeholder="Your email address">
                                <a href="#" class="email-btn"><i class="fas fa-paper-plane"></i></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection
