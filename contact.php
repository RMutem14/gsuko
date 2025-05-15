<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Gsuko Construct</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <header>
        <nav>
            <img src="./images/logonumber.PNG" alt="le logo de la societe">
            <div class="navigation">
                <ul>
                    <li>
                        <a href="index.php" class="liens">
                            Acceuil
                        </a>
                    </li>
                    <li>
                        <a href="services.php" class="liens">
                            Services
                        </a>
                    </li>
                    <li>
                        <a href="propos.php" class="liens">
                            À propos
                        </a>
                    </li>
                    <li>
                        <a href="realisation.php" class="liens">
                            Réalisations
                        </a>
                    </li>
                    <li>
                        <a href="contact.php" class="liens active">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>
            <div class="profil-buger">
                <div class="burger"><i class="fa-solid fa-bars fa-2xl"></i></div>
            </div>
            <button class="ct">Faites votre devis</button>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="contact-hero">
        <h1>Contactez-nous</h1>
        <p>Nous sommes à votre écoute pour répondre à toutes vos questions et discuter de vos projets</p>
    </section>

    <div class="main-content">
        <!-- Contact Section -->
        <section class="contact-section">
            <div class="contact-info">
                <h2>Informations de contact</h2>
                <p>N'hésitez pas à nous contacter pour toute demande d'information ou de devis. Notre équipe vous
                    répondra dans les plus brefs délais.</p>

                <div class="contact-details">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Adresse</h3>
                            <p>123 Avenue Lumumba, Gombe<br>Kinshasa, RDC</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Téléphone</h3>
                            <p><a href="tel:+243812345678">+243 81 234 5678</a><br>
                                <a href="tel:+243897654321">+243 89 765 4321</a>
                            </p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Email</h3>
                            <p><a href="mailto:contact@gsuko-construct.cd">contact@gsuko-construct.cd</a><br>
                                <a href="mailto:commercial@gsuko-construct.cd">commercial@gsuko-construct.cd</a>
                            </p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Heures d'ouverture</h3>
                            <p>Lundi - Vendredi: 8h00 - 17h00<br>
                                Samedi: 9h00 - 13h00</p>
                        </div>
                    </div>
                </div>

                <div class="social-media">
                    <a href="#" class="social-link" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-link" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="social-link" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-link" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            <div class="contact-form">
                <h2>Envoyez-nous un message</h2>
                <form id="contactForm">
                    <div class="form-group">
                        <label for="name">Nom complet *</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Téléphone</label>
                        <input type="tel" id="phone" name="phone" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="subject">Sujet *</label>
                        <select id="subject" name="subject" class="form-control" required>
                            <option value="">Sélectionnez un sujet</option>
                            <option value="devis">Demande de devis</option>
                            <option value="information">Demande d'information</option>
                            <option value="recrutement">Recrutement</option>
                            <option value="partenariat">Partenariat</option>
                            <option value="autre">Autre</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message">Message *</label>
                        <textarea id="message" name="message" class="form-control" required></textarea>
                    </div>

                    <button type="submit" class="submit-btn">Envoyer le message</button>
                </form>
            </div>
        </section>

        <!-- Map Section -->
        <section class="map-section">
            <h2 class="section-title">Nous trouver</h2>
            <div class="map-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.490374317615!2d15.30075831533108!3d-4.322879146893075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a6a3393e2a5d5a5%3A0x1a6a3393e2a5d5a5!2sKinshasa%2C%20RD%20Congo!5e0!3m2!1sfr!2sfr!4v1623256789012!5m2!1sfr!2sfr"
                    allowfullscreen="" loading="lazy"></iframe>
            </div>
        </section>
    </div>

    <footer>
        <?php include_once "footer.php" ?>
    </footer>
</body>

</html>