<?php
define('BASE_URL', 'http://localhost:3000/Frontend');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À Propos - Pièces Auto Premium</title>

    <!-- CSS -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/About.css">
</head>
<body>

<nav>
    <button class="logo">LOGOOOO</button>

    <ul class="nav-links">
        <li><a href="#">Items</a></li>
        <li><a href="<?= BASE_URL ?>/index.php">Home</a></li>
        <li><a href="<?= BASE_URL ?>/about.php">About</a></li>
        <li><a href="<?= BASE_URL ?>/contact.php">Contact</a></li>

    </ul>

    <div class="nav-right">
        <a href="<?= BASE_URL ?>/login.php">
            <button class="sign-in-btn">Sign-in</button>
        </a>
        <span class="cart-icon">
            <img src="<?= BASE_URL ?>/assets/public/shopping-cart.png" alt="cart">
        </span>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero-about">
    <div class="hero-content">
        <h1 class="hero-title">Excellence en Pièces Automobiles</h1>
        <p class="hero-subtitle">
            Votre partenaire de confiance pour la qualité et la performance
        </p>
    </div>
</section>

<!-- Presentation Section -->
<section class="about-section presentation-section">
    <div class="container">
        <div class="section-grid">
            <div class="content-block">
                <span class="section-tag">QUI SOMMES-NOUS</span>
                <h2 class="section-heading">
                    Une histoire de passion et d'innovation
                </h2>
                <p class="section-text">
                    Nous nous engageons à fournir les meilleures pièces automobiles du marché.
                </p>
                <p class="section-text">
                    Nous croyons que chaque conducteur mérite des pièces de qualité premium.
                </p>
            </div>

            <div class="highlight-box">
                <div class="stat-card">
                    <h3 class="stat-number">+50K</h3>
                    <p class="stat-label">Clients satisfaits</p>
                </div>
                <div class="stat-card">
                    <h3 class="stat-number">2025</h3>
                    <p class="stat-label">Année de création</p>
                </div>
                <div class="stat-card">
                    <h3 class="stat-number">1200+</h3>
                    <p class="stat-label">Références disponibles</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Problem Section -->
<section class="about-section problem-section">
    <div class="container">
        <div class="problem-content">
            <span class="section-tag">LA PROBLÉMATIQUE</span>
            <h2 class="section-heading">
                Un marché fragmenté et peu fiable
            </h2>

            <ul class="problem-list">
                <li><span class="problem-icon">⚠</span><p>Pièces contrefaites</p></li>
                <li><span class="problem-icon">⏱</span><p>Délais imprévisibles</p></li>
                <li><span class="problem-icon">💬</span><p>Support insuffisant</p></li>
                <li><span class="problem-icon">🔍</span><p>Difficulté de recherche</p></li>
            </ul>
        </div>
    </div>
</section>

<!-- Solution Section -->
<section class="about-section solution-section">
    <div class="container">
        <div class="solution-content">
            <div class="solution-text">
                <span class="section-tag">NOTRE SOLUTION</span>
                <h2 class="section-heading">
                    Qualité, fiabilité et transparence
                </h2>
                <p class="solution-description">
                    Chaque pièce est inspectée, certifiée et garantie.
                </p>
            </div>

            <div class="solution-features">
                <div class="feature"><div class="feature-icon">✓</div><h3>Authenticité</h3></div>
                <div class="feature"><div class="feature-icon">⚡</div><h3>Livraison rapide</h3></div>
                <div class="feature"><div class="feature-icon">🛡</div><h3>Garantie</h3></div>
                <div class="feature"><div class="feature-icon">👥</div><h3>Support</h3></div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="about-section services-section">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">NOS SERVICES</span>
            <h2 class="section-heading">
                Tout ce dont vous avez besoin
            </h2>
        </div>

        <div class="services-grid">
            <div class="service-card"><div class="service-icon">🔧</div><h3>Diagnostic</h3></div>
            <div class="service-card"><div class="service-icon">🚚</div><h3>Livraison</h3></div>
            <div class="service-card"><div class="service-icon">💳</div><h3>Paiement</h3></div>
            <div class="service-card"><div class="service-icon">📞</div><h3>Support</h3></div>
            <div class="service-card"><div class="service-icon">🔄</div><h3>Retours</h3></div>
            <div class="service-card"><div class="service-icon">🎁</div><h3>Fidélité</h3></div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-section">
    <div class="cta-content">
        <h2>Prêt à trouver les pièces parfaites ?</h2>
        <p>Explorez notre catalogue complet</p>
        <a href="<?= BASE_URL ?>/index.php" class="cta-button">
            Découvrir nos pièces
        </a>
    </div>
</section>

<footer>
    <div class="footer-content">
        <div class="footer-section">
            <h3>LOGOOOO</h3>
            <p>Votre partenaire de confiance</p>
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
    </div>

    <div class="footer-bottom">
        <p>&copy; 2025 LOGOOOO. Tous droits réservés.</p>
    </div>
</footer>

</body>
</html>
