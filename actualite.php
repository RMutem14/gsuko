<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Architecture - Blog Gsuko Construct</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/actualite.css">
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

    <section class="blog-hero"
        style="background: linear-gradient(rgba(44, 62, 80, 0.8), rgba(44, 62, 80, 0.8)), url('https://images.unsplash.com/photo-1605152276897-4f618f831968?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');">
        <div class="container">
            <h1>Actualités du Bâtiment en RDC</h1>
            <p>Tendances, innovations et réglementations du secteur</p>
        </div>
    </section>

    <article class="blog-article">
        <div class="article-header">
            <img src="https://images.unsplash.com/photo-1605152276897-4f618f831968?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                alt="Chantier construction" class="article-image">
            <div class="article-title">
                <h1>Les Nouvelles Normes Parasismiques en RDC</h1>
                <div class="article-meta">
                    <span><i class="far fa-calendar-alt"></i> 15 Avril 2023</span>
                    <span><i class="far fa-user"></i> Par Gsuko Rédaction</span>
                </div>
            </div>
        </div>

        <div class="article-content">
            <h2>Contexte Réglementaire</h2>
            <p>Le gouvernement a publié de nouvelles directives plus strictes pour les constructions en zones sismiques.
                Ces normes s'appliquent désormais à tout projet de plus de 2 étages.</p>

            <h2>Implications pour les Professionnels</h2>
            <p>Les principaux changements concernent :</p>
            <ul>
                <li>Calcul des charges sismiques révisé</li>
                <li>Exigences accrues sur les matériaux</li>
                <li>Contrôles techniques renforcés</li>
            </ul>

            <img src="https://images.unsplash.com/photo-1605152276897-4f618f831968?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                alt="Structure antisismique">

            <h2>Notre Position</h2>
            <p>Gsuko Construct accueille favorablement ces évolutions et a anticipé ces changements depuis 2020 dans
                tous ses projets. Nous proposons des formations adaptées aux professionnels du secteur.</p>

            <h2>Perspectives</h2>
            <p>Ces mesures devraient réduire de 30% les risques sismiques selon les experts, avec un impact limité sur
                les coûts (+5% en moyenne).</p>
        </div>
    </article>

    <footer>
        <?php include_once "footer.php" ?>
    </footer>
</body>

</html>