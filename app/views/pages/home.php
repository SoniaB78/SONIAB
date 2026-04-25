<section class="hero" aria-labelledby="hero-title">
    <div class="container text-center">
        <h1 id="hero-title">Développeuse Web</h1>
        <p>Création - Intégration - UX/UI</p>
        <a href="#contact" class="btn btn-primary mt-3">Me contacter</a>
    </div>
</section>

<section id="tarifs" class="section">
    <div class="container">
        <h2 class="text-center">Tarifs</h2>

        <table>
            <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<section id="parcours" class="section" aria-labelledby="parcours-title">
    <div class="container">
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
    </div>
</section>

<section id="contact" class="section">
    <div class="container">
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

            <button type="submit" class="btn btn-success mt-3">
                Envoyer
            </button>

        </form>
    </div>
</section>