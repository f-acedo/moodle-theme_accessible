# Accessible : un thème Moodle pour les personnes aveugles, malvoyantes ou daltoniennes

**Languages :** [English](../../README.md) · [Español](../es/README.md) · [Català](../ca/README.md) · Français · [Italiano](../it/README.md) · [Português (Brasil)](../pt_br/README.md) · [Deutsch](../de/README.md)

**_Moodle devrait fonctionner pour toutes les personnes qui doivent l'utiliser, pas seulement pour celles qui ont une vue parfaite._**

Accessible est un thème pour Moodle 5.2 et versions ultérieures, basé sur Boost. Il a été conçu dès le départ pour trois groupes d'utilisateurs qui sont souvent livrés à eux-mêmes :

- **Les personnes totalement aveugles**, qui utilisent un lecteur d'écran.
- **Les personnes malvoyantes**, qui utilisent des loupes, le zoom du navigateur ou des verres spéciaux.
- **Les personnes ayant une déficience de la vision des couleurs** (daltonisme), pour qui « le bouton rouge » ou « le champ vert » ne veut rien dire.

L'objectif est que les étudiants, les enseignants et les administrateurs ayant ces besoins puissent réellement *percevoir et parcourir* Moodle, et pas seulement que les pages passent une liste de contrôle.

## Pourquoi il est différent

La plupart des thèmes partent d'un design visuel et corrigent l'accessibilité ensuite. Accessible fait l'inverse : chaque décision sur la couleur, la taille, l'ordre et la formulation a d'abord été prise pour ses utilisateurs.

- **Sobre par conception.** Fond blanc, texte noir, liens noirs soulignés, grandes cibles et indicateur de focus bien marqué. Rien de décoratif à désactiver.
- **La couleur ne porte jamais le sens à elle seule.** Les alertes ont un cadre coloré, un motif, un symbole *et* un mot écrit (« Erreur : », « Avertissement : »).
- **Tout s'adapte à la taille du texte.** Les tailles sont relatives : un texte plus grand donne un Moodle plus grand, les icônes, les boutons et les champs grandissent avec le texte.
- **L'utilisateur décide.** Chaque personne choisit sa police, la taille du texte, l'espacement, le contraste, le mouvement, le focus et la vision des couleurs, et peut le faire avant de se connecter.
- **Mesuré, pas supposé.** Le contraste du texte vise le niveau AAA des WCAG 2.1 (7:1 pour le texte normal, 4,5:1 pour le grand texte), vérifié par des analyses automatiques en contraste normal et élevé, à plusieurs tailles de texte, dans Chromium et Firefox.

## Fonctionnalités

### Pour tous les utilisateurs

- **Options d'accessibilité personnelles** sur une seule page, accessible depuis le bouton d'accessibilité toujours présent dans la barre supérieure :
  - **Police :** Lexend Deca (par défaut), Atkinson Hyperlegible ou OpenDyslexic. Les trois sont fournies avec le thème.
  - **Taille du texte :** 100 %, 125 %, 150 % ou 200 %. Toute la mise en page s'adapte, icônes et boutons compris.
  - **Espacement du texte :** normal, large ou très large.
  - **Contraste :** normal (noir sur blanc) ou élevé (blanc sur noir, le jaune étant réservé au survol et au focus).
  - **Mouvement :** normal ou réduit (le réglage du système est aussi respecté).
  - **Contour du focus :** normal ou épais.
  - **Filtres de vision des couleurs** pour les déficiences du rouge (protan), du vert (deutan) et du bleu (tritan), chacun en trois intensités, plus une vue sans couleur. Le blanc, le gris et le noir ne changent jamais.
