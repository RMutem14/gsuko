<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À Propos - Gsuko Construct</title>
    <link rel="shortcut icon" href="./images/logonumber.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            /* Couleurs principales */
            --primary-color: #2c3e50;       /* Bleu foncé pour les titres et éléments importants */
            --secondary-color: #e74c3c;     /* Rouge orangé pour les accents et boutons */
            --accent-color: #3498db;        /* Bleu clair pour les liens et éléments interactifs */
            --light-color: #ecf0f1;         /* Fond clair */
            --dark-color: #2c3e50;          /* Texte foncé */
            --background-color: #f9f9f9;    /* Couleur de fond générale */
            
            /* Autres variables */
            --shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            --border-radius: 8px;
            --transition: all 0.3s ease;
        }

        /* Reset et base */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: var(--dark-color);
            background-color: var(--background-color);
        }

        /* Header */
        header {
            background-color: white;
            box-shadow: var(--shadow);
            position: fixed;
            width: 100%;
            z-index: 1000;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
            max-width: 1400px;
            margin: 0 auto;
        }

        nav img {
            height: 80px; /* Logo agrandi */
            transition: var(--transition);
        }

        .navigation ul {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .liens {
            text-decoration: none;
            color: var(--primary-color);
            font-weight: 600;
            transition: var(--transition);
            padding: 0.5rem 0;
            position: relative;
        }

        .liens:hover, .liens.active {
            color: var(--secondary-color);
        }

        .liens.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background-color: var(--secondary-color);
        }

        /* Boutons */
        .ct, .cta, .submit-btn, button[type="submit"] {
            background-color: var(--secondary-color);
            color: white;
            border: none;
            padding: 0.8rem 1.8rem;
            border-radius: var(--border-radius);
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            display: inline-block;
            text-decoration: none;
            text-align: center;
        }

        .ct:hover, .cta:hover, .submit-btn:hover, button[type="submit"]:hover {
            background-color: #c0392b;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(231, 76, 60, 0.3);
        }

        .cta {
            background-color: var(--primary-color);
        }

        .cta:hover {
            background-color: #1a252f;
        }

        /* Hero Section */
        .about-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1487958449943-2429e8be8625?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center/cover;
            height: 60vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            padding-top: 80px; /* Pour compenser le header fixe */
        }

        .about-hero-content {
            max-width: 800px;
            padding: 0 20px;
        }

        .about-hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        /* Sections communes */
        section {
            padding: 5rem 0;
        }

        .section-header {
            text-align: center;
            margin-bottom: 3rem;
            padding: 0 1rem;
        }

        .section-header h2 {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
            position: relative;
        }

        .section-header h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background-color: var(--secondary-color);
        }

        .section-header p {
            color: #666;
            font-size: 1.1rem;
            max-width: 700px;
            margin: 0 auto;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        /* About Section */
        .about-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .about-card {
            background: var(--light-color);
            padding: 2rem;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            text-align: center;
            transition: transform 0.3s ease;
        }

        .about-card:hover {
            transform: translateY(-10px);
        }

        .about-card i {
            font-size: 3rem;
            color: var(--secondary-color);
            margin-bottom: 1.5rem;
        }

        .about-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--primary-color);
        }

        /* Timeline Section */
        .timeline-container {
            position: relative;
            max-width: 1000px;
            margin: 0 auto;
        }

        .timeline-container::after {
            content: '';
            position: absolute;
            width: 4px;
            background-color: var(--secondary-color);
            top: 0;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
        }

        .timeline-item {
            padding: 20px 40px;
            position: relative;
            width: 50%;
            box-sizing: border-box;
            margin-bottom: 30px;
        }

        .timeline-item:nth-child(odd) {
            left: 0;
            text-align: right;
        }

        .timeline-item:nth-child(even) {
            left: 50%;
            text-align: left;
        }

        .timeline-content {
            padding: 20px;
            background-color: white;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            position: relative;
        }

        .timeline-content::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            background-color: white;
            border: 4px solid var(--secondary-color);
            border-radius: 50%;
            top: 30px;
        }

        .timeline-item:nth-child(odd) .timeline-content::after {
            right: -12px;
        }

        .timeline-item:nth-child(even) .timeline-content::after {
            left: -12px;
        }

        .timeline-year {
            font-weight: bold;
            color: var(--secondary-color);
            margin-bottom: 5px;
        }

        /* Team Section */
        .filter-buttons {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 1rem;
            margin-bottom: 3rem;
        }

        .filter-btn {
            padding: 0.8rem 1.5rem;
            background: var(--light-color);
            border: none;
            border-radius: 30px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .filter-btn.active, .filter-btn:hover {
            background: var(--secondary-color);
            color: white;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 2rem;
        }

        .team-card {
            background: white;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: all 0.3s ease;
            text-align: center;
        }

        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .team-img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .team-info {
            padding: 1.5rem;
        }

        .team-info h3 {
            font-size: 1.3rem;
            color: var(--primary-color);
            margin-bottom: 0.5rem;
        }

        .team-info p {
            color: var(--secondary-color);
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .team-position {
            display: inline-block;
            padding: 0.3rem 0.8rem;
            background: var(--light-color);
            border-radius: 30px;
            font-size: 0.8rem;
            margin-bottom: 1rem;
        }

        /* Stats Section */
        .stats-section {
            background-color: var(--primary-color);
            color: white;
            text-align: center;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 3rem;
            margin-top: 3rem;
        }

        .stat-item {
            padding: 2rem;
            background: rgba(255, 255, 255, 0.1);
            border-radius: var(--border-radius);
            transition: transform 0.3s ease;
        }

        .stat-item:hover {
            transform: scale(1.05);
            background: rgba(255, 255, 255, 0.15);
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: var(--secondary-color);
        }

        .stat-text {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        /* Testimonials Section */
        .testimonial-slider {
            display: flex;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            gap: 2rem;
            padding: 1rem 0;
            -webkit-overflow-scrolling: touch;
        }

        .testimonial-card {
            min-width: 300px;
            scroll-snap-align: start;
            background: white;
            padding: 2rem;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            position: relative;
        }

        .testimonial-card::before {
            content: '"';
            font-size: 5rem;
            color: var(--light-color);
            position: absolute;
            top: 10px;
            left: 20px;
            line-height: 1;
            z-index: 0;
        }

        .testimonial-content {
            position: relative;
            z-index: 1;
            margin-bottom: 1.5rem;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
        }

        .author-img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 1rem;
        }

        .author-info h4 {
            color: var(--primary-color);
            margin-bottom: 0.3rem;
        }

        .author-info p {
            color: var(--secondary-color);
            font-size: 0.9rem;
        }

        /* Footer */
        footer {
            background-color: var(--primary-color);
            color: white;
            padding: 5rem 1rem 2rem;
        }

        .footer-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-col h3 {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 1rem;
        }

        .footer-col h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 2px;
            background: var(--secondary-color);
        }

        .footer-about p {
            color: #bbb;
            line-height: 1.8;
            margin-bottom: 1.5rem;
        }

        .footer-links ul {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 1rem;
        }

        .footer-links a {
            color: #bbb;
            text-decoration: none;
            transition: var(--transition);
        }

        .footer-links a:hover {
            color: white;
            padding-left: 0.5rem;
        }

        .footer-contact p {
            display: flex;
            align-items: flex-start;
            gap: 0.5rem;
            color: #bbb;
            margin-bottom: 1rem;
            line-height: 1.6;
        }

        .footer-contact i {
            color: var(--secondary-color);
            margin-top: 0.3rem;
        }

        .copyright {
            text-align: center;
            padding-top: 2rem;
            margin-top: 3rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #bbb;
            font-size: 0.9rem;
        }

        /* Menu Burger */
        .burger {
            display: none;
            cursor: pointer;
            font-size: 1.5rem;
            color: var(--primary-color);
            transition: var(--transition);
        }

        .burger:hover {
            color: var(--secondary-color);
        }

        /* Menu mobile */
        .mobile-menu {
            position: fixed;
            top: 0;
            left: -100%;
            width: 80%;
            max-width: 300px;
            height: 100vh;
            background-color: white;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
            z-index: 1100;
            transition: all 0.5s ease;
            padding: 2rem;
            overflow-y: auto;
        }

        .mobile-menu.active {
            left: 0;
        }

        .mobile-menu ul {
            list-style: none;
            margin-top: 2rem;
        }

        .mobile-menu li {
            margin-bottom: 1.5rem;
        }

        .mobile-menu .liens {
            display: block;
            padding: 0.5rem 0;
        }

        .close-menu {
            position: absolute;
            top: 1rem;
            right: 1rem;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--primary-color);
        }

        .menu-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1050;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .menu-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        /* Sous-menu Services */
        .services-dropdown {
            position: relative;
        }

        .services-submenu {
            position: absolute;
            top: 100%;
            left: 0;
            background-color: white;
            box-shadow: var(--shadow);
            border-radius: var(--border-radius);
            padding: 1rem;
            width: 200px;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 100;
        }

        .services-dropdown:hover .services-submenu {
            opacity: 1;
            visibility: visible;
        }

        .services-submenu li {
            margin-bottom: 0.5rem;
        }

        .services-submenu a {
            color: var(--primary-color);
            text-decoration: none;
            transition: var(--transition);
            display: block;
            padding: 0.5rem;
        }

        .services-submenu a:hover {
            color: var(--secondary-color);
            padding-left: 1rem;
        }

        /* Bouton devis responsive */
        .devis-btn.desktop {
            display: inline-block;
        }

        .devis-btn.mobile {
            display: none;
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .timeline-container::after {
                left: 31px;
            }

            .timeline-item {
                width: 100%;
                padding-left: 70px;
                padding-right: 25px;
                text-align: left !important;
            }

            .timeline-item:nth-child(even) {
                left: 0;
            }

            .timeline-content::after {
                left: 18px !important;
            }
        }

        @media (max-width: 992px) {
            .content-grid, .contact-container {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .about-hero h1 {
                font-size: 2.5rem;
            }
            
            .section-header h2 {
                font-size: 2rem;
            }
            
            .navigation {
                display: none;
            }
            
            .burger {
                display: block;
            }

            /* Bouton devis responsive */
            .devis-btn.desktop {
                display: none;
            }

            .devis-btn.mobile {
                display: inline-block;
                background: none;
                border: none;
                color: var(--secondary-color);
                font-size: 1.5rem;
                padding: 0.5rem;
            }

            /* Sous-menu Services en mobile */
            .services-dropdown {
                position: static;
            }

            .services-submenu {
                position: static;
                width: 100%;
                box-shadow: none;
                opacity: 1;
                visibility: visible;
                display: none;
                padding: 0.5rem 0 0 1rem;
            }

            .services-dropdown:hover .services-submenu {
                display: block;
            }

            /* Logo en mobile */
            nav img {
                height: 70px;
            }
        }

        @media (max-width: 576px) {
            nav {
                padding: 1rem;
            }

            .about-hero h1 {
                font-size: 2rem;
            }

            .section-header h2 {
                font-size: 1.8rem;
            }

            /* Logo en très petits écrans */
            nav img {
                height: 60px;
            }
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <img src="./images/logosociete.png" alt="le logo de la societe">
            <div class="navigation">
                <ul>
                    <li>
                        <a href="index.php" class="liens">
                            Acceuil
                        </a>
                    </li>
                    <li class="services-dropdown">
                        <a href="services.php" class="liens">
                            Services
                        </a>
                        <ul class="services-submenu">
                            <li><a href="#">Architecture</a></li>
                            <li><a href="#">Genie Civil</a></li>
                            <li><a href="#">Commerciale</a></li>
                            <li><a href="#">Hydraulique</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="propos.php" class="liens active">
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
                <div class="burger"><i class="fa-solid fa-bars fa-2xl"></i></div>
            </div>
            <button class="ct devis-btn desktop">Faites votre devis</button>
        </nav>
    </header>

    <!-- Menu mobile -->
    <div class="mobile-menu">
        <div class="close-menu"><i class="fas fa-times"></i></div>
        <ul>
            <li>
                <a href="index.php" class="liens">
                    Acceuil
                </a>
            </li>
            <li class="services-dropdown">
                <a href="services.php" class="liens">
                    Services
                </a>
                <ul class="services-submenu">
                    <li><a href="#">Architecture</a></li>
                    <li><a href="#">Genie Civil</a></li>
                    <li><a href="#">Commerciale</a></li>
                    <li><a href="#">Hydraulique</a></li>
                </ul>
            </li>
            <li>
                <a href="propos.php" class="liens active">
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
        <button class="ct" style="margin-top: 2rem;">Faites votre devis</button>
    </div>
    <div class="menu-overlay"></div>
    
    <main>
        <!-- Hero Section -->
        <section class="about-hero">
            <div class="about-hero-content">
                <h1>Notre Histoire, Notre Engagement</h1>
                <p>Depuis 2005, Gsuko Construct bâtit l'avenir avec excellence et innovation dans le secteur de la construction en RDC.</p>
            </div>
        </section>

        <!-- About Section -->
        <section class="about-section">
            <div class="container">
                <div class="section-header">
                    <h2>Qui Sommes-Nous ?</h2>
                    <p>Gsuko Construct est bien plus qu'une entreprise de construction, nous sommes des bâtisseurs de rêves et des créateurs d'espaces de vie.</p>
                </div>

                <div class="about-grid">
                    <div class="about-card">
                        <i class="fas fa-bullseye"></i>
                        <h3>Notre Mission</h3>
                        <p>Fournir des solutions de construction innovantes, durables et adaptées aux besoins spécifiques de chaque client, tout en respectant les délais et les budgets.</p>
                    </div>

                    <div class="about-card">
                        <i class="fas fa-eye"></i>
                        <h3>Notre Vision</h3>
                        <p>Devenir le leader incontesté de la construction en RDC en promouvant l'excellence, l'innovation et le développement durable dans tous nos projets.</p>
                    </div>

                    <div class="about-card">
                        <i class="fas fa-handshake"></i>
                        <h3>Nos Valeurs</h3>
                        <p>Intégrité, Qualité, Innovation, Respect de l'environnement et Engagement envers nos clients et nos collaborateurs.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- History Section -->
        <section class="history-section">
            <div class="container">
                <div class="section-header">
                    <h2>Notre Parcours</h2>
                    <p>L'évolution de Gsuko Construct à travers les années</p>
                </div>

                <div class="timeline-container">
                    <div class="timeline-item">
                        <div class="timeline-content">
                            <div class="timeline-year">2005</div>
                            <h3>Fondation</h3>
                            <p>Création de Gsuko Construct par M. Gabriel Sukami avec une petite équipe spécialisée dans les travaux de maçonnerie résidentielle.</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-content">
                            <div class="timeline-year">2010</div>
                            <h3>Premier Grand Projet</h3>
                            <p>Réalisation de notre premier projet commercial d'envergure : un centre commercial de 3 étages à Kinshasa qui nous a fait connaître sur le marché.</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-content">
                            <div class="timeline-year">2015</div>
                            <h3>Certification ISO</h3>
                            <p>Obtention de la certification ISO 9001 pour notre système de management de la qualité, marquant un tournant dans notre professionnalisme.</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-content">
                            <div class="timeline-year">2018</div>
                            <h3>Expansion Nationale</h3>
                            <p>Ouverture de nos filiales à Lubumbashi et Goma, avec un effectif qui passe à 75 employés permanents et une couverture nationale.</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-content">
                            <div class="timeline-year">2022</div>
                            <h3>Innovation Durable</h3>
                            <p>Lancement de notre département dédié aux constructions écologiques utilisant des matériaux locaux et des techniques durables.</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-content">
                            <div class="timeline-year">2023</div>
                            <h3>Reconnaissance</h3>
                            <p>Prix d'excellence du meilleur constructeur en RDC avec plus de 150 projets réalisés et une équipe de 120 professionnels qualifiés.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section class="team-section">
            <div class="container">
                <div class="section-header">
                    <h2>Notre Équipe</h2>
                    <p>Des professionnels qualifiés pour chaque aspect de votre projet</p>
                </div>

                <!-- Filtres -->
                <div class="filter-buttons">
                    <button class="filter-btn active" data-filter="all">Tous</button>
                    <button class="filter-btn" data-filter="management">Direction</button>
                    <button class="filter-btn" data-filter="engineering">Ingénierie</button>
                    <button class="filter-btn" data-filter="architecture">Architecture</button>
                    <button class="filter-btn" data-filter="construction">Chantier</button>
                </div>

                <!-- Grille des membres -->
                <div class="team-grid">
                    <!-- Direction -->
                    <div class="team-card" data-category="management">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Gabriel Sukami" class="team-img">
                        <div class="team-info">
                            <h3>Gabriel Sukami</h3>
                            <span class="team-position">Directeur Général</span>
                            <p>Fondateur et visionnaire</p>
                        </div>
                    </div>

                    <!-- Architecture -->
                    <div class="team-card" data-category="architecture">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Marie-Louise Mbemba" class="team-img">
                        <div class="team-info">
                            <h3>Marie-Louise Mbemba</h3>
                            <span class="team-position">Architecte Principale</span>
                            <p>Design et planification</p>
                        </div>
                    </div>

                    <!-- Ingénierie -->
                    <div class="team-card" data-category="engineering">
                        <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Patrick Ntumba" class="team-img">
                        <div class="team-info">
                            <h3>Patrick Ntumba</h3>
                            <span class="team-position">Ingénieur en Chef</span>
                            <p>Calculs et stabilité</p>
                        </div>
                    </div>

                    <!-- Chantier -->
                    <div class="team-card" data-category="construction">
                        <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Yvette Kanku" class="team-img">
                        <div class="team-info">
                            <h3>Yvette Kanku</h3>
                            <span class="team-position">Cheffe de Chantier</span>
                            <p>Supervision des travaux</p>
                        </div>
                    </div>

                    <!-- Ingénierie -->
                    <div class="team-card" data-category="engineering">
                        <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Didier Mbuyi" class="team-img">
                        <div class="team-info">
                            <h3>Didier Mbuyi</h3>
                            <span class="team-position">Ingénieur Électricien</span>
                            <p>Installations électriques</p>
                        </div>
                    </div>

                    <!-- Chantier -->
                    <div class="team-card" data-category="construction">
                        <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Joseph Kalala" class="team-img">
                        <div class="team-info">
                            <h3>Joseph Kalala</h3>
                            <span class="team-position">Maître Maçon</span>
                            <p>Maçonnerie experte</p>
                        </div>
                    </div>

                    <!-- Architecture -->
                    <div class="team-card" data-category="architecture">
                        <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Jonathan Kabasele" class="team-img">
                        <div class="team-info">
                            <h3>Jonathan Kabasele</h3>
                            <span class="team-position">Designer d'Intérieur</span>
                            <p>Aménagements intérieurs</p>
                        </div>
                    </div>

                    <!-- Direction -->
                    <div class="team-card" data-category="management">
                        <img src="https://images.unsplash.com/photo-1546820389-44d77e1f3b31?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Sarah Mwamba" class="team-img">
                        <div class="team-info">
                            <h3>Sarah Mwamba</h3>
                            <span class="team-position">Directrice Financière</span>
                            <p>Gestion et comptabilité</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Section améliorée -->
        <section class="stats-section">
            <div class="container">
                <div class="section-header">
                    <h2>Notre Impact en Chiffres</h2>
                    <p>Des réalisations concrètes qui témoignent de notre expertise</p>
                </div>

                <div class="stats-grid">
                    <div class="stat-item">
                        <div class="stat-number">18</div>
                        <div class="stat-text">Ans d'Expérience</div>
                    </div>

                    <div class="stat-item">
                        <div class="stat-number">150+</div>
                        <div class="stat-text">Projets Réalisés</div>
                    </div>

                    <div class="stat-item">
                        <div class="stat-number">250K+</div>
                        <div class="stat-text">m² Construits</div>
                    </div>

                    <div class="stat-item">
                        <div class="stat-number">98%</div>
                        <div class="stat-text">Clients Satisfaits</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Nouvelle section témoignages -->
        <section class="testimonials-section">
            <div class="container">
                <div class="section-header">
                    <h2>Témoignages</h2>
                    <p>Ce que nos clients disent de nous</p>
                </div>

                <div class="testimonials-container">
                    <div class="testimonial-slider">
                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <p>"Gsuko Construct a transformé notre vision en réalité. Leur professionnalisme et leur attention aux détails ont dépassé nos attentes. Le projet a été livré à temps et dans le budget prévu."</p>
                            </div>
                            <div class="testimonial-author">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Jean Mulumba" class="author-img">
                                <div class="author-info">
                                    <h4>Jean Mulumba</h4>
                                    <p>Directeur, Société ABC</p>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <p>"Travailler avec Gsuko a été une expérience exceptionnelle. Leur équipe a su comprendre nos besoins spécifiques et proposer des solutions innovantes. La qualité de construction est remarquable."</p>
                            </div>
                            <div class="testimonial-author">
                                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Sophie Kanda" class="author-img">
                                <div class="author-info">
                                    <h4>Sophie Kanda</h4>
                                    <p>Propriétaire, Résidence Les Palmiers</p>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <p>"En tant qu'investisseur étranger, je cherchais une entreprise fiable en RDC. Gsuko a été un partenaire idéal, transparent et professionnel à chaque étape de notre projet hôtelier."</p>
                            </div>
                            <div class="testimonial-author">
                                <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="David Müller" class="author-img">
                                <div class="author-info">
                                    <h4>David Müller</h4>
                                    <p>Investisseur International</p>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <p>"Le suivi post-construction de Gsuko est exemplaire. Deux ans après la livraison, ils restent disponibles pour toute question. C'est ce genre de service qui fait la différence."</p>
                            </div>
                            <div class="testimonial-author">
                                <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Grace Mbayo" class="author-img">
                                <div class="author-info">
                                    <h4>Grace Mbayo</h4>
                                    <p>Directrice, École Primaire Bondeko</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-container">
            <div class="footer-col footer-about">
                <h3>Gsuko Construct</h3>
                <p>Leader congolais en construction, génie civil et architecture, engagé dans le développement durable de la RDC.</p>
                <div class="social-links">
                    <a href="#" class="social-link" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-link" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
                    <a href="#" class="social-link" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="mailto:contact@gsuko-construct.cd" class="social-link" aria-label="Email"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
            
            <div class="footer-col footer-links">
                <h3>Liens rapides</h3>
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="propos.php">À propos</a></li>
                    <li><a href="realisation.php">Réalisations</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            
            <div class="footer-col footer-links">
                <h3>Nos services</h3>
                <ul>
                    <li><a href="#">Architecture</a></li>
                    <li><a href="#">Génie civil</a></li>
                    <li><a href="#">Construction commerciale</a></li>
                    <li><a href="#">Ingénierie hydraulique</a></li>
                    <li><a href="#">Consultation</a></li>
                </ul>
            </div>
            
            <div class="footer-col footer-contact">
                <h3>Contact</h3>
                <p><i class="fas fa-map-marker-alt"></i> 123 Avenue Lumumba, Gombe, Kinshasa, RDC</p>
                <p><i class="fas fa-phone-alt"></i> +243 81 234 5678</p>
                <p><i class="fas fa-envelope"></i> contact@gsuko-construct.cd</p>
                <p><i class="fas fa-clock"></i> Lun-Ven: 8h00-17h00</p>
            </div>
        </div>
        
        <div class="copyright">
            <p>&copy; 2023 Gsuko Construct. Tous droits réservés. | Entreprise congolaise enregistrée sous le numéro RC12345</p>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Filtrage des membres de l'équipe
            const filterButtons = document.querySelectorAll('.filter-btn');
            const teamCards = document.querySelectorAll('.team-card');

            filterButtons.forEach(button => {
                button.addEventListener('click', () => {
                    // Active le bouton cliqué
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    button.classList.add('active');

                    const filterValue = button.getAttribute('data-filter');

                    teamCards.forEach(card => {
                        if (filterValue === 'all' || card.getAttribute('data-category') === filterValue) {
                            card.style.display = 'block';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                });
            });

            // Animation pour la timeline
            const timelineItems = document.querySelectorAll('.timeline-item');

            function checkTimelineAnimation() {
                const triggerBottom = window.innerHeight / 5 * 4;

                timelineItems.forEach(item => {
                    const itemTop = item.getBoundingClientRect().top;

                    if (itemTop < triggerBottom) {
                        item.style.opacity = '1';
                        item.style.transform = 'translateY(0)';
                    }
                });
            }

            // Initial state
            timelineItems.forEach(item => {
                item.style.opacity = '0';
                item.style.transform = 'translateY(50px)';
                item.style.transition = 'all 0.5s ease';
            });

            window.addEventListener('scroll', checkTimelineAnimation);
            checkTimelineAnimation(); // Run once on load

            // Menu burger
            const burger = document.querySelector('.burger');
            const mobileMenu = document.querySelector('.mobile-menu');
            const overlay = document.querySelector('.menu-overlay');
            const closeMenu = document.querySelector('.close-menu');

            burger.addEventListener('click', function() {
                mobileMenu.classList.add('active');
                overlay.classList.add('active');
                document.body.style.overflow = 'hidden';
            });

            closeMenu.addEventListener('click', function() {
                mobileMenu.classList.remove('active');
                overlay.classList.remove('active');
                document.body.style.overflow = '';
            });

            overlay.addEventListener('click', function() {
                mobileMenu.classList.remove('active');
                overlay.classList.remove('active');
                document.body.style.overflow = '';
            });
        });
    </script>
</body>
</html>