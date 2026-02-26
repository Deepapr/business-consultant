<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Business Consulting')</title>
    <meta name="description" content="@yield('meta_description', 'Professional business consulting website')">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: 'Open Sans', 'Montserrat', Arial, sans-serif;
            background: #f8f9fa;
            color: #222;
            margin: 0;
        }
        .hero-section {
            background: #0a2342;
            color: #fff;
            padding: 80px 0 60px 0;
            text-align: center;
        }
        .hero-title {
            font-family: 'Montserrat', Arial, sans-serif;
            font-size: 2.8rem;
            margin-bottom: 16px;
        }
        .hero-subtitle {
            font-size: 1.25rem;
            margin-bottom: 32px;
        }
        .btn {
            display: inline-block;
            padding: 12px 32px;
            border-radius: 4px;
            background: #0a2342;
            color: #fff;
            text-decoration: none;
            font-weight: 600;
            transition: background 0.2s;
        }
        .btn-primary {
            background: #0a2342;
        }
        .btn-primary:hover {
            background: #1d3557;
        }
        .btn-lg {
            font-size: 1.15rem;
            padding: 16px 40px;
        }
        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 20px;
        }
        .section {
            padding: 60px 0;
        }
        .service-highlights {
            background: #f4f7fa;
        }
        .services-list {
            display: flex;
            flex-wrap: wrap;
            gap: 32px;
            justify-content: center;
        }
        .service-card {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(10,35,66,0.07);
            padding: 32px 24px;
            width: 300px;
            min-height: 180px;
            text-align: left;
        }
        .cta-section {
            background: #0a2342;
            color: #fff;
            text-align: center;
        }
        @media (max-width: 900px) {
            .services-list {
                flex-direction: column;
                align-items: center;
            }
            .service-card {
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav class="container" style="display:flex;align-items:center;justify-content:space-between;padding:24px 0;">
            <a href="{{ route('home') }}" style="font-family:'Montserrat',Arial,sans-serif;font-size:1.5rem;font-weight:700;color:#0a2342;text-decoration:none;">Business Consultation</a>
            <ul style="list-style:none;display:flex;gap:32px;margin:0;padding:0;">
                <li><a href="{{ route('home') }}" style="color:#0a2342;text-decoration:none;font-weight:600;">Home</a></li>
                <li><a href="{{ route('about') }}" style="color:#0a2342;text-decoration:none;font-weight:600;">About Us</a></li>
                <li><a href="{{ route('contact.show') }}" style="color:#0a2342;text-decoration:none;font-weight:600;">Contact Us</a></li>
                <li><a href="{{ route('consultation.show') }}" style="color:#0a2342;text-decoration:none;font-weight:600;">Book a Consultation</a></li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="section" style="background:#f4f7fa;text-align:center;color:#888;font-size:0.95rem;">
        <div class="container">
            &copy; {{ date('Y') }} Business Consultation. All rights reserved.
        </div>
    </footer>
</body>
</html>
