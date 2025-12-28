<?php
require_once "config.php";



ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$success = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $subject = trim($_POST["subject"] ?? "");
    $message = trim($_POST["message"] ?? "");

    if (empty($name) || empty($email) || empty($message)) {
        $error = "Veuillez remplir tous les champs obligatoires.";
    } else {
        $stmt = $conn->prepare(
            "INSERT INTO messages (name, email, message) VALUES (?, ?, ?)"
        );

        $stmt->bind_param("sss", $name, $email, $message);

        if ($stmt->execute()) {
            $success = "Message envoyé avec succès !";
        } else {
            $error = "Erreur lors de l’envoi du message.";
        }

        $stmt->close();
    }
}
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
                    <p>69 wilayas</p>
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

                <!-- Messages -->
                <?php if ($success): ?>
                    <p style="color: green; margin-bottom: 15px;">
                        <?= $success ?>
                    </p>
                <?php endif; ?>

                <?php if ($error): ?>
                    <p style="color: red; margin-bottom: 15px;">
                        <?= $error ?>
                    </p>
                <?php endif; ?>

                <form class="contact-form" method="POST" action="<?= BASE_URL ?>/contact.php">
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Votre Nom" required>
                    </div>

                    <div class="form-group">
                        <input type="email" name="email" placeholder="Votre Email" required>
                    </div>

                    <div class="form-group">
                        <input type="text" name="subject" placeholder="Sujet">
                    </div>

                    <div class="form-group">
                        <textarea name="message" placeholder="Votre Message" rows="6" required></textarea>
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

<script src="<?= BASE_URL ?>/assets/js/contact.js"></script>

</body>
</html>
