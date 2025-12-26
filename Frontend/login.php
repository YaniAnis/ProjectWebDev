<?php
define('BASE_URL', 'http://localhost:3000');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- CSS -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/styles.css">
</head>
<body>

<!-- ================= NAV ================= -->
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

<!-- ================= LOGIN CONTAINER ================= -->
<div class="container layer-1">
    <div class="container layer-2">
        <div class="container layer-3">
            <div class="content-wrapper">

                <!-- LOGIN CARD -->
                <div class="login-card">
                    <div class="tabs">
                        <button class="tab active" id="signin-tab">Sign in</button>
                        <button class="tab inactive" id="signup-tab">Sign up</button>
                    </div>

                    <form>
                        <div class="input-group">
                            <div class="input-wrapper">
                                <input type="email" placeholder="Enter your email" required>
                            </div>
                        </div>

                        <div class="input-group">
                            <div class="input-wrapper">
                                <input type="password" id="password" placeholder="Enter your password" required>
                                <span class="eye-icon" onclick="togglePassword()">👁</span>
                            </div>
                        </div>

                        <div class="forgot-password">
                            <a href="#">Forgot Password?</a>
                        </div>

                        <button type="submit" class="login-btn">Log in</button>

                        <div class="divider">OR</div>

                        <button type="button" class="google-btn">Log in with Google</button>
                    </form>
                </div>

                <!-- VIDEO -->
                <video autoplay muted loop class="bg-video">
                    <source src="<?= BASE_URL ?>/assets/public/Loginvideo.mp4" type="video/mp4">
                </video>

            </div>
        </div>
    </div>
</div>

<!-- JS -->
<script src="<?= BASE_URL ?>/assets/js/script.js"></script>

</body>
</html>