- **Commandes grandes et tolérantes :** cibles d'au moins 44 px pour les boutons, champs de formulaire de 55 px, grandes cases à cocher et boutons radio, et barres de défilement larges et à fort contraste (dans Chrome, Edge et d'autres navigateurs Chromium ; Firefox garde sa propre largeur).
- **Une page qui a du sens quand on l'écoute :** le contenu principal vient avant les blocs, chaque zone de navigation a un nom, le champ du mot de passe a un bouton « Afficher le mot de passe » qui indique s'il est activé, et un bouton « Retour en haut » apparaît quand on fait défiler la page.
- **Options avant la connexion :** le bouton d'accessibilité est aussi sur la page de connexion. À la première connexion, ces choix sont copiés dans le compte, sauf si le compte a déjà les siens.

### Pour les administrateurs

- **Utilisez-le comme thème du site, ou proposez-le comme choix** à côté de votre thème principal (avec « Autoriser les thèmes utilisateur » activé). Les utilisateurs peuvent revenir à un autre thème depuis la même page.
- **Valeurs par défaut du site** pour la police, la taille du texte, l'espacement, le contraste, le mouvement et le focus, pour tout le monde, visiteurs compris.
- **Un onglet Informations** dans les réglages du thème, avec une image de test de vision des couleurs, des échantillons de polices, les licences et un résumé d'assistance que vous pouvez copier dans un rapport de bogue.
- **Un contrôle d'état** (Rapports > Statut du système) qui avertit quand les utilisateurs ne peuvent pas choisir le thème ou leurs options.
- **Confidentialité intégrée :** les préférences sont déclarées et exportées par l'API de confidentialité de Moodle. Les choix des visiteurs sont stockés dans un cookie qui ne contient que des options d'affichage.
- **Aucune requête externe pour les polices :** les polices sont fournies avec le thème.
- **Sept langues :** anglais, espagnol, catalan, français, italien, allemand et portugais du Brésil. Les traductions sont disponibles dans les paquetages de langue de Moodle.

## Bon à savoir

- L'aspect est **volontairement sobre**. Si vous avez besoin d'une identité visuelle marquée ou de couleurs personnalisées, ce thème n'est pas pour vous.
- Le thème ne peut pas modifier le contenu qu'il ne contrôle pas : **activités H5P, iframes intégrées et texte coloré à la main** dans le contenu des cours.
- À 200 % de taille de texte, quelques pages larges de Moodle (le carnet de notes, la page de gestion des cours et la page de tentative de test) peuvent encore défiler horizontalement.
- Certaines limites viennent de Moodle lui-même, par exemple des niveaux de titre sautés dans certaines pages du noyau.
- Le thème **n'a pas fait l'objet d'un audit ni d'une certification formels**. Aucun thème ne peut rendre un site accessible à lui seul : le contenu des cours compte tout autant.

## Prérequis et installation

- Moodle 5.2 ou version ultérieure, et le thème Boost (fourni avec Moodle).
- Sous Moodle 5.3, le thème utilise le menu principal classique, et non le nouveau menu de Moodle 5.3.
- Copiez le thème dans `public/theme/accessible` (le dossier doit s'appeler `accessible` ; si vous téléchargez le ZIP depuis GitHub, renommez d'abord le dossier), ou installez-le depuis *Administration du site > Plugins > Installer des plugins*, puis terminez l'installation depuis *Administration du site > Notifications*.
- Pour en faire le thème du site : *Administration du site > Présentation > Thèmes*.
- Pour que chaque utilisateur puisse le choisir et définir ses propres options, activez **Autoriser les thèmes utilisateur** (*Administration du site > Présentation > Réglages avancés du thème*).
- Lorsqu'il est proposé comme choix, la page de connexion utilise le thème du site. Pour donner aux utilisateurs un lien de connexion qui ouvre Accessible, activez **Autoriser le changement du thème dans l’URL** et partagez `https://your.site/login/index.php?theme=accessible` (voir le [guide](accessible-theme-guide.md#un-lien-de-connexion-qui-ouvre-accessible) pour le compromis).

Il n'y a pas d'étape de compilation : ni Grunt, ni npm, ni webpack.

## Journal des modifications

Version 1.0.0 (2026-11-11) : version initiale.

## Gestion des versions

