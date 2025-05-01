<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réalisations & Blog - Gsuko Construct</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #2c3e50;
            --secondary: #e74c3c;
            --accent: #3498db;
            --light: #ecf0f1;
            --dark: #2c3e50;
            --shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            --border-radius: 8px;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            color: var(--dark);
            background-color: #f9f9f9;
            line-height: 1.6;
        }
        
        /* Header */
        header {
            background: white;
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
            height: 70px; /* Logo agrandi */
            transition: all 0.3s ease;
        }
        
        .navigation ul {
            display: flex;
            list-style: none;
            gap: 2rem;
        }
        
        .liens {
            text-decoration: none;
            color: var(--primary);
            font-weight: 600;
            transition: all 0.3s ease;
            padding: 0.5rem 0;
            position: relative;
        }
        
        .liens:hover, .liens.active {
            color: var(--secondary);
        }
        
        .liens.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background-color: var(--secondary);
        }
        
        .ct, .cta-button {
            background-color: var(--secondary);
            color: white;
            border: none;
            padding: 0.8rem 1.8rem;
            border-radius: var(--border-radius);
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-block;
            text-decoration: none;
            text-align: center;
        }
        
        .ct:hover, .cta-button:hover {
            background-color: #c0392b;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(231, 76, 60, 0.3);
        }

        /* Services dropdown */
        .services-dropdown {
            position: relative;
        }
        
        .services-dropdown:hover .dropdown-content {
            display: block;
        }
        
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            min-width: 200px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
            z-index: 1;
            border-radius: var(--border-radius);
            padding: 0.5rem 0;
            top: 100%;
            left: 0;
        }
        
        .dropdown-content a {
            color: var(--primary);
            padding: 0.8rem 1rem;
            text-decoration: none;
            display: block;
            transition: all 0.3s ease;
        }
        
        .dropdown-content a:hover {
            background-color: #f5f5f5;
            color: var(--secondary);
            padding-left: 1.5rem;
        }

        /* Burger menu */
        .burger {
            display: none;
            cursor: pointer;
            font-size: 1.5rem;
        }
        
        .mobile-devis {
            display: none;
            background: none;
            border: none;
            color: var(--secondary);
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* Mobile menu */
        .mobile-menu {
            position: fixed;
            top: 0;
            right: -100%;
            width: 80%;
            max-width: 350px;
            height: 100vh;
            background: white;
            box-shadow: -5px 0 15px rgba(0,0,0,0.1);
            z-index: 1001;
            transition: all 0.5s cubic-bezier(0.77,0.2,0.05,1.0);
            padding: 2rem;
            overflow-y: auto;
        }
        
        .mobile-menu.active {
            right: 0;
        }
        
        .mobile-menu ul {
            list-style: none;
            margin-top: 2rem;
        }
        
        .mobile-menu li {
            margin-bottom: 1.5rem;
        }
        
        .mobile-menu a {
            text-decoration: none;
            color: var(--primary);
            font-size: 1.2rem;
            font-weight: 600;
        }
        
        .mobile-menu .dropdown-content {
            position: static;
            box-shadow: none;
            display: none;
            padding-left: 1rem;
            margin-top: 0.5rem;
        }
        
        .mobile-menu .dropdown-content a {
            font-size: 1rem;
            padding: 0.5rem 0;
        }
        
        .mobile-menu .services-dropdown.active .dropdown-content {
            display: block;
        }
        
        .close-menu {
            position: absolute;
            top: 1rem;
            right: 1rem;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--primary);
        }
        
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 1000;
            opacity: 0;
            pointer-events: none;
            transition: all 0.3s ease;
        }
        
        .overlay.active {
            opacity: 1;
            pointer-events: all;
        }

        /* Hero Section */
        .portfolio-hero {
            background: linear-gradient(rgba(44, 62, 80, 0.8), rgba(44, 62, 80, 0.8)), 
                        url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 180px 2rem 100px;
        }
        
        .portfolio-hero h1 {
            font-size: 4rem; /* Taille augmentée pour desktop */
            margin-bottom: 1.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            font-weight: 800;
            line-height: 1.2;
        }
        
        .portfolio-hero p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }

        /* Main Content */
        .main-content {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        /* Portfolio Section */
        .portfolio-section {
            padding: 5rem 0;
        }
        
        .section-header {
            text-align: center;
            margin-bottom: 3rem;
        }
        
        .section-header h2 {
            font-size: 2.5rem;
            color: var(--primary);
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
            background-color: var(--secondary);
        }
        
        .section-header p {
            color: #666;
            font-size: 1.1rem;
            max-width: 700px;
            margin: 0 auto;
        }

        .portfolio-filter {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 1rem;
            margin-bottom: 3rem;
        }
        
        .filter-btn {
            padding: 0.8rem 1.8rem;
            background: #f5f5f5;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .filter-btn.active, .filter-btn:hover {
            background: var(--secondary);
            color: white;
        }

        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 2rem;
        }
        
        .portfolio-item {
            position: relative;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: all 0.3s ease;
        }
        
        .portfolio-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }
        
        .portfolio-img {
            height: 250px;
            width: 100%;
            object-fit: cover;
            display: block;
        }
        
        .portfolio-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(44, 62, 80, 0.9), transparent);
            padding: 2rem 1.5rem 1.5rem;
            color: white;
            transform: translateY(100%);
            transition: all 0.3s ease;
        }
        
        .portfolio-item:hover .portfolio-overlay {
            transform: translateY(0);
        }
        
        .portfolio-overlay h3 {
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
        }
        
        .portfolio-overlay p {
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }
        
        .portfolio-badge {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: var(--secondary);
            color: white;
            padding: 0.3rem 0.8rem;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        /* Blog Section */
        .blog-section {
            padding: 5rem 0;
            background: white;
            position: relative;
        }
        
        .blog-slider {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
            overflow: hidden;
        }
        
        .blog-slider-container {
            display: flex;
            transition: transform 0.5s ease;
            padding: 20px 0;
        }
        
        .blog-card {
            background: white;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: all 0.3s ease;
            min-width: 350px;
            margin: 0 15px;
            flex-shrink: 0;
        }
        
        .blog-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }
        
        .blog-img {
            height: 200px;
            width: 100%;
            object-fit: cover;
        }
        
        .blog-content {
            padding: 1.5rem;
        }
        
        .blog-date {
            font-size: 0.8rem;
            color: var(--secondary);
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .blog-date i {
            font-size: 0.9rem;
        }
        
        .blog-content h3 {
            font-size: 1.3rem;
            color: var(--primary);
            margin-bottom: 1rem;
            line-height: 1.4;
        }
        
        .blog-content p {
            color: #666;
            font-size: 0.95rem;
            margin-bottom: 1rem;
            line-height: 1.6;
        }
        
        .slider-nav {
            display: flex;
            justify-content: center;
            margin-top: 2rem;
            gap: 1rem;
        }
        
        .slider-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #ddd;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .slider-dot.active {
            background: var(--secondary);
            transform: scale(1.2);
        }
        
        .slider-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            z-index: 10;
            transition: all 0.3s ease;
        }
        
        .slider-arrow:hover {
            background: var(--secondary);
            color: white;
        }
        
        .slider-arrow.left {
            left: -20px;
        }
        
        .slider-arrow.right {
            right: -20px;
        }

        /* Newsletter Section */
        .newsletter-section {
            padding: 4rem 2rem;
            background: linear-gradient(135deg, var(--primary), #34495e);
            color: white;
            text-align: center;
            border-radius: var(--border-radius);
            margin: 3rem 0;
        }
        
        .newsletter-section h3 {
            font-size: 1.8rem;
            margin-bottom: 1rem;
        }
        
        .newsletter-section p {
            max-width: 600px;
            margin: 0 auto 2rem;
            color: #ddd;
        }
        
        .newsletter-form {
            display: flex;
            max-width: 500px;
            margin: 0 auto;
        }
        
        .newsletter-input {
            flex: 1;
            padding: 0.8rem 1rem;
            border: none;
            border-radius: var(--border-radius) 0 0 var(--border-radius);
            font-size: 1rem;
        }
        
        .newsletter-btn {
            background: var(--secondary);
            color: white;
            border: none;
            padding: 0 1.8rem;
            border-radius: 0 var(--border-radius) var(--border-radius) 0;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .newsletter-btn:hover {
            background: #c0392b;
        }

        /* Footer */
        footer {
            background-color: var(--primary);
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
            background: var(--secondary);
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
            transition: all 0.3s ease;
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
            color: var(--secondary);
            margin-top: 0.3rem;
        }

        .social-links {
            display: flex;
            gap: 1rem;
        }

        .social-link {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
            transition: all 0.3s ease;
        }

        .social-link:hover {
            background: var(--secondary);
            transform: translateY(-3px);
        }

        .copyright {
            text-align: center;
            padding-top: 2rem;
            margin-top: 3rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #bbb;
            font-size: 0.9rem;
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .portfolio-hero h1 {
                font-size: 3.5rem;
            }
        }

        @media (max-width: 992px) {
            .portfolio-grid {
                grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            }
            
            .blog-card {
                min-width: 300px;
            }
            
            .portfolio-hero h1 {
                font-size: 3rem;
            }
        }

        @media (max-width: 768px) {
            .burger, .mobile-devis {
                display: block;
            }
            
            .navigation, .ct {
                display: none;
            }
            
            .portfolio-hero h1 {
                font-size: 2.5rem;
            }
            
            .section-header h2 {
                font-size: 2rem;
            }
            
            .newsletter-form {
                flex-direction: column;
            }
            
            .newsletter-input {
                border-radius: var(--border-radius);
                margin-bottom: 1rem;
            }
            
            .newsletter-btn {
                border-radius: var(--border-radius);
                padding: 0.8rem;
            }
            
            .slider-arrow {
                display: none;
            }
            
            .blog-card {
                min-width: 280px;
                margin: 0 10px;
            }
            
            nav img {
                height: 60px;
            }
        }

        @media (max-width: 576px) {
            nav {
                padding: 1rem;
            }
            
            .portfolio-hero {
                padding: 130px 1rem 60px;
            }
            
            .portfolio-hero h1 {
                font-size: 2rem;
            }
            
            .portfolio-grid {
                grid-template-columns: 1fr;
            }
            
            .filter-btn {
                padding: 0.6rem 1.2rem;
                font-size: 0.9rem;
            }
            
            .blog-card {
                min-width: 260px;
            }
            
            nav img {
                height: 50px;
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
                            Services <i class="fas fa-chevron-down"></i>
                        </a>
                        <div class="dropdown-content">
                            <a href="#">Architecture</a>
                            <a href="#">Génie Civil</a>
                            <a href="#">Commerciale</a>
                            <a href="#">Hydraulique</a>
                        </div>
                    </li>
                    <li>
                        <a href="apropos.php" class="liens">
                            À propos
                        </a>
                    </li>
                    <li>
                        <a href="realisations.php" class="liens active">
                            Réalisations
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
                <button class="mobile-devis"><i class="fas fa-file-invoice-dollar fa-xl"></i></button>
                <div class="burger"><i class="fa-solid fa-bars fa-xl"></i></div>
            </div>
            <button class="ct">Faites votre devis</button>
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
                    <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Résidence Les Palmiers" class="portfolio-img">
                    <div class="portfolio-overlay">
                        <h3>Résidence Les Palmiers</h3>
                        <p>Kinshasa | 2023</p>
                        <a href="#" class="cta-button" style="padding: 0.5rem 1rem; font-size: 0.9rem;">Voir le projet</a>
                    </div>
                </div>

                <!-- Projet 2 -->
                <div class="portfolio-item" data-category="civil">
                    <div class="portfolio-badge">Génie Civil</div>
                    <img src="https://images.unsplash.com/photo-1479839672679-a46483c0e7c8?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Pont sur la Lukunga" class="portfolio-img">
                    <div class="portfolio-overlay">
                        <h3>Pont sur la Lukunga</h3>
                        <p>Kinshasa | 2022</p>
                        <a href="#" class="cta-button" style="padding: 0.5rem 1rem; font-size: 0.9rem;">Voir le projet</a>
                    </div>
                </div>

                <!-- Projet 3 -->
                <div class="portfolio-item" data-category="commercial">
                    <div class="portfolio-badge">Commercial</div>
                    <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Centre Commercial Kin Plaza" class="portfolio-img">
                    <div class="portfolio-overlay">
                        <h3>Centre Commercial Kin Plaza</h3>
                        <p>Gombe | 2023</p>
                        <a href="#" class="cta-button" style="padding: 0.5rem 1rem; font-size: 0.9rem;">Voir le projet</a>
                    </div>
                </div>

                <!-- Projet 4 -->
                <div class="portfolio-item" data-category="hydraulique">
                    <div class="portfolio-badge">Hydraulique</div>
                    <img src="https://images.unsplash.com/photo-1622372738946-62e02505feb3?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Réseau d'eau potable" class="portfolio-img">
                    <div class="portfolio-overlay">
                        <h3>Réseau d'eau potable</h3>
                        <p>Lubumbashi | 2021</p>
                        <a href="#" class="cta-button" style="padding: 0.5rem 1rem; font-size: 0.9rem;">Voir le projet</a>
                    </div>
                </div>

                <!-- Projet 5 -->
                <div class="portfolio-item" data-category="architecture">
                    <div class="portfolio-badge">Architecture</div>
                    <img src="https://images.unsplash.com/photo-1582268611958-ebfd161ef9cf?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Siège Social BCDC" class="portfolio-img">
                    <div class="portfolio-overlay">
                        <h3>Siège Social BCDC</h3>
                        <p>Gombe | 2022</p>
                        <a href="#" class="cta-button" style="padding: 0.5rem 1rem; font-size: 0.9rem;">Voir le projet</a>
                    </div>
                </div>

                <!-- Projet 6 -->
                <div class="portfolio-item" data-category="civil">
                    <div class="portfolio-badge">Génie Civil</div>
                    <img src="https://images.unsplash.com/photo-1508804185872-d7badad00f7d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Complexe Sportif" class="portfolio-img">
                    <div class="portfolio-overlay">
                        <h3>Complexe Sportif</h3>
                        <p>Goma | 2021</p>
                        <a href="#" class="cta-button" style="padding: 0.5rem 1rem; font-size: 0.9rem;">Voir le projet</a>
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
                        <img src="https://images.unsplash.com/photo-1605152276897-4f618f831968?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Article 1" class="blog-img">
                        <div class="blog-content">
                            <div class="blog-date">
                                <i class="far fa-calendar-alt"></i> 15 Mars 2023
                            </div>
                            <h3>Les nouvelles normes parasismiques en RDC</h3>
                            <p>Découvrez comment nous adaptons nos constructions aux nouvelles réglementations antisismiques pour une sécurité optimale...</p>
                        </div>
                    </div>

                    <!-- Article 2 -->
                    <div class="blog-card">
                        <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Article 2" class="blog-img">
                        <div class="blog-content">
                            <div class="blog-date">
                                <i class="far fa-calendar-alt"></i> 28 Février 2023
                            </div>
                            <h3>Matériaux locaux : notre engagement écologique</h3>
                            <p>Comment nous intégrons de plus en plus de matériaux locaux et durables dans nos constructions pour réduire notre empreinte carbone...</p>
                        </div>
                    </div>

                    <!-- Article 3 -->
                    <div class="blog-card">
                        <img src="https://images.unsplash.com/photo-1622372738946-62e02505feb3?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Article 3" class="blog-img">
                        <div class="blog-content">
                            <div class="blog-date">
                                <i class="far fa-calendar-alt"></i> 10 Janvier 2023
                            </div>
                            <h3>Solutions hydrauliques innovantes pour zones rurales</h3>
                            <p>Présentation de notre nouveau système de distribution d'eau à faible coût pour les communautés éloignées...</p>
                        </div>
                    </div>

                    <!-- Article 4 -->
                    <div class="blog-card">
                        <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Article 4" class="blog-img">
                        <div class="blog-content">
                            <div class="blog-date">
                                <i class="far fa-calendar-alt"></i> 5 Décembre 2022
                            </div>
                            <h3>Innovations dans la construction commerciale</h3>
                            <p>Comment nous repensons les espaces commerciaux pour répondre aux nouvelles attentes des consommateurs...</p>
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
                    <li><a href="apropos.php">À propos</a></li>
                    <li><a href="realisation.php" class="active">Réalisations</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            
            <div class="footer-col footer-links">
                <h3>Catégories</h3>
                <ul>
                    <li><a href="#">Architecture</a></li>
                    <li><a href="#">Génie civil</a></li>
                    <li><a href="#">Construction durable</a></li>
                    <li><a href="#">Innovations</a></li>
                    <li><a href="#">Actualités</a></li>
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
            <p>&copy; 2025 Gsuko Construct. Tous droits réservés. | Entreprise congolaise enregistrée sous le numéro RC12345</p>
        </div>
    </footer>

    <script>
        // Portfolio Filter
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.filter-btn');
            const portfolioItems = document.querySelectorAll('.portfolio-item');
            
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    // Add active class to clicked button
                    this.classList.add('active');
                    
                    const filterValue = this.getAttribute('data-filter');
                    
                    portfolioItems.forEach(item => {
                        if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                            item.style.display = 'block';
                            setTimeout(() => {
                                item.style.opacity = '1';
                                item.style.transform = 'translateY(0)';
                            }, 50);
                        } else {
                            item.style.opacity = '0';
                            item.style.transform = 'translateY(20px)';
                            setTimeout(() => {
                                item.style.display = 'none';
                            }, 300);
                        }
                    });
                });
            });
            
            // Animation for portfolio items
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, { threshold: 0.1 });
            
            portfolioItems.forEach((item, index) => {
                item.style.opacity = '0';
                item.style.transform = 'translateY(20px)';
                item.style.transition = `opacity 0.5s ease ${index * 0.1}s, transform 0.5s ease ${index * 0.1}s`;
                observer.observe(item);
            });
            
            // Mobile menu toggle
            const burger = document.querySelector('.burger');
            const mobileMenu = document.querySelector('.mobile-menu');
            const overlay = document.querySelector('.overlay');
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
            
            // Services dropdown in mobile menu
            const mobileServices = document.querySelector('.mobile-menu .services-dropdown');
            if (mobileServices) {
                mobileServices.addEventListener('click', function(e) {
                    if (e.target.tagName === 'A') {
                        e.preventDefault();
                        this.classList.toggle('active');
                    }
                });
            }
            
            // Blog Slider
            const sliderContainer = document.querySelector('.blog-slider-container');
            const slides = document.querySelectorAll('.blog-card');
            const dots = document.querySelectorAll('.slider-dot');
            const arrowLeft = document.querySelector('.slider-arrow.left');
            const arrowRight = document.querySelector('.slider-arrow.right');
            
            let currentIndex = 0;
            const slideWidth = slides[0].offsetWidth + 30; // 30px for margin
            
            // Update slider position
            function updateSlider() {
                sliderContainer.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
                
                // Update dots
                dots.forEach((dot, index) => {
                    dot.classList.toggle('active', index === currentIndex);
                });
            }
            
            // Next slide
            function nextSlide() {
                currentIndex = (currentIndex + 1) % slides.length;
                updateSlider();
            }
            
            // Previous slide
            function prevSlide() {
                currentIndex = (currentIndex - 1 + slides.length) % slides.length;
                updateSlider();
            }
            
            // Arrow click events
            arrowRight.addEventListener('click', nextSlide);
            arrowLeft.addEventListener('click', prevSlide);
            
            // Dot click events
            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    currentIndex = index;
                    updateSlider();
                });
            });
            
            // Auto slide (optional)
            // setInterval(nextSlide, 5000);
        });
    </script>
</body>
</html>