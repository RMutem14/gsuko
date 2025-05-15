<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Services - Gsuko Construct</title>
    <link rel="shortcut icon" href="./images/logonumber.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/services.css">
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
                        <a href="services.php" class="liens active">
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

    <!-- Mobile Menu -->
    <div class="mobile-menu">
        <div class="close-menu"><i class="fas fa-times"></i></div>
        <ul>
            <li>
                <a href="index.php">Acceuil</a>
            </li>
            <li class="services-dropdown">
                <a href="rdv.php" class="active">Services <i class="fas fa-chevron-down"></i></a>
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
    <div class="overlay"></div>

    <!-- Hero Section -->
    <section class="service-hero">
        <h1>Nos Services d'Excellence</h1>
        <p>Découvrez comment Gsuko Construct allie innovation technique et savoir-faire artisanal pour réaliser vos
            projets les plus ambitieux</p>
    </section>

    <!-- Process Section -->
    <section class="process-section">
        <div class="section-header">
            <h2>Notre Processus de Travail</h2>
            <p>Une méthodologie rigoureuse pour garantir la qualité et le respect des délais</p>
        </div>

        <div class="process-steps">
            <!-- Étape 1 -->
            <div class="process-step">
                <div class="step-number">1</div>
                <div class="step-content">
                    <h3>Étude et Conception</h3>
                    <p>Phase cruciale où nous analysons vos besoins et élaborons des solutions sur mesure.</p>

                    <div class="step-details">
                        <ul>
                            <li>Rencontre client et analyse des besoins</li>
                            <li>Étude de faisabilité technique et financière</li>
                            <li>Conception architecturale et plans détaillés</li>
                            <li>Validation des choix techniques et matériaux</li>
                            <li>Obtention des permis et autorisations</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Étape 2 -->
            <div class="process-step">
                <div class="step-number">2</div>
                <div class="step-content">
                    <h3>Préparation du Chantier</h3>
                    <p>Mise en place de toutes les conditions pour un démarrage efficace des travaux.</p>

                    <div class="step-details">
                        <ul>
                            <li>Analyse géotechnique du terrain</li>
                            <li>Installation des infrastructures de chantier</li>
                            <li>Approvisionnement en matériaux de qualité</li>
                            <li>Mobilisation des équipes et équipements</li>
                            <li>Mise en place du planning détaillé</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Étape 3 -->
            <div class="process-step">
                <div class="step-number">3</div>
                <div class="step-content">
                    <h3>Réalisation des Travaux</h3>
                    <p>Exécution précise selon les normes avec un contrôle qualité permanent.</p>

                    <div class="step-details">
                        <ul>
                            <li>Terrassement et fondations</li>
                            <li>Gros œuvre (structure, murs, planchers)</li>
                            <li>Second œuvre (électricité, plomberie, isolation)</li>
                            <li>Finitions intérieures et extérieures</li>
                            <li>Contrôle qualité à chaque étape</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Étape 4 -->
            <div class="process-step">
                <div class="step-number">4</div>
                <div class="step-content">
                    <h3>Livraison et Suivi</h3>
                    <p>Remise des clés avec un accompagnement personnalisé après réception.</p>

                    <div class="step-details">
                        <ul>
                            <li>Tests finaux et vérifications</li>
                            <li>Formation aux équipements techniques</li>
                            <li>Remise des documents techniques</li>
                            <li>Garantie décennale et suivi post-livraison</li>
                            <li>Évaluation de la satisfaction client</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <div class="services-container">
        <!-- Service 1 - Architecture -->
        <div class="service-card">
            <div class="service-media">
                <img src="./images/architecture.jpg" alt="Projet architectural moderne" class="service-img">
            </div>
            <div class="service-content">
                <span class="service-number">01</span>
                <h2>Architecture Innovante</h2>
                <p>Notre approche architecturale combine esthétique contemporaine et fonctionnalité optimale pour des
                    espaces de vie uniques. Nous créons des designs qui s'harmonisent avec leur environnement tout en
                    répondant
                    aux besoins spécifiques de nos clients.</p>

                <div class="strengths-list">
                    <div class="strength-item">
                        <div class="strength-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <div>
                            <h3>Prix d'Excellence</h3>
                            <p>Reconnus pour notre design innovant et durable</p>
                        </div>
                    </div>

                    <div class="strength-item">
                        <div class="strength-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <div>
                            <h3>Solutions sur mesure</h3>
                            <p>Conception adaptée à chaque client et environnement</p>
                        </div>
                    </div>

                    <div class="strength-item">
                        <div class="strength-icon">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <div>
                            <h3>Approche écologique</h3>
                            <p>Matériaux durables et optimisation énergétique</p>
                        </div>
                    </div>
                </div>

                <a href="realisation.php" class="cta-button">Voir nos réalisations</a>
            </div>
        </div>

        <!-- Service 2 - Génie Civil -->
        <div class="service-card">
            <div class="service-media">
                <img src="./images/genie.jpg" alt="Projet architectural moderne" class="service-img">
            </div>
            <div class="service-content">
                <span class="service-number">02</span>
                <h2>Génie Civil</h2>
                <p>Expertise technique et maîtrise des grands projets d'infrastructure pour des constructions solides et
                    durables. Nous mettons en œuvre les dernières technologies pour garantir la qualité et la longévité
                    de chaque structure.</p>

                <div class="strengths-list">
                    <div class="strength-item">
                        <div class="strength-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div>
                            <h3>Sécurité absolue</h3>
                            <p>0 accident grave sur nos chantiers depuis 5 ans</p>
                        </div>
                    </div>

                    <div class="strength-item">
                        <div class="strength-icon">
                            <i class="fas fa-tachometer-alt"></i>
                        </div>
                        <div>
                            <h3>Technologies de pointe</h3>
                            <p>Utilisation de BIM et drones pour une précision maximale</p>
                        </div>
                    </div>

                    <div class="strength-item">
                        <div class="strength-icon">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                        <div>
                            <h3>Respect des délais</h3>
                            <p>95% de nos projets livrés avant la date prévue</p>
                        </div>
                    </div>
                </div>

                <a href="contact.php" class="cta-button">Demander un devis</a>
            </div>
        </div>

        <!-- Service 3 - Commercial -->
        <div class="service-card">
            <div class="service-media">
                <img src="./images/macon1.jpg" alt="Espace commercial moderne" class="service-img">
            </div>
            <div class="service-content">
                <span class="service-number">03</span>
                <h2>Solutions Commerciales</h2>
                <p>Conception d'espaces commerciaux optimisés pour maximiser l'expérience client et le retour sur
                    investissement. Nos designs intègrent les dernières tendances en merchandising et flux client.</p>

                <div class="strengths-list">
                    <div class="strength-item">
                        <div class="strength-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div>
                            <h3>Augmentation du trafic</h3>
                            <p>Nos conceptions augmentent le trafic de 30% en moyenne</p>
                        </div>
                    </div>

                    <div class="strength-item">
                        <div class="strength-icon">
                            <i class="fas fa-money-bill-wave"></i>
                        </div>
                        <div>
                            <h3>ROI garanti</h3>
                            <p>Études de marché incluses pour maximiser votre rentabilité</p>
                        </div>
                    </div>

                    <div class="strength-item">
                        <div class="strength-icon">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <div>
                            <h3>Délais rapides</h3>
                            <p>Ouverture possible en 6 mois pour les projets standards</p>
                        </div>
                    </div>
                </div>

                <a href="commerciale.php" class="cta-button">Voir nos références</a>
            </div>
        </div>

        <!-- Service 4 - Hydraulique -->
        <div class="service-card">
            <div class="service-media">
                <div class="service-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/GY7egJV1FQI?si=s3sN5eKiD0LJSnwh"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="service-content">
                <span class="service-number">04</span>
                <h2>Ingénierie Hydraulique</h2>
                <p>Solutions innovantes pour une gestion optimale de l'eau, des systèmes d'irrigation aux
                    infrastructures urbaines. Nous concevons des systèmes durables et économes en ressources.</p>

                <div class="strengths-list">
                    <div class="strength-item">
                        <div class="strength-icon">
                            <i class="fas fa-tint"></i>
                        </div>
                        <div>
                            <h3>Économie d'eau</h3>
                            <p>Jusqu'à 40% d'économie grâce à nos systèmes intelligents</p>
                        </div>
                    </div>

                    <div class="strength-item">
                        <div class="strength-icon">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <div>
                            <h3>Technologie avancée</h3>
                            <p>Systèmes de monitoring en temps réel</p>
                        </div>
                    </div>

                    <div class="strength-item">
                        <div class="strength-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div>
                            <h3>Intervention rapide</h3>
                            <p>Équipes disponibles 24/7 pour les urgences</p>
                        </div>
                    </div>
                </div>

                <a href="contact.php" class="cta-button">Contactez nos experts</a>
            </div>
        </div>
    </div>

    <footer>
        <?php include_once "footer.php" ?>
    </footer>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/services.js"></script>
</body>

</html>