**Le versionnage sémantique (SemVer) est un système de numérotation normalisé qui apporte clarté et prévisibilité au développement logiciel : il attribue à chaque version un numéro en trois parties (MAJOR.MINOR.PATCH).** Pour les plugins et les thèmes Moodle, son rôle principal est de communiquer aux administrateurs du système la nature exacte des changements de code et de structure avant qu'ils ne mettent à jour un site en production. En distinguant les petites corrections visuelles, les ajouts de fonctionnalités sans risque et les refontes d'architecture qui cassent la compatibilité, SemVer garantit que la maintenance de la plateforme reste sûre, que les mises à jour sont prévisibles et que les déploiements automatisés ne perturbent pas par inadvertance l'expérience des utilisateurs et n'altèrent pas la configuration de la base de données.

### Référence de versionnage du thème Accessible (SemVer)

| Type de version | Incrément de version | Ce que cela implique pour un thème Moodle | Exemples et détails techniques de Moodle |
| :--- | :--- | :--- | :--- |
| **Patch** | `0.0.Z` | **Petits ajustements de style et corrections d'erreurs.** Corrections purement esthétiques ou internes qui ne changent pas la façon dont le thème est configuré ou utilisé structurellement. | • Corriger un défaut de marge interne CSS ou de mise en page adaptative.<br>• Ajuster la couleur d'un bouton ou le contraste de la typographie.<br>• Résoudre un avis PHP mineur dans les journaux du serveur.<br>• *Ne modifie que les derniers chiffres de `$plugin->version` dans `version.php`.* |
| **Minor** | `0.Y.0` | **Nouvelles fonctionnalités ou adaptations sûres à la plateforme.** Ajouter des options qui ne transforment pas la structure du thème, ou mettre à jour le code pour prendre en charge une nouvelle version de Moodle tout en restant compatible avec les versions actuelles. | • Ajouter une option de mise en page ou une région de blocs sans supprimer les anciennes.<br>• Introduire un nouveau paramètre propre dans `settings.php` (par exemple, un interrupteur de l'en-tête).<br>• Mettre à jour le thème pour prendre en charge une nouvelle version mineure de Moodle.<br>• *Peut être automatisé sans risque ; ne casse pas les mises en page de cours existantes.* |
| **Major** | `X.0.0` | **Changements structurels qui cassent la compatibilité ou mises à niveau importantes.** Refontes fonctionnelles majeures qui demandent l'attention de l'administrateur, des modifications de la base de données ou l'abandon de la prise en charge d'anciennes versions de Moodle, ce qui pourrait casser le site lors de la mise à jour. | • Repenser entièrement la structure de la mise en page (supprimer ou renommer d'anciennes régions de blocs).<br>• Changer les noms des variables de configuration (les anciens paramètres du thème dans `config_plugins` seraient perdus).<br>• Mettre à jour le thème uniquement pour une nouvelle version majeure de Moodle en abandonnant les précédentes (il faut incrémenter `$plugin->requires`). |

## Pour en savoir plus

Le [guide complet](accessible-theme-guide.md) explique pourquoi le thème existe, les normes qu'il suit, chaque fonctionnalité en détail, les polices et leur histoire, et ses limites connues. Les détails techniques des filtres de vision des couleurs, les limites du contraste élevé et l'histoire des polices figurent à l'annexe A du guide.

[Code source et versions](https://github.com/f-acedo/moodle-theme_accessible). Rapports de bogues et suggestions : [suivi des tickets](https://github.com/f-acedo/moodle-theme_accessible/issues).

## Crédits et licence

Développé par Fernando Acedo et l'ancienne équipe de développement de Koditik. Claude Code a aidé à écrire des parties du thème, l'a relu et a aidé à le tester. Claude est une marque déposée d'Anthropic, PBC.

Sous licence **GNU GPL v3 ou ultérieure** (voir `LICENSE.txt`). Les polices incluses (Lexend Deca, Atkinson Hyperlegible et OpenDyslexic) sont sous licence **SIL Open Font License 1.1**.
