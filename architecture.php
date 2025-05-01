<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Architecture Innovante - Blog Gsuko Construct</title>
    <meta name="description" content="Découvrez l'approche architecturale innovante de Gsuko Construct en RDC, combinant design moderne et solutions durables adaptées au climat tropical">
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
            --transition: all 0.3s ease;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f9f9f9;
        }
        
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Header Styles */
        header {
            background-color: var(--primary);
            color: white;
            padding: 1rem 0;
            box-shadow: var(--shadow);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            color: white;
            text-decoration: none;
        }
        
        .logo span {
            color: var(--accent);
        }
        
        nav ul {
            display: flex;
            list-style: none;
        }
        
        nav ul li {
            margin-left: 2rem;
        }
        
        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: var(--transition);
        }
        
        nav ul li a:hover {
            color: var(--accent);
        }
        
        /* Hero Section */
        .blog-hero {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 60vh;
            display: flex;
            align-items: center;
            text-align: center;
            color: white;
            margin-bottom: 3rem;
        }
        
        .blog-hero .container {
            width: 100%;
        }
        
        .blog-hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }
        
        .blog-hero p {
            font-size: 1.5rem;
            max-width: 800px;
            margin: 0 auto;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
        }
        
        /* Blog Article Styles */
        .blog-article {
            max-width: 900px;
            margin: 0 auto 4rem;
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            overflow: hidden;
            transition: var(--transition);
        }
        
        .blog-article:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }
        
        .article-header {
            position: relative;
        }
        
        .article-image {
            width: 100%;
            height: 500px;
            object-fit: cover;
            display: block;
        }
        
        .article-title {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(44, 62, 80, 0.9), transparent);
            padding: 2rem;
            color: white;
        }
        
        .article-title h1 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
            line-height: 1.3;
        }
        
        .article-meta {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            color: #ddd;
            font-size: 0.9rem;
        }
        
        .article-meta i {
            margin-right: 0.3rem;
            color: var(--accent);
        }
        
        .article-content {
            padding: 3rem;
            line-height: 1.8;
        }
        
        .article-content h2 {
            color: var(--primary);
            margin: 2.5rem 0 1.5rem;
            font-size: 1.8rem;
            position: relative;
            padding-bottom: 0.5rem;
        }
        
        .article-content h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 80px;
            height: 3px;
            background: var(--accent);
        }
        
        .article-content p {
            margin-bottom: 1.5rem;
            color: #555;
            font-size: 1.1rem;
        }
        
        .article-content img {
            max-width: 100%;
            height: auto;
            border-radius: var(--border-radius);
            margin: 2rem 0;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }
        
        .article-content img:hover {
            transform: scale(1.02);
        }
        
        .article-content ul {
            margin: 1.5rem 0;
            padding-left: 2rem;
        }
        
        .article-content ul li {
            margin-bottom: 0.8rem;
            position: relative;
        }
        
        .article-content ul li::before {
            content: '•';
            color: var(--accent);
            font-weight: bold;
            display: inline-block;
            width: 1em;
            margin-left: -1em;
        }
        
        blockquote {
            background: var(--light);
            border-left: 4px solid var(--accent);
            padding: 1.5rem;
            margin: 2rem 0;
            font-style: italic;
            position: relative;
        }
        
        blockquote::before {
            content: '\201C';
            font-size: 4rem;
            color: var(--accent);
            opacity: 0.3;
            position: absolute;
            top: -1rem;
            left: 0.5rem;
        }
        
        blockquote cite {
            display: block;
            margin-top: 1rem;
            font-style: normal;
            font-weight: bold;
            color: var(--primary);
        }
        
        /* Related Articles */
        .related-articles {
            margin: 4rem auto;
            max-width: 900px;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 2.5rem;
            color: var(--primary);
            font-size: 2rem;
            position: relative;
            padding-bottom: 1rem;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background: var(--accent);
        }
        
        .blog-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 2rem;
        }
        
        .blog-card {
            background: white;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }
        
        .blog-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }
        
        .blog-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        
        .blog-card-content {
            padding: 1.5rem;
        }
        
        .blog-card h3 {
            margin-bottom: 0.5rem;
            color: var(--primary);
        }
        
        .blog-card p {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }
        
        .read-more {
            display: inline-block;
            color: var(--accent);
            font-weight: 500;
            text-decoration: none;
            transition: var(--transition);
        }
        
        .read-more:hover {
            color: var(--secondary);
        }
        
        /* Footer Styles */
        footer {
            background-color: var(--dark);
            color: white;
            padding: 3rem 0 1.5rem;
        }
        
        .footer-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }
        
        .footer-column h3 {
            color: var(--accent);
            margin-bottom: 1.5rem;
            font-size: 1.2rem;
        }
        
        .footer-column ul {
            list-style: none;
        }
        
        .footer-column ul li {
            margin-bottom: 0.8rem;
        }
        
        .footer-column ul li a {
            color: #ddd;
            text-decoration: none;
            transition: var(--transition);
        }
        
        .footer-column ul li a:hover {
            color: var(--accent);
            padding-left: 5px;
        }
        
        .social-links {
            display: flex;
            gap: 1rem;
        }
        
        .social-links a {
            color: white;
            background: rgba(255, 255, 255, 0.1);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
        }
        
        .social-links a:hover {
            background: var(--accent);
            transform: translateY(-3px);
        }
        
        .copyright {
            text-align: center;
            padding-top: 1.5rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #aaa;
            font-size: 0.9rem;
        }
        
        /* Responsive Styles */
        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
            }
            
            nav ul {
                margin-top: 1rem;
            }
            
            nav ul li {
                margin-left: 1rem;
                margin-right: 1rem;
            }
            
            .blog-hero {
                height: 50vh;
            }
            
            .blog-hero h1 {
                font-size: 2.5rem;
            }
            
            .blog-hero p {
                font-size: 1.2rem;
            }
            
            .article-title h1 {
                font-size: 2rem;
            }
            
            .article-content {
                padding: 2rem;
            }
            
            .article-image {
                height: 350px;
            }
        }
        
        @media (max-width: 480px) {
            .article-meta {
                flex-direction: column;
                align-items: flex-start;
                gap: 0.5rem;
            }
            
            .blog-hero h1 {
                font-size: 2rem;
            }
            
            .article-title h1 {
                font-size: 1.6rem;
            }
            
            .article-content {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="header-container container">
            <a href="index.html" class="logo">Gsuko<span>Construct</span></a>
            <nav>
                <ul>
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="projets.html">Nos Projets</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="blog.html" class="active">Blog</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="blog-hero" style="background: linear-gradient(rgba(44, 62, 80, 0.8), rgba(44, 62, 80, 0.8)), url('https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');">
        <div class="container">
            <h1>L'Architecture Innovante en RDC</h1>
            <p>Découvrez notre approche créative des designs architecturaux adaptés au climat tropical</p>
        </div>
    </section>

    <div class="main-content">
        <article class="blog-article">
            <div class="article-header">
                <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Architecture tropicale moderne" class="article-image">
                <div class="article-title">
                    <h1>L'Architecture Durable en Zone Tropicale : L'Approche Gsuko Construct</h1>
                    <div class="article-meta">
                        <span><i class="far fa-calendar-alt"></i> 15 Juin 2023</span>
                        <span><i class="far fa-user"></i> Par Jean Kabasele</span>
                        <span><i class="far fa-clock"></i> 8 min de lecture</span>
                    </div>
                </div>
            </div>
            
            <div class="article-content">
                <h2>Notre Philosophie Architecturale</h2>
                <p>Chez Gsuko Construct, nous repensons l'architecture congolaise pour l'adapter aux défis climatiques, culturels et économiques de la région. Notre équipe d'architectes expérimentés combine esthétique moderne et techniques traditionnelles pour créer des espaces qui respirent l'identité locale tout en répondant aux standards internationaux.</p>
                
                <img src="https://images.unsplash.com/photo-1600566752355-35792bedcfea?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Intégration architecturale dans l'environnement">
                
                <p>L'architecture tropicale moderne doit répondre à trois impératifs : confort thermique, durabilité écologique et beauté esthétique. En RDC, où les températures peuvent être élevées et les précipitations abondantes, ces considérations deviennent centrales dans notre processus de conception.</p>
                
                <h2>Solutions Climatiques Intelligentes</h2>
                <p>Nos designs intègrent des solutions innovantes pour le climat tropical :</p>
                <ul>
                    <li><strong>Ventilation naturelle optimisée</strong> : Conception de courants d'air traversants et utilisation stratégique des ouvertures</li>
                    <li><strong>Protection solaire passive</strong> : Brise-soleil, débords de toit et orientation intelligente des bâtiments</li>
                    <li><strong>Matériaux locaux à faible impact</matériaux> : Bois certifié, briques de terre stabilisée et pierres locales</li>
                    <li><strong>Gestion intelligente des eaux pluviales</strong> : Systèmes de récupération et drainage naturel</li>
                    <li><strong>Toitures végétalisées</strong> : Pour l'isolation thermique et la réduction des îlots de chaleur</li>
                </ul>
                
                <img src="https://images.unsplash.com/photo-1600607688969-a5bfa64630b4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Détails architecturaux bioclimatiques">
                
                <h2>Projet Phare : Résidence Les Palmiers</h2>
                <p>Notre récent projet à Gombe illustre parfaitement cette philosophie. Cette résidence de standing intègre :</p>
                
                <ul>
                    <li>Une double peau ventilée pour réduire les gains thermiques</li>
                    <li>Un système de récupération des eaux de pluie pour l'arrosage</li>
                    <li>Des panneaux solaires intégrés au design</li>
                    <li>Des espaces transitoires (vérandas, loggias) entre intérieur et extérieur</li>
                </ul>
                
                <img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Résidence Les Palmiers - vue intérieure">
                
                <p>Avec une réduction de 40% des besoins en climatisation et une intégration paysagère remarquée, ce bâtiment établit de nouveaux standards pour l'architecture résidentielle en RDC.</p>
                
                <blockquote>
                    "L'architecture en milieu tropical doit dialoguer avec son environnement plutôt que de le combattre. Chez Gsuko Construct, nous voyons les contraintes climatiques comme des opportunités créatives."
                    <cite>- Marie-Louise Mbemba, Architecte en Chef</cite>
                </blockquote>
                
                <h2>L'Avenir de l'Architecture en RDC</h2>
                <p>Nous croyons fermement que l'avenir de l'architecture congolaise repose sur :</p>
                
                <img src="https://images.unsplash.com/photo-1600566752229-250ed79470b5?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Design futuriste intégrant des éléments traditionnels">
                
                <ul>
                    <li>L'hybridation des savoirs traditionnels et des technologies modernes</li>
                    <li>La valorisation des matériaux et savoir-faire locaux</li>
                    <li>La conception de bâtiments résilients face aux changements climatiques</li>
                    <li>La création d'espaces qui renforcent les liens communautaires</li>
                </ul>
                
                <p>Notre prochain défi ? Le développement d'un quartier durable à Kinshasa intégrant ces principes à l'échelle urbaine, avec des espaces verts interconnectés, une gestion circulaire des ressources et une mixité fonctionnelle.</p>
            </div>
        </article>
        
        <section class="related-articles">
            <h2 class="section-title">Découvrez Nos Autres Articles</h2>
            <div class="blog-grid">
                <article class="blog-card">
                    <img src="https://images.unsplash.com/photo-1605276374104-dee2a0ed3cd6?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Construction durable">
                    <div class="blog-card-content">
                        <h3>Les Matériaux de Construction Locaux</h3>
                        <p>Explorez comment nous valorisons les ressources locales dans nos projets de construction.</p>
                        <a href="#" class="read-more">Lire l'article <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>
                
                <article class="blog-card">
                    <img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Design intérieur">
                    <div class="blog-card-content">
                        <h3>Design Intérieur Tropical Moderne</h3>
                        <p>Notre approche pour créer des intérieurs frais et élégants sous les tropiques.</p>
                        <a href="#" class="read-more">Lire l'article <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>
                
                <article class="blog-card">
                    <img src="https://images.unsplash.com/photo-1600585152220-90363fe7e115?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Urbanisme durable">
                    <div class="blog-card-content">
                        <h3>Urbanisme Durable en Afrique Centrale</h3>
                        <p>Comment repenser nos villes pour les rendre plus vivables et résilientes.</p>
                        <a href="#" class="read-more">Lire l'article <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>
            </div>
        </section>
    </div>

    <footer>
        <div class="container">
            <div class="footer-container">
                <div class="footer-column">
                    <h3>Gsuko Construct</h3>
                    <p>Leader en construction et architecture durable en RDC depuis 2010. Nous bâtissons l'avenir avec des fondations solides.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                
                <div class="footer-column">
                    <h3>Liens Rapides</h3>
                    <ul>
                        <li><a href="index.html">Accueil</a></li>
                        <li><a href="projets.html">Nos Réalisations</a></li>
                        <li><a href="services.html">Nos Services</a></li>
                        <li><a href="blog.html">Articles & Conseils</a></li>
                        <li><a href="contact.html">Contactez-nous</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="#">Architecture Durable</a></li>
                        <li><a href="#">Construction Résidentielle</a></li>
                        <li><a href="#">Bâtiments Commerciaux</a></li>
                        <li><a href="#">Rénovation Écologique</a></li>
                        <li><a href="#">Design Intérieur</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Contact</h3>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> 123 Av. de la Nation, Gombe, Kinshasa</li>
                        <li><i class="fas fa-phone"></i> +243 81 234 5678</li>
                        <li><i class="fas fa-envelope"></i> contact@gskoconstruct.cd</li>
                        <li><i class="fas fa-clock"></i> Lun-Ven: 8h-17h</li>
                    </ul>
                </div>
            </div>
            
            <div class="copyright">
                <p>&copy; 2023 Gsuko Construct. Tous droits réservés. | Conçu avec passion en RDC</p>
            </div>
        </div>
    </footer>
</body>
</html>