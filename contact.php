<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Gsuko Construct</title>
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
            height: 60px;
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

        /* Hero Section */
        .contact-hero {
            background: linear-gradient(rgba(44, 62, 80, 0.8), rgba(44, 62, 80, 0.8)), 
                        url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 180px 2rem 100px;
        }
        
        .contact-hero h1 {
            font-size: 3rem;
            margin-bottom: 1.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }
        
        .contact-hero p {
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

        /* Contact Section */
        .contact-section {
            padding: 5rem 0;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
        }
        
        .contact-info {
            background: white;
            padding: 2rem;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
        }
        
        .contact-info h2 {
            font-size: 2rem;
            color: var(--primary);
            margin-bottom: 1.5rem;
            position: relative;
        }
        
        .contact-info h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 4px;
            background-color: var(--secondary);
        }
        
        .contact-details {
            margin-top: 2rem;
        }
        
        .contact-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 1.5rem;
        }
        
        .contact-icon {
            background: var(--secondary);
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            flex-shrink: 0;
        }
        
        .contact-text h3 {
            font-size: 1.1rem;
            margin-bottom: 0.3rem;
            color: var(--primary);
        }
        
        .contact-text p, .contact-text a {
            color: #666;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .contact-text a:hover {
            color: var(--secondary);
        }
        
        .social-media {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }
        
        .social-link {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--light);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            font-size: 1.2rem;
            transition: all 0.3s ease;
        }
        
        .social-link:hover {
            background: var(--secondary);
            color: white;
            transform: translateY(-3px);
        }
        
        /* Contact Form */
        .contact-form {
            background: white;
            padding: 2rem;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
        }
        
        .contact-form h2 {
            font-size: 2rem;
            color: var(--primary);
            margin-bottom: 1.5rem;
            position: relative;
        }
        
        .contact-form h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 4px;
            background-color: var(--secondary);
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: var(--primary);
        }
        
        .form-control {
            width: 100%;
            padding: 0.8rem 1rem;
            border: 1px solid #ddd;
            border-radius: var(--border-radius);
            font-size: 1rem;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            border-color: var(--secondary);
            outline: none;
            box-shadow: 0 0 0 3px rgba(231, 76, 60, 0.2);
        }
        
        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }
        
        .submit-btn {
            background-color: var(--secondary);
            color: white;
            border: none;
            padding: 0.8rem 1.8rem;
            border-radius: var(--border-radius);
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 1rem;
        }
        
        .submit-btn:hover {
            background-color: #c0392b;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(231, 76, 60, 0.3);
        }
        
        /* Map Section */
        .map-section {
            padding-bottom: 5rem;
        }
        
        .map-container {
            height: 400px;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow);
        }
        
        .map-container iframe {
            width: 100%;
            height: 100%;
            border: none;
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
        @media (max-width: 992px) {
            .contact-section {
                grid-template-columns: 1fr;
            }
            
            .map-container {
                height: 350px;
            }
        }

        @media (max-width: 768px) {
            .contact-hero h1 {
                font-size: 2.5rem;
            }
            
            .navigation {
                display: none;
            }
            
            .burger {
                display: block;
            }
        }

        @media (max-width: 576px) {
            nav {
                padding: 1rem;
            }
            
            .contact-hero {
                padding: 130px 1rem 60px;
            }
            
            .contact-hero h1 {
                font-size: 2rem;
            }
            
            .contact-info, .contact-form {
                padding: 1.5rem;
            }
            
            .map-container {
                height: 300px;
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
                    <li>
                        <a href="services.php" class="liens">
                            Services
                        </a>
                    </li>
                    <li>
                        <a href="apropos.php" class="liens">
                            À propos
                        </a>
                    </li>
                    <li>
                        <a href="realisations.php" class="liens">
                            Réalisations
                        </a>
                    </li>
                    <li>
                        <a href="blog.php" class="liens">
                            Blog
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
                <p>N'hésitez pas à nous contacter pour toute demande d'information ou de devis. Notre équipe vous répondra dans les plus brefs délais.</p>
                
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
                            <a href="tel:+243897654321">+243 89 765 4321</a></p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Email</h3>
                            <p><a href="mailto:contact@gsuko-construct.cd">contact@gsuko-construct.cd</a><br>
                            <a href="mailto:commercial@gsuko-construct.cd">commercial@gsuko-construct.cd</a></p>
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
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.490374317615!2d15.30075831533108!3d-4.322879146893075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a6a3393e2a5d5a5%3A0x1a6a3393e2a5d5a5!2sKinshasa%2C%20RD%20Congo!5e0!3m2!1sfr!2sfr!4v1623256789012!5m2!1sfr!2sfr" allowfullscreen="" loading="lazy"></iframe>
            </div>
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
                    <li><a href="realisations.php">Réalisations</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="contact.php" class="active">Contact</a></li>
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
            <p>&copy; 2023 Gsuko Construct. Tous droits réservés. | Entreprise congolaise enregistrée sous le numéro RC12345</p>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile menu toggle
            const burger = document.querySelector('.burger');
            const navigation = document.querySelector('.navigation');
            
            if (burger && navigation) {
                burger.addEventListener('click', function() {
                    navigation.classList.toggle('active');
                });
            }
            
            // Form submission
            const contactForm = document.getElementById('contactForm');
            if (contactForm) {
                contactForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    // Here you would normally send the form data to your server
                    // For this example, we'll just show an alert
                    alert('Merci pour votre message! Nous vous contacterons bientôt.');
                    contactForm.reset();
                });
            }
        });
    </script>
</body>
</html>