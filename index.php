<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gsuko Construct</title>
    <link rel="shortcut icon" href="./images/logonumber.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <header>
        <nav>
            <img src="./images/logonumber.PNG" alt="le logo de la societe">
            <div class="navigation">
                <ul>
                    <li>
                        <a href="index.php" class="liens active">
                            Acceuil
                        </a>
                    </li>
                    <li class="services-dropdown">
                        <a href="services.php" class="liens">
                            Services <i class="fas fa-chevron-down"></i>
                        </a>
                        <div class="dropdown-content">
                            <a href="architecture.php">Architecture</a>
                            <a href="genie.php">Génie Civil</a>
                            <a href="commerciale.php">Commerciale</a>
                            <a href="hydro.php">Hydraulique</a>
                        </div>
                    </li>
                    <li>
                        <a href="propos.php" class="liens">
                            A propos
                        </a>
                    </li>
                    <li>
                        <a href="realisation.php" class="liens">
                            Réalisation
                        </a>
                    </li>
                    <li>
                        <a href="contact.php" class="liens">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>
            <div class="profil-buger">
                <div class="burger"><i class="fa-solid fa-bars fa-xl"></i></div>
            </div>
            <button class="ct"><a href="contact.php" class="ct" style="padding: 0;">Faites votre devis</a></button>
        </nav>
    </header>

    <!-- Menu mobile -->
    <div class="mobile-menu">
        <div class="close-menu"><i class="fas fa-times"></i></div>
        <ul>
            <li>
                <a href="index.php">Acceuil</a>
            </li>
            <li class="services-dropdown">
                <a href="services.php" class="active">Services <i class="fas fa-chevron-down"></i></a>
                <div class="dropdown-content">
                    <a href="architecture.php">Architecture</a>
                    <a href="genie.php">Génie Civil</a>
                    <a href="commerciale.php">Commerciale</a>
                    <a href="hydro.php">Hydraulique</a>
                </div>
            </li>
            <li>
                <a href="propos.php">À propos</a>
            </li>
            <li>
                <a href="realisation.php">Réalisation</a>
            </li>
            <li>
                <a href="contact.php">Contact</a>
            </li>
        </ul>
    </div>
    <div class="menu-overlay"></div>

    <main>
        <section class="baniere">
            <video autoplay muted loop playsinline id="background-video">
                <source src="./images/baniere-video.mp4" type="video/mp4">
            </video>
            <div class="video-overlay"></div>

            <div class="content">
                <div class="contenaire">
                    <h1 class="title-ban">
                        Bienvenue Chez Gsuko
                    </h1>
                    <p class="param-title">
                        Nous bâtissons bien plus que des structures : nous construisons votre avenir.
                    </p>
                    <div class="call">
                        <button class="ct">A propos</button>
                        <button class="cta">Consultation</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="services-section">
            <div class="section-header">
                <h2>Nos Domaines d'Expertise</h2>
                <p>Découvrez les services multidisciplinaires qui font de nous un leader dans le secteur de la
                    construction</p>
            </div>

            <div class="services-grid">
                <!-- Architecture -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-drafting-compass"></i>
                    </div>
                    <h3>Architecture Innovante</h3>
                    <p>Conception de bâtiments esthétiques et fonctionnels qui marient créativité et praticité pour des
                        espaces de vie et de travail inspirants.</p>
                    <a href="architecture.php" class="ct">En savoir plus</a>
                </div>

                <!-- Génie Civil -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3>Génie Civil</h3>
                    <p>Réalisation d'infrastructures solides et durables, alliant expertise technique et respect des
                        normes de sécurité les plus strictes.</p>
                    <a href="genie.php" class="ct">En savoir plus</a>
                </div>

                <!-- Commercial -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Solutions Commerciales</h3>
                    <p>Développement d'espaces commerciaux optimisés pour améliorer l'expérience client et maximiser le
                        retour sur investissement.</p>
                    <a href="commerciale.php" class="ct">En savoir plus</a>
                </div>

                <!-- Hydraulique -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-tint"></i>
                    </div>
                    <h3>Ingénierie Hydraulique</h3>
                    <p>Conception et mise en œuvre de systèmes hydrauliques performants pour une gestion optimale des
                        ressources en eau.</p>
                    <a href="hydro.php" class="ct">En savoir plus</a>
                </div>
            </div>
        </section>

        <section class="why-us-section">
            <div class="accent-shape shape-1"></div>
            <div class="accent-shape shape-2"></div>

            <div class="section-container">
                <div class="section-header">
                    <h2>Pourquoi choisir <span>Gsuko Construct</span> ?</h2>
                    <p>Leader du secteur depuis 15 ans, nous transformons vos visions en réalités concrètes avec
                        excellence et innovation</p>
                </div>

                <div class="content-grid">
                    <div class="reasons-list">
                        <div class="reason-item">
                            <div class="reason-icon">
                                <i class="fas fa-medal"></i>
                            </div>
                            <div class="reason-content">
                                <h3>Excellence reconnue</h3>
                                <p>Prix d'excellence en construction et certifications ISO 9001 pour notre gestion
                                    qualité rigoureuse.</p>
                            </div>
                        </div>

                        <div class="reason-item">
                            <div class="reason-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="reason-content">
                                <h3>Équipe pluridisciplinaire</h3>
                                <p>85 experts (architectes, ingénieurs, techniciens) dédiés à la réussite de vos
                                    projets.</p>
                            </div>
                        </div>

                        <div class="reason-item">
                            <div class="reason-icon">
                                <i class="fas fa-leaf"></i>
                            </div>
                            <div class="reason-content">
                                <h3>Approche durable</h3>
                                <p>90% de nos projets intègrent des solutions écologiques et des matériaux durables.</p>
                            </div>
                        </div>

                        <div class="reason-item">
                            <div class="reason-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="reason-content">
                                <h3>Respect des délais</h3>
                                <p>98% de nos projets livrés dans les temps grâce à notre gestion de projet optimisée.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="stats-grid">
                        <div class="stat-card">
                            <div class="stat-number">15+</div>
                            <div class="stat-label">Années d'expérience</div>
                        </div>

                        <div class="stat-card">
                            <div class="stat-number">240+</div>
                            <div class="stat-label">Projets réalisés</div>
                        </div>

                        <div class="stat-card">
                            <div class="stat-number">100%</div>
                            <div class="stat-label">Satisfaction client</div>
                        </div>

                        <div class="stat-card">
                            <div class="stat-number">50M€</div>
                            <div class="stat-label">Chiffre d'affaires</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="testimonials-section">
            <div class="section-container">
                <div class="section-header">
                    <h2>Ils nous ont fait confiance</h2>
                    <p>Découvrez ce que nos clients disent de leur expérience avec Gsuko Construct</p>
                </div>

                <div class="testimonials-container">
                    <div class="slider-arrow prev"><i class="fas fa-chevron-left"></i></div>

                    <div class="testimonials-slider">
                        <div class="testimonials-track">
                            <!-- Témoignage 1 -->
                            <div class="testimonial-card">
                                <p class="testimonial-content">
                                    "Le projet a été livré avant la date prévue avec une qualité d'exécution
                                    remarquable.
                                    L'équipe a su comprendre nos besoins spécifiques et proposer des solutions
                                    innovantes."
                                </p>
                                <div class="testimonial-meta">
                                    <div class="testimonial-avatar">C</div>
                                    <div class="testimonial-info">
                                        <div class="testimonial-role">Client résidentiel</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Témoignage 2 -->
                            <div class="testimonial-card">
                                <p class="testimonial-content">
                                    "Gsuko Construct a réalisé notre complexe commercial dans des délais records. Leur
                                    expertise en ingénierie a permis de résoudre des problèmes techniques complexes."
                                </p>
                                <div class="testimonial-meta">
                                    <div class="testimonial-avatar">P</div>
                                    <div class="testimonial-info">
                                        <div class="testimonial-role">Promoteur immobilier</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Témoignage 3 -->
                            <div class="testimonial-card">
                                <p class="testimonial-content">
                                    "Approche très professionnelle depuis l'étude de faisabilité jusqu'à la réception.
                                    Le
                                    suivi régulier et la transparence sur les coûts ont été particulièrement appréciés."
                                </p>
                                <div class="testimonial-meta">
                                    <div class="testimonial-avatar">D</div>
                                    <div class="testimonial-info">
                                        <div class="testimonial-role">Client immobilier</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Témoignage 4 -->
                            <div class="testimonial-card">
                                <p class="testimonial-content">
                                    "Leur maîtrise des techniques de construction durable a dépassé nos attentes. Le
                                    bâtiment consomme 40% d'énergie en moins que prévu initialement."
                                </p>
                                <div class="testimonial-meta">
                                    <div class="testimonial-avatar">E</div>
                                    <div class="testimonial-info">
                                        <div class="testimonial-role">Pasteur</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Témoignage 5 -->
                            <div class="testimonial-card">
                                <p class="testimonial-content">
                                    "Chantier parfaitement organisé avec des équipes compétentes et respectueuses. Aucun
                                    retard malgré les contraintes sanitaires récentes."
                                </p>
                                <div class="testimonial-meta">
                                    <div class="testimonial-avatar">M</div>
                                    <div class="testimonial-info">
                                        <div class="testimonial-role">Maître d'ouvrage</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="slider-arrow next"><i class="fas fa-chevron-right"></i></div>

                    <div class="slider-nav">
                        <div class="slider-dot active"></div>
                        <div class="slider-dot"></div>
                        <div class="slider-dot"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-section">
            <div class="section-container">
                <div class="section-header">
                    <h2>Contactez-nous</h2>
                    <p>Vous avez un projet de construction ou des questions sur nos services ? Notre équipe est à votre
                        écoute pour vous apporter des solutions sur mesure.</p>
                </div>

                <div class="contact-container">
                    <div class="contact-info">
                        <h3>Nos coordonnées</h3>

                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="info-content">
                                <h4>Adresse</h4>
                                <p>Avenue Suko Q/Gsuko C/Bandal </p>
                            </div>
                        </div>

                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="info-content">
                                <h4>Téléphone</h4>
                                <a href="tel:+234852682250">+243 852682250</a>
                            </div>
                        </div>

                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="info-content">
                                <h4>Email</h4>
                                <a href="mailto:contact@gsuko-construct.ma">contact@gsuko-construct.ma</a>
                            </div>
                        </div>

                        <div class="social-links">
                            <a href="#" class="social-link" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-link" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="social-link" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-link" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>

                    <form class="contact-form">
                        <div class="form-group">
                            <label for="name">Nom complet</label>
                            <input type="text" id="name" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="phone">Téléphone</label>
                            <input type="tel" id="phone" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="subject">Sujet</label>
                            <select id="subject" class="form-control" required>
                                <option value="" disabled selected>Sélectionnez un sujet</option>
                                <option value="construction">Projet de construction</option>
                                <option value="devis">Demande de devis</option>
                                <option value="renovation">Projet de rénovation</option>
                                <option value="autre">Autre demande</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" class="form-control" required></textarea>
                        </div>

                        <button type="submit" class="ct">Envoyer</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <?php include_once "footer.php" ?>
    </footer>

    <script src="assets/js/index.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>