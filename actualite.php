<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Architecture - Blog Gsuko Construct</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Styles communs identiques à vos autres pages */
        :root {
            --primary: #2c3e50;
            --secondary: #e74c3c;
            --accent: #3498db;
            --light: #ecf0f1;
            --dark: #2c3e50;
            --shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            --border-radius: 8px;
        }

        /* Ajoutez ici tous vos styles CSS comme précédemment */

        /* Styles spécifiques au blog */
        .blog-article {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            overflow: hidden;
        }

        .article-header {
            position: relative;
        }

        .article-image {
            width: 100%;
            height: 400px;
            object-fit: cover;
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
        }

        .article-meta {
            display: flex;
            align-items: center;
            gap: 1rem;
            color: #ddd;
        }

        .article-content {
            padding: 2rem;
            line-height: 1.8;
        }

        .article-content h2 {
            color: var(--primary);
            margin: 2rem 0 1rem;
            font-size: 1.8rem;
        }

        .article-content p {
            margin-bottom: 1.5rem;
            color: #555;
        }

        .article-content img {
            max-width: 100%;
            height: auto;
            border-radius: var(--border-radius);
            margin: 1.5rem 0;
        }

        .related-articles {
            margin-top: 3rem;
        }

        /* ... autres styles ... */
    </style>
</head>

<body>
    <header>
        <!-- Votre header identique aux autres pages -->
    </header>

    <!-- Structure similaire avec ce contenu spécifique -->

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

    </footer>
</body>

</html>