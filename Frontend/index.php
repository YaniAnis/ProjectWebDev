<?php
// ================= CONFIG =================
define('BASE_URL', 'http://localhost:3000/Frontend');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- CSS -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/Home.css">
</head>
<body>

<!-- ================= NAV ================= -->
<nav>
    <button class="logo">LOGOOOO</button>

    <ul class="nav-links">
        <li><a href="#">Items</a></li>
        <li><a href="<?= BASE_URL ?>/index.php">Home</a></li>
        <li><a href="<?= BASE_URL ?>/about.php">About</a></li>
    </ul>

    <div class="nav-right">
        <a href="<?= BASE_URL ?>/login.php">
            <button class="sign-in-btn">Sign-in</button>
        </a>
        <a href="#">
            <span class="cart-icon">
                <img src="<?= BASE_URL ?>/assets/public/shopping-cart.png" alt="cart">
            </span>
        </a>
    </div>
</nav>

<!-- ================= SEARCH ================= -->
<div class="serachbar">
    <input type="text" placeholder="Search...">
    <button class="search-btn">
        <img src="<?= BASE_URL ?>/assets/public/Search.png" alt="search">
    </button>
</div>

<!-- ================= HERO ================= -->
<div class="hero">
    <video autoplay muted loop playsinline>
        <source src="<?= BASE_URL ?>/assets/public/Herov2.mp4" type="video/mp4">
    </video>
</div>

<!-- ================= FEATURED ================= -->
<section class="featured-categories">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Collections Featured</h2>
            <p class="section-subtitle">Explorez nos catégories de pièces premium</p>
        </div>

        <div class="categories-grid">
            <div class="category-card">
                <div class="category-image">
                    <img src="<?= BASE_URL ?>/assets/public/sport-air-filter-car-engine.jpg" alt="Moteur">
                    <div class="category-overlay"></div>
                </div>
                <div class="category-content">
                    <h3 class="category-title">Moteur</h3>
                    <p class="category-count">250+ pièces</p>
                    <button class="category-btn">Explorer</button>
                </div>
            </div>

            <div class="category-card">
                <div class="category-image">
                    <img src="<?= BASE_URL ?>/assets/public/ventilated-brake-discs-rotors.jpg" alt="Freinage">
                    <div class="category-overlay"></div>
                </div>
                <div class="category-content">
                    <h3 class="category-title">Freinage</h3>
                    <p class="category-count">180+ pièces</p>
                    <button class="category-btn">Explorer</button>
                </div>
            </div>

            <div class="category-card">
                <div class="category-image">
                    <img src="<?= BASE_URL ?>/assets/public/adjustable-shock-absorbers-car-suspension.jpg" alt="Suspension">
                    <div class="category-overlay"></div>
                </div>
                <div class="category-content">
                    <h3 class="category-title">Suspension</h3>
                    <p class="category-count">140+ pièces</p>
                    <button class="category-btn">Explorer</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= FOOTER ================= -->
<footer>
    <div class="footer-content">
        <div class="footer-section">
            <h3>LOGOOOO</h3>
            <p>Votre partenaire de confiance pour une expérience exceptionnelle</p>
        </div>

        <div class="footer-section">
            <h4>Liens Rapides</h4>
            <ul class="footer-links">
                <li><a href="<?= BASE_URL ?>/index.php">Accueil</a></li>
                <li><a href="<?= BASE_URL ?>/about.php">À Propos</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="<?= BASE_URL ?>/contact.php">Contact</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h4>Suivez-nous</h4>
            <div class="social-icons">
                <a href="#" class="social-icon">📘</a>
                <a href="#" class="social-icon">📷</a>
                <a href="#" class="social-icon">🐦</a>
                <a href="#" class="social-icon">💼</a>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; 2025 LOGOOOO. Tous droits réservés.</p>
    </div>
</footer>

</body>
</html>
