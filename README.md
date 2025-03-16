# Portfolio WordPress

##  Installation
1. **Cloner le projet** :
git clone https://github.com/ErwanLcz/portfolio_web.git
2. **Importer la base de données** :
mysql -u wpuser -p portfolio < portfolio.sql
3. **Déplacer les fichiers dans `/var/www/html/`**.

##  Fonctionnalités
- Affichage des réalisations (CPT Portfolio)
- Champs personnalisés avec SCF
- 📱 Responsive Design

##  Difficultés rencontrées
- Erreur JSON avec Gutenberg (résolue en désactivant l’éditeur).
- Problème d’affichage de la galerie SCF (résolu avec un Repeat Field).

##  Comment contribuer
1. Forker le repo.
2. Faire une branche : `git checkout -b feature-nouvelle-fonctionnalite`
3. Pusher et proposer une pull request.

---

