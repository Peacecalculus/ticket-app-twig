<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket App | Home</title>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
<div class="app-container">
    <?php include __DIR__ . '/../templates/components/header.php'; ?>

    <div class="top-wave-container bg_color">
        <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0 C150,100 350,0 600,50 C850,100 1050,0 1200,50 L1200,120 L0,120 Z" fill="#ffffff"></path>
        </svg>
    </div>

    <section class="hero_section">
        <div class="circle circle-1"></div>
        <div class="circle circle-2"></div>
        <div class="hero-content">
            <h1>Manage Your Tickets Effortlessly</h1>
            <p>A powerful and intuitive platform designed to streamline your ticket workflow, boost productivity, and keep your team organized.</p>
            <div class="hero-cta">
                <a href="/index.php?page=auth" class="cta_btn">Get Started</a>
                <a href="/index.php?page=auth" class="cta_btn">Login</a>
            </div>
        </div>
    </section>

    <div class="bottom-wave-container bg_color">
        <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,50 C150,0 350,100 600,0 C850,0 1050,100 1200,50 L1200,0 L0,0 Z" fill="#ffffff"></path>
        </svg>
    </div>

    <section class="feature_section">
        <h2>Why Choose Our Ticket App?</h2>
        <div class="feature-cards">
            <div class="card">
                <h3><i class="fa-solid fa-tachometer-alt"></i> Real-Time Dashboard</h3>
                <p>Get instant insights into your ticket status with a dynamic dashboard that updates in real-time.</p>
            </div>
            <div class="card">
                <h3><i class="fa-solid fa-shield-alt"></i> Secure & Reliable</h3>
                <p>Your data is protected with industry-standard security protocols and encrypted storage.</p>
            </div>
            <div class="card">
                <h3><i class="fa-solid fa-mobile-alt"></i> Mobile Friendly</h3>
                <p>Access your tickets from anywhere, on any device, with our fully responsive design.</p>
            </div>
        </div>
    </section>

    <?php include __DIR__ . '/../templates/components/footer.php'; ?>
</div>
</body>
</html>
