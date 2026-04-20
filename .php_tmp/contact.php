<style>
    :root {
  --bleu-pale: #4B9CD3;
  --bleu-fonce: #000080;
  --noir: #000000;
  --blanc: #ffffff;
}

/* Menu */
.menu {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: var(--bleu-pale);
    padding: 1rem 2rem;
}

.menu-liens {
    list-style: none;
    display: flex;
    gap: 1.5rem;
    margin: 0;
    padding: 0;
}

.menu-liens a {
    color: var(--blanc);
    text-decoration: none;
    font-weight: bold;
}

.menu-liens a:hover {
    color: var(--bleu-fonce);
}
</style>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arbitres de Softball</title>

</head>
<body>
    <header>
        <nav class="menu">
            <div class="logo">Softball Québec</div>
            <ul class="menu-liens">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="services.php">Événements</a></li>
                <li><a href="contact.php">Contactez-nous</a></li>
            </ul>
        </nav>
    </header>
    <main class="contact-container">
        <section class="contenu-contact">
            <div class="section-formulaire">
                <h1>Des questions ?</h1>
                <form action="#" method="post">
                    <div class="groupe-champs">
                        <label for="nom">Nom *</label>
                        <input type="text" id="nom" name="nom" required>
                    </div>
                    
                    <div class="groupe-champs">
                        <label for="email">Email *</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="groupe-champs">
                        <label for="sujet">Sujet</label>
                        <input type="text" id="sujet" name="sujet">
                    </div>

                    <div class="groupe-champs">
                        <label for="message">Message *</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>

                    <button type="submit" class="bouton-envoyer">Envoyer</button>
                </form>
            </div>

            <aside class="boite-info">
                <h2>Pour nous joindre</h2>
                
                <div class="item-info">
                    <span>Courriel:</span>
                    <p>francisneron@hotmail.com</p>
                </div>

                <div class="item-info">
                    <span>Téléphone:</span>
                    <p>514-258-3829</p>
                </div>

                <div class="item-info">
                    <span>Adresse:</span>
                    <p>3770 rue Marian, Laval, H7P 1M5</p>
                </div>
            </aside>
        </section>
    </main>

    <footer class="pied-de-page-contact">
        <div class="haut-pied-page">
            <p>&copy; Tous droits réservés</p>
            <div class="icones-sociaux">
                <img src="img/instagram-icon.png" alt="Instagram">
                <img src="img/facebook-icon.png" alt="Facebook">
            </div>
        </div>
        <div class="bas-pied-page">
            <select name="langue" id="selection-langue">
                <option value="fr">Français</option>
                <option value="en">English</option>
            </select>
            <div class="details-coordonnees">
                <span>Coordonnées:</span>
                <a href="tel:5142583829">514-258-3829</a>
                <a href="mailto:francisneron@hotmail.com">francisneron@hotmail.com</a>
                <span>3770 rue Marian, Laval, Qc, H7P 1M5</span>
            </div>
        </div>
    </footer>