<?php
  $name = "Sophie";
  $university = "American University of Kinshasa (AUK)";
  $specialty = "Architecte D.E.S.";
  
  $projects = [
    ["title" => "Villa Gombe", "category" => "Résidentiel", "year" => "2025", "image" => "https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80", "description" => "Villa moderne avec plans 2D détaillés et visualisation 3D intégrant éléments traditionnels congolais."],
    ["title" => "Pavillon Culturel", "category" => "Public", "year" => "2024", "image" => "https://images.unsplash.com/photo-1487958449943-2429e8be8625?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80", "description" => "Espace culturel avec plans 2D polyvalents et rendus 3D pour événements communautaires."],
    ["title" => "Espace Co-working Kintambo", "category" => "Commercial", "year" => "2024", "image" => "https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80", "description" => "Design innovant avec plans 2D et modélisation 3D pour espaces collaboratifs."],
    ["title" => "Clinique Vizion", "category" => "Santé", "year" => "2023", "image" => "https://images.unsplash.com/photo-1559757148-5c350d0d3c56?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80", "description" => "Architecture fonctionnelle avec plans 2D et visualisation 3D pour soins de santé."],
    ["title" => "Bureau The Box", "category" => "Commercial", "year" => "2023", "image" => "https://images.unsplash.com/photo-1497366811353-6870744d04b2?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80", "description" => "Espace bureau moderne avec plans 2D ergonomiques et rendus 3D."],
    ["title" => "Villa 3D", "category" => "Résidentiel", "year" => "2022", "image" => "https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80", "description" => "Conception 3D pour une villa luxueuse."]
  ];

  $process = [
    ["step" => "Conception", "description" => "Étude des besoins, relevés, plans 2D et visualisation 3D."],
    ["step" => "Planification", "description" => "Devis détaillé, plans 2D finaux et modèles 3D."],
    ["step" => "Exécution", "description" => "Plans d'exécution 2D détaillés et rendus 3D pour le chantier."],
    ["step" => "Suivi", "description" => "Supervision du chantier avec mises à jour 3D."]
  ];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name; ?> | Portfolio Architecture</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

    <header>
        <nav>
            <div class="logo-container">
                <div class="logo"><?php echo strtoupper($name); ?></div>
                <div class="tagline">Architecte & Designer</div>
            </div>
            <ul>
                <li><a href="#projets">Projets</a></li>
                <li><a href="#propos">À propos</a></li>
                <li><a href="#processus">Processus</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero">
            <div class="hero-content">

                <h1>                    Architecture durable &     <br>
                <span>Plans 2D & Visualisation 3D</span> — Identité Congolaise</h1>
                <p>Diplômée de l'<?php echo $university; ?>.</p>
                <blockquote class="hero-quote">"L'architecture est le jeu savant, correct et magnifique, de formes assemblées sous la lumière."</blockquote>
                <cite class="hero-cite">— Le Corbusier</cite>
                <a href="#projets" class="cta-button">Voir mes projets</a>
            </div>
            <div class="hero-image"></div>
        </section>

        <section id="projets" class="projects-section">
            <h2>Nos Projets</h2>
            <p>Chaque réalisation est une réponse créative et innovante.</p>
            <div class="grid-projects">
                <?php foreach($projects as $project): ?>
                    <div class="project-card">
                        <div class="project-image" style="background-image: url('<?php echo $project['image']; ?>');"></div>
                        <div class="project-overlay">
                            <h3><?php echo $project['title']; ?></h3>
                            <p><?php echo $project['description']; ?></p>
                            <span class="category"><?php echo $project['category']; ?> — <?php echo $project['year']; ?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section id="propos" class="about-section">
            <div class="about-content">
                <h2>À propos de moi</h2>
                <p>Architecte congolaise passionnée, je fusionne les principes modernes de l'architecture avec l'identité culturelle de la RDC. Diplômée de l'American University of Kinshasa, je m'engage à créer des espaces qui valorisent les volumes, travaillent les matériaux adaptés et mêlent le neuf et l'ancien. Spécialisée dans la réalisation de plans 2D détaillés et la visualisation 3D immersive, j'utilise les dernières technologies pour concevoir et présenter vos projets de manière précise et visuelle.</p>
                <p>À l'écoute de vos besoins, j'étudie les lieux pour tirer le meilleur parti des espaces disponibles dans le strict respect de votre budget.</p>
                <div class="quote">
                    <blockquote>"L'architecture est l'art de concilier l'impossible et l'inévitable."</blockquote>
                    <cite>— Friedrich Nietzsche</cite>
                </div>
            </div>
            <div class="about-image"></div>
        </section>

        <section id="processus" class="process-section">
            <h2>Notre processus de travail</h2>
            <p>Une approche méthodique en deux étapes pour réaliser vos projets.</p>
            <div class="process-grid">
                <?php foreach($process as $index => $step): ?>
                    <div class="process-step" style="--i: <?php echo $index; ?>">
                        <div class="step-number"><?php echo $index + 1; ?></div>
                        <h3><?php echo $step['step']; ?></h3>
                        <p><?php echo $step['description']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section id="contact" class="contact-section">
            <h2>Contact</h2>
            <p>Vous avez un projet ? N'hésitez pas à me contacter.</p>
            <div class="contact-content">
                <form class="contact-form" action="#" method="post">
                    <input type="text" name="name" placeholder="Nom complet" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="text" name="subject" placeholder="Sujet" required>
                    <textarea name="message" placeholder="Message" required></textarea>
                    <button type="submit">Envoyer</button>
                </form>
                <div class="contact-info">
                    <div class="info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>Kinshasa, RDC</p>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-envelope"></i>
                        <p>contact@sophie-archi.com</p>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-phone"></i>
                        <p>+243 XX XXX XXXX</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-quote">
            <blockquote>"L'architecture est la mère de toutes les arts."</blockquote>
            <cite>— John Ruskin</cite>
        </div>
        <p>&copy; <?php echo date("Y"); ?> <?php echo $name; ?> — Kinshasa, RDC</p>
        <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
    </footer>

    <script>
        let lastScrollTop = 0;
        const header = document.querySelector('header');
        const scrollThreshold = 50;

        window.addEventListener('scroll', function() {
            let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

            if (scrollTop > scrollThreshold) {
                // Scrolling down
                if (scrollTop > lastScrollTop) {
                    header.classList.add('hide');
                }
                // Scrolling up
                else {
                    header.classList.remove('hide');
                }
            } else {
                // Always show header when at top
                header.classList.remove('hide');
            }

            lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
        });
    </script>
</body>
</html>