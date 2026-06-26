<section class="hero" aria-labelledby="hero-title">
<div class="text-center">
    <h1 id="hero-title">Développeuse Web</h1>
    <p>Je conçois des interfaces modernes, accessibles et maintenables.</p>
    <hr>
    <p>Constuisons ensemble votre site idéal !</p>
    <div>
        <a href="#contact" class="btn btn-primary mt-3">Me contacter</a>
        <a href="#parcours" class="btn btn-secondary mt-3">Voir mon parcours</a>
    </div>
</div>

<a href="#tarifs" title="Aller aux tarifs">
    <i class="bi bi-caret-down"></i>
</a>
</section>

<section id="tarifs" class="m-5" aria-labelledby="tarifs-title">
    <h2 id="tarifs-title" class="text-center">
        Tarifs
    </h2>

    <p class="text-center tarifs-intro">
        Des formules claires pour répondre à des besoins différents. Chaque projet étant unique, un devis personnalisé est toujours proposé.
    </p>

    <div class="pricing-grid">

        <!-- ESSENTIEL -->
        <article class="pricing-card">
            <h3>Essentiel</h3>

            <p class="pricing-price">
                À partir de <strong>900€</strong>
            </p>

            <ul>
                <li><i class="bi bi-check-lg"></i> Jusqu'à 3 pages</li>
                <li><i class="bi bi-check-lg"></i> Responsive</li>
                <li><i class="bi bi-check-lg"></i> SEO de base</li>
                <li><i class="bi bi-check-lg"></i> Formulaire de contact</li>
                <li><i class="bi bi-check-lg"></i> Hébergement 1 an</li>
                <li><i class="bi bi-check-lg"></i> Nom de domaine 1 an</li>
            </ul>

        </article>

        <!-- COMPLET -->
        <article class="pricing-card pricing-card--featured">
            <span class="pricing-badge">
                Recommandé
            </span>

            <h3>Complet</h3>

            <p class="pricing-price">
                À partir de <strong>1400€</strong>
            </p>

            <ul>
                <li><i class="bi bi-check-lg"></i> Jusqu'à 8 pages</li>
                <li><i class="bi bi-check-lg"></i> Responsive</li>
                <li><i class="bi bi-check-lg"></i> SEO avancé</li>
                <li><i class="bi bi-check-lg"></i> Optimisation performances</li>
                <li><i class="bi bi-check-lg"></i> Accessibilité renforcée</li>
                <li><i class="bi bi-check-lg"></i> Hébergement 1 an</li>
                <li><i class="bi bi-check-lg"></i> Nom de domaine 1 an</li>
            </ul>
        </article>

        <!-- SUR MESURE -->
        <article class="pricing-card">
            <h3>Sur mesure</h3>

            <p class="pricing-price">
                Devis personnalisé
            </p>

            <ul>
                <li><i class="bi bi-check-lg"></i> Fonctionnalités spécifiques</li>
                <li><i class="bi bi-check-lg"></i> Blog</li>
                <li><i class="bi bi-check-lg"></i> Réservation</li>
                <li><i class="bi bi-check-lg"></i> Catalogue</li>
                <li><i class="bi bi-check-lg"></i> Espace membre</li>
                <li><i class="bi bi-check-lg"></i> Besoins particuliers</li>
            </ul>
        </article>
    </div>

    <div class="pricing-services">
        <h3>Services complémentaires</h3>

        <div class="table-responsive">
            <table class="table pricing-table">
                <thead>
                    <tr>
                        <th>Service</th>
                        <th>Tarif</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>
                            Forfait maintenance
                            <i
                                class="bi bi-info-circle"
                                data-bs-toggle="popover"
                                data-bs-trigger="focus"
                                tabindex="0"
                                data-bs-content="Mises à jour de sécurité, surveillance du site et corrections mineures">
                            </i>
                        </td>

                        <td>10€/mois</td>
                    </tr>

                    <tr>
                        <td>
                            Forfait évolutions du site 
                            <i
                                class="bi bi-info-circle"
                                data-bs-toggle="popover"
                                data-bs-trigger="focus"
                                tabindex="0"
                                data-bs-content="Maintenance + Jusqu'à 1h de modifications par mois, ajout de contenus simples et accompagnement par email.">
                            </i>
                        </td>

                        <td>100€/mois</td>
                    </tr>

                    <tr>
                        <td>Ajout de fonctionnalités</td>
                        <td>Sur devis</td>
                    </tr>

                    <tr>
                        <td>Refonte partielle</td>
                        <td>Sur devis</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<section id="parcours" class="m-5" aria-labelledby="parcours-title">
    <h2 id="parcours-title" class="text-center">Parcours</h2>

    <div class="timeline mt-4">
        <?php if (empty($donnees)): ?>
            <p>Aucune donnée disponible.</p>
        <?php endif; ?>
        
        <?php foreach($donnees as $donnee): ?>

            <h3 class="timeline__item timeline__item--year">
                <?= htmlspecialchars($donnee["date_entree"]) ?>

                <?php if (!empty($donnee["date_sortie"])): ?>
                    <br> - <br>
                    <?= htmlspecialchars($donnee["date_sortie"]) ?>
                <?php endif; ?>
            </h3>

            <div class="timeline__item">

                <h4 class="timeline__title">
                    <strong>

                    <?php if ($donnee["categorie"] === "experience"): ?>
                        <i class="bi bi-briefcase"></i>
                    <?php else: ?>
                        <i class="bi bi-mortarboard"></i>
                    <?php endif; ?>

                    <?= htmlspecialchars($donnee["titre"]) ?>

                    </strong>
                </h4>

                <p><?= nl2br(htmlspecialchars($donnee["description"])) ?></p>

            </div>

        <?php endforeach; ?>

    </div>
</section>

<section id="contact" class="m-5">
    <h2 class="text-center">Contact</h2>

    <form class="mt-4" aria-labelledby="contact-title">

        <div class="row">
            <div class="col-md-6">
                <label for="name">Nom</label>
                <input id="name" type="text" class="form-control" required>
            </div>

            <div class="col-md-6">
                <label for="email">Email</label>
                <input id="email" type="email" class="form-control" required>
            </div>
        </div>

        <label for="message" class="mt-3">Message</label>
        <textarea id="message" class="form-control" required></textarea>

        <button type="submit" class="btn btn-primary mt-3">
            Envoyer
        </button>

    </form>
</section>