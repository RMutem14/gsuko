<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réalisations & Blog - Gsuko Construct</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/realisation.css">

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
                        <a href="realisation.php" class="liens active">
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

    <!-- Mobile Menu -->
    <div class="mobile-menu">
        <div class="close-menu"><i class="fas fa-times"></i></div>
        <ul>
            <li>
                <a href="index.php">Acceuil</a>
            </li>
            <li class="services-dropdown">
                <a href="services.php">Services <i class="fas fa-chevron-down"></i></a>
                <div class="dropdown-content">
                    <a href="#">Architecture</a>
                    <a href="#">Génie Civil</a>
                    <a href="#">Commerciale</a>
                    <a href="#">Hydraulique</a>
                </div>
            </li>
            <li>
                <a href="apropos.php">À propos</a>
            </li>
            <li>
                <a href="realisations.php" class="active">Réalisations</a>
            </li>
            <li>
                <a href="contact.php">Contact</a>
            </li>
        </ul>
    </div>
    <div class="overlay"></div>

    <!-- Hero Section -->
    <section class="portfolio-hero">
        <h1>Nos Réalisations</h1>
        <p>Découvrez nos projets phares qui témoignent de notre expertise et de notre engagement qualité</p>
    </section>

    <div class="main-content">
        <!-- Portfolio Section -->
        <section class="portfolio-section">
            <div class="section-header">
                <h2>Nos Projets Récents</h2>
                <p>Une sélection de nos réalisations les plus marquantes à travers la RDC</p>
            </div>

            <div class="portfolio-filter">
                <button class="filter-btn active" data-filter="all">Tous</button>
                <button class="filter-btn" data-filter="architecture">Architecture</button>
                <button class="filter-btn" data-filter="civil">Génie Civil</button>
                <button class="filter-btn" data-filter="commercial">Commercial</button>
                <button class="filter-btn" data-filter="hydraulique">Hydraulique</button>
            </div>

            <div class="portfolio-grid">
                <!-- Projet 1 -->
                <div class="portfolio-item" data-category="architecture">
                    <div class="portfolio-badge">Architecture</div>
                    <img src="./images/architecture.jpg"
                        alt="Résidence Les Palmiers" class="portfolio-img">
                    <div class="portfolio-overlay">
                        <h3>Résidence Les Palmiers</h3>
                        <p>Kinshasa | 2023</p>
                        <a href="#" class="cta-button" style="padding: 0.5rem 1rem; font-size: 0.9rem;">Voir le
                            projet</a>
                    </div>
                </div>

                <!-- Projet 2 -->
                <div class="portfolio-item" data-category="civil">
                    <div class="portfolio-badge">Génie Civil</div>
                    <img src="./images/architecture.jpg"
                        alt="Pont sur la Lukunga" class="portfolio-img">
                    <div class="portfolio-overlay">
                        <h3>Pont sur la Lukunga</h3>
                        <p>Kinshasa | 2022</p>
                        <a href="#" class="cta-button" style="padding: 0.5rem 1rem; font-size: 0.9rem;">Voir le
                            projet</a>
                    </div>
                </div>

                <!-- Projet 3 -->
                <div class="portfolio-item" data-category="commercial">
                    <div class="portfolio-badge">Commercial</div>
                    <img src="./images/architecture.jpg"
                        alt="Centre Commercial Kin Plaza" class="portfolio-img">
                    <div class="portfolio-overlay">
                        <h3>Centre Commercial Kin Plaza</h3>
                        <p>Gombe | 2023</p>
                        <a href="#" class="cta-button" style="padding: 0.5rem 1rem; font-size: 0.9rem;">Voir le
                            projet</a>
                    </div>
                </div>

                <!-- Projet 4 -->
                <div class="portfolio-item" data-category="hydraulique">
                    <div class="portfolio-badge">Hydraulique</div>
                    <img src="./images/architecture.jpg"
                        alt="Réseau d'eau potable" class="portfolio-img">
                    <div class="portfolio-overlay">
                        <h3>Réseau d'eau potable</h3>
                        <p>Lubumbashi | 2021</p>
                        <a href="#" class="cta-button" style="padding: 0.5rem 1rem; font-size: 0.9rem;">Voir le
                            projet</a>
                    </div>
                </div>

                <!-- Projet 5 -->
                <div class="portfolio-item" data-category="architecture">
                    <div class="portfolio-badge">Architecture</div>
                    <img src="./images/architecture.jpg"
                        alt="Siège Social BCDC" class="portfolio-img">
                    <div class="portfolio-overlay">
                        <h3>Siège Social BCDC</h3>
                        <p>Gombe | 2022</p>
                        <a href="#" class="cta-button" style="padding: 0.5rem 1rem; font-size: 0.9rem;">Voir le
                            projet</a>
                    </div>
                </div>

                <!-- Projet 6 -->
                <div class="portfolio-item" data-category="civil">
                    <div class="portfolio-badge">Génie Civil</div>
                    <img src="./images/architecture.jpg"
                        alt="Complexe Sportif" class="portfolio-img">
                    <div class="portfolio-overlay">
                        <h3>Complexe Sportif</h3>
                        <p>Goma | 2021</p>
                        <a href="#" class="cta-button" style="padding: 0.5rem 1rem; font-size: 0.9rem;">Voir le
                            projet</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Blog Section -->
        <section class="blog-section">
            <div class="section-header">
                <h2>Notre Blog</h2>
                <p>Actualités, conseils et innovations dans le secteur de la construction</p>
            </div>

            <div class="blog-slider">
                <div class="slider-arrow left"><i class="fas fa-chevron-left"></i></div>
                <div class="blog-slider-container">
                    <!-- Article 1 -->
                    <div class="blog-card">
                        <img src="https://images.unsplash.com/photo-1605152276897-4f618f831968?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                            alt="Article 1" class="blog-img">
                        <div class="blog-content">
                            <div class="blog-date">
                                <i class="far fa-calendar-alt"></i> 15 Mars 2023
                            </div>
                            <h3>Les nouvelles normes parasismiques en RDC</h3>
                            <p>Découvrez comment nous adaptons nos constructions aux nouvelles réglementations
                                antisismiques pour une sécurité optimale...</p>
                        </div>
                    </div>

                    <!-- Article 2 -->
                    <div class="blog-card">
                        <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                            alt="Article 2" class="blog-img">
                        <div class="blog-content">
                            <div class="blog-date">
                                <i class="far fa-calendar-alt"></i> 28 Février 2023
                            </div>
                            <h3>Matériaux locaux : notre engagement écologique</h3>
                            <p>Comment nous intégrons de plus en plus de matériaux locaux et durables dans nos
                                constructions pour réduire notre empreinte carbone...</p>
                        </div>
                    </div>

                    <!-- Article 3 -->
                    <div class="blog-card">
                        <img src="https://images.unsplash.com/photo-1622372738946-62e02505feb3?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                            alt="Article 3" class="blog-img">
                        <div class="blog-content">
                            <div class="blog-date">
                                <i class="far fa-calendar-alt"></i> 10 Janvier 2023
                            </div>
                            <h3>Solutions hydrauliques innovantes pour zones rurales</h3>
                            <p>Présentation de notre nouveau système de distribution d'eau à faible coût pour les
                                communautés éloignées...</p>
                        </div>
                    </div>

                    <!-- Article 4 -->
                    <div class="blog-card">
                        <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                            alt="Article 4" class="blog-img">
                        <div class="blog-content">
                            <div class="blog-date">
                                <i class="far fa-calendar-alt"></i> 5 Décembre 2022
                            </div>
                            <h3>Innovations dans la construction commerciale</h3>
                            <p>Comment nous repensons les espaces commerciaux pour répondre aux nouvelles attentes des
                                consommateurs...</p>
                        </div>
                    </div>
                </div>
                <div class="slider-arrow right"><i class="fas fa-chevron-right"></i></div>

                <div class="slider-nav">
                    <div class="slider-dot active"></div>
                    <div class="slider-dot"></div>
                    <div class="slider-dot"></div>
                    <div class="slider-dot"></div>
                </div>
            </div>
        </section>

        <!-- Newsletter Section -->
        <section class="newsletter-section">
            <h3>Abonnez-vous à notre newsletter</h3>
            <p>Recevez nos dernières actualités, conseils et offres spéciales directement dans votre boîte mail</p>
            <form class="newsletter-form">
                <input type="email" placeholder="Votre email" class="newsletter-input" required>
                <button type="submit" class="newsletter-btn">S'abonner</button>
            </form>
        </section>
    </div>

    <footer>
        <?php include_once "footer.php" ?>
    </footer>
    <script src="assets/js/realisation.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>