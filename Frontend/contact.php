<?php
define('BASE_URL', 'http://localhost:3000/Frontend');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Pièces Automobiles Premium</title>

    <!-- CSS -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/styles.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/contact.css">
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

<main class="contact-main">

    <!-- Hero Section -->
    <section class="contact-hero">
        <div class="hero-content">
            <h1>Contactez-Nous</h1>
            <p>
                Nous sommes là pour répondre à toutes vos questions
                sur nos pièces automobiles premium
            </p>
        </div>
    </section>

    <!-- Contact Info + Form -->
    <section class="contact-section">
        <div class="contact-container">

            <!-- Info Cards -->
            <div class="contact-info">
                <div class="info-card">
                    <div class="info-icon">📍</div>
                    <h3>Zone de livraison</h3>
                    <p>56 wilayas</p>
                </div>

                <div class="info-card">
                    <div class="info-icon">📞</div>
                    <h3>Téléphone</h3>
                    <p>+213 (0) 5 23 45 67 89<br>24h/24 – 7j/7</p>
                </div>

                <div class="info-card">
                    <div class="info-icon">✉️</div>
                    <h3>Email</h3>
                    <p>contact@logoooo.com<br>support@logoooo.com</p>
                </div>

                <div class="info-card">
                    <div class="info-icon">🕐</div>
                    <h3>Disponibilité</h3>
                    <p>Commandes en ligne 24h/24 – 7j/7</p>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form-wrapper">
                <h2>Envoyez-nous un Message</h2>

                <form class="contact-form">
                    <div class="form-group">
                        <input type="text" placeholder="Votre Nom" required>
                    </div>

                    <div class="form-group">
                        <input type="email" placeholder="Votre Email" required>
                    </div>

                    <div class="form-group">
                        <input type="text" placeholder="Sujet">
                    </div>

                    <div class="form-group">
                        <textarea placeholder="Votre Message" rows="6" required></textarea>
                    </div>

                    <button type="submit" class="submit-btn">
                        Envoyer le Message
                    </button>
                </form>
            </div>

        </div>
    </section>

    <!-- Certifications -->
    <section class="certifications-section">
        <h2>Nos Certifications</h2>

        <div class="certifications-grid">
            <div class="cert-card">
                <div class="cert-icon">✅</div>
                <h3>ISO 9001:2015</h3>
                <p>Qualité garantie</p>
            </div>

            <div class="cert-card">
                <div class="cert-icon">🛡️</div>
                <h3>Certification CE</h3>
                <p>Normes européennes</p>
            </div>

            <div class="cert-card">
                <div class="cert-icon">🌍</div>
                <h3>RoHS Compliant</h3>
                <p>Produits écologiques</p>
            </div>

            <div class="cert-card">
                <div class="cert-icon">🏆</div>
                <h3>Label Plus</h3>
                <p>Excellence service</p>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="faq-section">
        <h2>Questions Fréquentes</h2>

        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question">
                    <span>Quel est votre délai de livraison ?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>2 à 5 jours ouvrables selon votre localisation.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <span>Acceptez-vous les retours ?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Retours acceptés sous 30 jours.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <span>Comment vérifier la compatibilité ?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Via notre outil ou avec l’aide du support.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <span>Y a-t-il une garantie ?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Garantie standard de 2 ans.</p>
                </div>
            </div>
        </div>
    </section>

</main>

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

<!-- JS -->
<script src="<?= BASE_URL ?>/assets/js/contact.js"></script>

</body>
</html>
