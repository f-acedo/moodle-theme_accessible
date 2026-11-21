# Le thème Accessible pour Moodle : le guide complet

Version 1.0.0 (stable), pour Moodle 5.2 et versions ultérieures.

Ce guide explique ce qu'est le thème Accessible, pourquoi il existe, les normes qu'il suit, chacune des fonctionnalités qu'il ajoute, les polices qu'il fournit et pourquoi elles ont été choisies, comment il a été testé et ce qu'il ne peut pas faire. Il s'adresse à toute personne qui doit décider de l'essayer ou non : administration du site, responsables de l'accessibilité, enseignement, support et utilisateurs eux-mêmes.

## Sommaire

1. [Présentation d'Accessible](#1-présentation-daccessible)
2. [Pourquoi ce thème existe](#2-pourquoi-ce-thème-existe)
3. [Principes de conception](#3-principes-de-conception)
4. [Normes et contexte juridique](#4-normes-et-contexte-juridique)
5. [Options d'accessibilité personnelles](#5-options-daccessibilité-personnelles)
6. [Conception visuelle : ce que voit chaque utilisateur](#6-conception-visuelle--ce-que-voit-chaque-utilisateur)
7. [Lecteurs d'écran et utilisateurs du clavier](#7-lecteurs-décran-et-utilisateurs-du-clavier)
8. [Mode contraste élevé](#8-mode-contraste-élevé)
9. [Filtres de vision des couleurs](#9-filtres-de-vision-des-couleurs)
10. [Polices : pourquoi ces trois](#10-polices--pourquoi-ces-trois)
11. [Fonctionnalités pour l'administration](#11-fonctionnalités-pour-ladministration)
12. [Confidentialité et données](#12-confidentialité-et-données)
13. [Langues](#13-langues)
14. [Comment le thème a été testé](#14-comment-le-thème-a-été-testé)
15. [Limites connues](#15-limites-connues)
16. [Accessible convient-il à votre site ?](#16-accessible-convient-il-à-votre-site-)
17. [Installation et configuration](#17-installation-et-configuration)
18. [Crédits, licences et sources](#18-crédits-licences-et-sources)

Annexe A. [Référence technique](#annexe-a-référence-technique)

---

## 1. Présentation d'Accessible

Accessible est un thème pour **Moodle 5.2 et versions ultérieures**. C'est un thème enfant de **Boost**, le thème standard de Moodle : il conserve donc la mise en page, la navigation et le comportement de Boost, et modifie leur apparence, leur mise à l'échelle et la façon dont ils sont annoncés.

Il est conçu pour trois groupes de personnes :

- **Les personnes aveugles** qui utilisent un lecteur d'écran (comme NVDA, JAWS, VoiceOver ou TalkBack). Pour elles, ce qui compte, c'est l'ordre dans lequel la page est lue, les noms des boutons et des zones de navigation, et la possibilité de tout faire au clavier.
- **Les personnes malvoyantes**, par exemple une personne qui dispose d'environ 30 % de la vision normale et utilise une loupe d'écran, le zoom du navigateur ou des lentilles spéciales. Pour elles, ce qui compte, c'est le contraste, la taille, un indicateur de focus clair et une mise en page qui ne se casse pas quand tout est agrandi.
- **Les personnes ayant une déficience de la vision des couleurs** (daltonisme). Pour elles, ce qui compte, c'est qu'aucune information ne soit donnée par la couleur seule, et que des couleurs qui se ressemblent puissent être rendues différentes.

L'objectif est que ces personnes puissent réellement **percevoir et parcourir** Moodle de manière autonome, et pas seulement que les pages passent une liste de contrôle automatique.

Accessible peut être utilisé de deux façons : comme **thème du site** pour tout le monde, ou comme **thème alternatif** que chaque utilisateur peut choisir pour lui-même, tandis que les autres conservent l'apparence habituelle du site.

---

## 2. Pourquoi ce thème existe

### Les utilisateurs

Les troubles de la vision sont fréquents. Le [*Rapport mondial sur la vision*](https://www.who.int/publications/i/item/9789241516570) de l'Organisation mondiale de la santé (2019) estime qu'**au moins 2,2 milliards de personnes** dans le monde souffrent d'une déficience de la vision de près ou de loin. La déficience de la vision des couleurs touche environ **1 homme sur 12 et 1 femme sur 200**, selon [Colour Blind Awareness](https://www.colourblindawareness.org/colour-blindness/). Dans toute école, université ou entreprise qui utilise Moodle, certains étudiants, enseignants et membres du personnel font partie de ces groupes, qu'ils l'aient dit ou non.

### Moodle et l'accessibilité

Moodle prend l'accessibilité au sérieux : son noyau est développé en tenant compte de l'accessibilité et vérifié par rapport aux WCAG. Boost, son thème par défaut, est une base solide. Mais un thème généraliste doit concilier de nombreux objectifs à la fois : image de marque, conception visuelle, densité de l'information et besoins de l'utilisateur moyen. Certains choix qui conviennent à la plupart des gens sont difficiles pour les utilisateurs auxquels ce thème est destiné :

- Un texte gris clair et des bordures fines qui n'atteignent pas les niveaux de contraste supérieurs.
- Des fonds bleu pâle ou gris pour indiquer un état (sélectionné, survol, désactivé), difficiles à voir avec une vision réduite ou sous une loupe.
- De petites cibles (icônes, liens dans des lignes) difficiles à atteindre en cas de tremblement ou sous grossissement.
- Des tailles et des points de rupture en pixels qui ne grandissent pas quand l'utilisateur choisit une taille de texte plus grande.
- Des alertes dont le sens dépend en grande partie de leur couleur.

La plupart des thèmes partent d'une conception visuelle et corrigent les problèmes d'accessibilité ensuite, une réclamation après l'autre. Accessible fait l'inverse : **le public est venu en premier**, et chaque décision sur la couleur, la taille, l'ordre et la formulation a été prise pour lui.

### Pas un remplacement d'un bon contenu

Un thème contrôle le cadre autour du contenu : menus, boutons, formulaires, alertes, navigation. Il ne peut pas réécrire ce que les enseignants mettent dans leurs cours. Une image sans alternative textuelle, un PDF numérisé comme une image ou une vidéo sans sous-titres reste inaccessible quel que soit le thème. Accessible rend la plateforme aussi claire que possible ; le contenu des cours demande encore de l'attention de la part de ses auteurs (voir [Limites connues](#15-limites-connues)).

---

## 3. Principes de conception

Cinq règles guident chaque partie du thème.

1. **Sobre et à fort contraste par défaut.** Le fond est blanc partout et le texte est noir. Les liens sont noirs et soulignés (avec un soulignement plus épais au survol), pas bleus ni violets. Les décorations inutiles sont supprimées, et ce qui est nécessaire est rendu plus visible.
2. **La couleur n'est jamais le seul signal.** Chaque état que Moodle montre avec de la couleur a aussi une forme, un motif, un symbole ou un mot. Les alertes, par exemple, combinent un cadre coloré, une bande à motif, un symbole et le type de message écrit.
3. **Des cadres colorés, pas des fonds colorés.** Les alertes et les messages d'état gardent le fond blanc et montrent leur couleur sous la forme d'un cadre (bordure). Un fond coloré pâle réduit le contraste du texte qui s'y trouve ; un cadre ne le fait pas.
4. **Tout évolue avec le texte.** Les tailles sont relatives (en `rem`) : une taille de texte plus grande donne donc un Moodle plus grand, avec des icônes, des boutons, des champs de formulaire, des tiroirs et des cibles tactiles qui grandissent avec le texte.
5. **La personne décide.** La police, la taille du texte, l'espacement, le contraste, les animations, le focus et la vision des couleurs sont des options personnelles. L'administration du site définit des valeurs par défaut raisonnables, et chaque utilisateur peut les modifier.

---

## 4. Normes et contexte juridique

### WCAG 2.1

Les [**Web Content Accessibility Guidelines (WCAG) 2.1**](https://www.w3.org/TR/WCAG21/) sont la référence internationale de l'accessibilité du Web. Elles sont publiées par le [World Wide Web Consortium (W3C)](https://www.w3.org/WAI/) et organisées autour de quatre principes : le contenu doit être *perceptible*, *utilisable*, *compréhensible* et *robuste*. Chaque critère de succès a un niveau :

- **Niveau A** : le minimum.
- **Niveau AA** : le niveau que la plupart des lois et des règles du secteur public exigent.
- **Niveau AAA** : le niveau le plus élevé. Le W3C [ne recommande pas](https://www.w3.org/WAI/WCAG21/Understanding/conformance) d'exiger le niveau AAA pour des sites entiers, car certains critères ne peuvent pas être satisfaits pour tous les contenus.

Les [WCAG 2.2](https://www.w3.org/TR/WCAG22/) (2023) ajoutent des critères à la version 2.1, mais de nombreuses lois renvoient encore aux WCAG 2.1 niveau AA.

### Ce que vise Accessible

Accessible prend les **WCAG 2.1 niveau AAA** comme objectif pour tout ce que le thème dessine. En pratique, cela signifie :

| Critère WCAG | Ce qu'il demande | Ce que fait le thème |
|---|---|---|
| [1.4.6 Contrast (Enhanced)](https://www.w3.org/WAI/WCAG21/Understanding/contrast-enhanced), AAA | 7:1 pour le texte normal, 4,5:1 pour le grand texte | Toutes les couleurs du thème sont choisies pour atteindre 7:1 ou plus, en contraste normal et élevé. Mesuré par des analyses automatisées (voir la [section 14](#14-comment-le-thème-a-été-testé)). |
| [1.4.11 Non-text Contrast](https://www.w3.org/WAI/WCAG21/Understanding/non-text-contrast), AA | 3:1 pour les bordures des contrôles, les indicateurs de focus et les graphiques porteurs de sens | Cadres noirs de 2 px sur les champs, les cases à cocher et les boutons radio ; anneau de focus noir avec un halo blanc. |
| [1.4.1 Use of Colour](https://www.w3.org/WAI/WCAG21/Understanding/use-of-color), A | La couleur n'est pas le seul moyen de transmettre une information | Les alertes ont cadre + motif + symbole + mot ; les contrôles désactivés ont une bordure en tirets ; les éléments sélectionnés sont en gras ou inversés. |
| [1.4.4 Resize Text](https://www.w3.org/WAI/WCAG21/Understanding/resize-text), AA, et [1.4.10 Reflow](https://www.w3.org/WAI/WCAG21/Understanding/reflow), AA | Le texte peut être agrandi jusqu'à 200 % et la page se réorganise | Option de taille du texte jusqu'à 200 %, tout en `rem`, lignes autorisées à passer à la ligne. Certaines pages de Moodle défilent encore horizontalement à 200 % (voir [Limites connues](#15-limites-connues)). |
| [1.4.8 Visual Presentation](https://www.w3.org/WAI/WCAG21/Understanding/visual-presentation), AAA | Interligne, pas de texte justifié, couleurs choisies par l'utilisateur | Hauteur de ligne 1,6, options d'espacement, texte justifié affiché aligné au début, option de contraste élevé. |
| [1.4.12 Text Spacing](https://www.w3.org/WAI/WCAG21/Understanding/text-spacing), AA | La page résiste à un interligne et à un espacement des lettres et des mots plus grands | L'option d'espacement « très large » applique exactement les valeurs WCAG (0,12em pour les lettres, 0,16em pour les mots) et davantage de hauteur de ligne. |
| [2.3.3 Animation from Interactions](https://www.w3.org/WAI/WCAG21/Understanding/animation-from-interactions), AAA | Le mouvement peut être désactivé | Option d'animations réduites ; le paramètre système `prefers-reduced-motion` est aussi respecté. |
| [2.4.1 Bypass Blocks](https://www.w3.org/WAI/WCAG21/Understanding/bypass-blocks), A | Passer le contenu répété | Lien « Passer au contenu principal » en premier sur chaque page ; contenu principal avant les blocs. |
| [2.4.7 Focus Visible](https://www.w3.org/WAI/WCAG21/Understanding/focus-visible), AA | Le focus du clavier est visible | Anneau de focus de 4 px (8 px avec l'option épaisse) à la place de celui du navigateur. |
| [2.5.5 Target Size](https://www.w3.org/WAI/WCAG21/Understanding/target-size), AAA | Cibles d'au moins 44 × 44 pixels CSS | Les boutons et les contrôles de formulaire font au moins 44 px ; les champs font 55 px. Quelques lignes de liens de Moodle sont encore plus petites (voir [Limites connues](#15-limites-connues)). |
| [4.1.2 Name, Role, Value](https://www.w3.org/WAI/WCAG21/Understanding/name-role-value), A | Les contrôles et les régions ont des noms | Chaque zone de navigation a un nom ; le bouton d'affichage du mot de passe indique son état. |

### Lois et règles du secteur public

De nombreuses lois sur l'accessibilité reposent sur les WCAG 2.1 niveau AA, généralement par l'intermédiaire d'autres normes :

- **Union européenne.** La [*directive sur l'accessibilité des sites internet*](https://eur-lex.europa.eu/eli/dir/2016/2102/oj) (directive (UE) 2016/2102) couvre les sites internet et les applications du secteur public. L'[*Acte européen sur l'accessibilité*](https://eur-lex.europa.eu/eli/dir/2019/882/oj) (directive (UE) 2019/882) s'applique à de nombreux produits et services privés à partir du 28 juin 2025. Les deux s'appuient sur la norme harmonisée [**EN 301 549**](https://www.etsi.org/human-factors-accessibility/en-301-549-v3-the-harmonized-european-standard-for-ict-accessibility), qui inclut les WCAG 2.1 niveau AA pour le contenu Web.
- **États-Unis.** La [**Section 508**](https://www.access-board.gov/ict/) du Rehabilitation Act couvre les agences fédérales et renvoie aux WCAG 2.0 niveau AA. En avril 2024, le Department of Justice a [adopté](https://www.ada.gov/resources/2024-03-08-web-rule/) les **WCAG 2.1 niveau AA** comme norme technique pour les sites Web des administrations des États et des collectivités locales au titre du Title II de l'Americans with Disabilities Act (ADA). Une règle finale provisoire d'avril 2026 a repoussé les dates de mise en conformité d'un an (avril 2027 pour les entités qui desservent 50 000 personnes ou plus, avril 2028 pour les plus petites) ; consultez [ada.gov](https://www.ada.gov/) pour les dates en vigueur.
- D'autres pays ont des règles similaires, la plupart fondées sur les WCAG.

**Ce que cela signifie pour vous :** Accessible est conçu pour tendre vers les WCAG 2.1 AAA pour les parties qu'il contrôle, ce qui est au-dessus du niveau AA exigé par ces lois. Toutefois, **le thème n'a pas fait l'objet d'un audit ni d'une certification formels**, et la conformité est une propriété d'un site entier (plateforme, plugins et contenu), pas d'un thème. Accessible vous donne une base solide ; il ne remplace pas un audit d'accessibilité de votre propre site et de vos cours.

---

## 5. Options d'accessibilité personnelles

Chaque utilisateur, y compris les visiteurs non connectés, dispose d'une **page d'options d'accessibilité**. On y accède depuis :

- le **bouton d'accessibilité** (le symbole d'accès universel), toujours présent dans la barre supérieure de chaque page ;
- le même bouton dans le coin supérieur droit de la **page de connexion** ;
- le **profil** de l'utilisateur (lien « Accessibilité ») et la page **Préférences**.

Chaque option explique ce qu'elle fait. Vous pouvez enregistrer et revenir, enregistrer et rester, annuler ou rétablir les valeurs par défaut du site.

### Police

Trois polices, toutes fournies avec le thème : **Lexend Deca** (par défaut), **Atkinson Hyperlegible** et **OpenDyslexic**. Voir la [section 10](#10-polices--pourquoi-ces-trois) pour savoir pourquoi ces trois-là.

### Taille du texte

**100 %, 125 %, 150 % ou 200 %.** L'option modifie la taille de police de la racine et, comme chaque taille du thème est en `rem`, toute la page grandit avec elle : texte, icônes, boutons, champs de formulaire, cases à cocher, tiroirs, barres de défilement et cibles tactiles. C'est différent du zoom du navigateur, qui fonctionne aussi : l'option de taille du texte conserve la largeur de la fenêtre et laisse la mise en page se réorganiser, ce qui convient aux personnes qui veulent un texte plus grand sans perdre la mise en page.

Aux tailles supérieures, la mise en page s'adapte : la barre supérieure passe sur deux lignes et, quand elle occuperait plus d'un quart de la fenêtre, elle se masque quand vous faites défiler vers le bas et revient en haut de la page ou quand le focus y entre. Le menu principal passe plus tôt dans le bouton de menu (☰), pour que la barre laisse de la place à la page. Les libellés de formulaire se placent au-dessus de leurs champs, les menus passent à la ligne, les cartes de profil s'affichent sur une seule colonne, les longs menus reçoivent une hauteur maximale pour rester à l'écran, la barre Enregistrer et Annuler des longs formulaires reste à la fin du formulaire au lieu de le couvrir, et les mots longs des titres de section des formulaires sont coupés avec un trait d'union au lieu de faire défiler la page horizontalement.

Sur les petits écrans, la taille du texte est plafonnée pour que chaque ligne garde assez de mots : jusqu'à 150 % sur les écrans de moins de 768 px (petites tablettes) et jusqu'à 125 % sous 480 px (téléphones). Les écrans plus grands reçoivent la taille choisie.

### Espacement du texte

- **Normal :** hauteur de ligne 1,6.
- **Large :** hauteur de ligne 1,8, espacement des lettres et des mots légèrement plus large.
- **Très large :** hauteur de ligne 2, espacement des lettres 0,12em, espacement des mots 0,16em et davantage d'espace après les paragraphes. Ce sont les valeurs du [critère WCAG 1.4.12 (Text Spacing)](https://www.w3.org/WAI/WCAG21/Understanding/text-spacing).

Un espacement plus large aide de nombreux lecteurs malvoyants ou dyslexiques à ne pas perdre leur place dans la ligne.

### Contraste

- **Normal :** texte noir sur fond blanc, le jaune étant utilisé pour le survol et le focus (par défaut).
- **Élevé :** texte blanc sur fond noir, le jaune étant réservé au survol et au focus. Voir la [section 8](#8-mode-contraste-élevé).

### Animations

- **Normal** ou **Réduites.** Les animations réduites désactivent les animations, les transitions et le défilement fluide. Si le système d'exploitation est réglé pour réduire les animations, le thème fait de même même lorsque l'option est « Normal ». Cela aide les personnes atteintes de troubles vestibulaires, ainsi que les utilisateurs de loupe, qui peuvent perdre leur place quand la page bouge.

### Contour de focus

- **Normal :** un anneau de 4 px autour de l'élément qui a le focus du clavier : noir avec un halo blanc, ou jaune avec un halo noir en contraste élevé.
- **Épais :** l'anneau passe à 8 px, plus facile à repérer sous une loupe ou avec une vision réduite.

### Vision des couleurs

Un type (**protan**, **deutan**, **tritan** ou **sans couleur**) et une intensité (**légère**, **moyenne** ou **forte**). Les couleurs de la page sont décalées pour que les couleurs qui se ressemblent pour l'utilisateur deviennent différentes. Voir la [section 9](#9-filtres-de-vision-des-couleurs).

### Où les choix sont conservés

- **Utilisateurs connectés :** sous forme de préférences utilisateur Moodle, qui suivent donc l'utilisateur sur n'importe quel ordinateur.
- **Visiteurs et invités :** dans un cookie (voir la [section 12](#12-confidentialité-et-données)).
- **À la première connexion :** si le compte n'a pas encore d'options propres, les choix faits en tant que visiteur sont copiés dans le compte, et un message l'indique. Si le compte a déjà ses propres options, c'est le compte qui l'emporte. Seuls les choix faits au cours de la même visite, juste avant la connexion, sont copiés : pas les options laissées dans le navigateur par une autre personne sur un ordinateur partagé.

### Changer de thème

Si le site permet aux utilisateurs de choisir leur thème, la même page propose un sélecteur de thème qui liste tous les thèmes installés. Les utilisateurs peuvent essayer Accessible et le quitter à nouveau sans rien demander à personne.

---

## 6. Conception visuelle : ce que voit chaque utilisateur

Ces changements s'appliquent à toutes les personnes qui utilisent le thème, quelles que soient leurs options.

### Couleurs et liens

- Fond blanc partout, texte noir.
- Les liens sont noirs et soulignés ; le soulignement s'épaissit au survol. Il n'y a ni bleu ni violet, et les liens visités ont le même aspect : la couleur d'un lien n'a donc jamais besoin d'être déchiffrée.
- Le texte atténué (secondaire) est un gris foncé qui atteint tout de même 7:1, jamais les gris pâles d'un thème standard.
- Le code en ligne est affiché dans un magenta foncé qui atteint 7:1 (le rose de Bootstrap est à environ 4,8:1).
- Le texte qu'un auteur a justifié est affiché aligné au début de la ligne : le texte justifié crée des écarts irréguliers difficiles à lire pour de nombreuses personnes dyslexiques ou malvoyantes.

### Focus

Chaque élément interactif affiche un anneau noir de 4 px lorsqu'il a le focus du clavier (8 px avec l'option épaisse) ; les boutons et les champs de formulaire reçoivent aussi un halo blanc, qui garde l'anneau visible sur n'importe quel fond. Les boutons, les éléments de menu et les liens de pagination se remplissent aussi de jaune, avec un texte noir, au focus et au survol. En contraste élevé, l'anneau lui-même est jaune, avec un halo noir. La « lueur » bleu pâle de Bootstrap est supprimée. La page laisse aussi de l'espace en haut quand elle défile jusqu'à un élément qui a le focus, afin que la barre supérieure fixe ne le recouvre jamais.

### Boutons et cibles

- Chaque bouton a une taille minimale de **44 × 44 px** (la taille de cible WCAG AAA) et une marge intérieure généreuse.
- Les barres de pagination, comme le filtre alphabétique de A à Z de la page des participants, ont des cibles de 44 px avec un cadre de 2 px ; l'élément courant est blanc sur noir et en gras ; le survol donne un fond jaune.
- Les contrôles désactivés ont un fond gris **et** une bordure en tirets, afin de ne pas être indiqués par la couleur seule.

### Formulaires

- Les champs de texte, les menus déroulants, les zones de texte et les boutons font tous **55 px** de haut.
- Les cases à cocher et les boutons radio sont dessinés par le thème : **28 px**, avec une bordure noire de 2 px. Coché signifie noir avec une coche ou un point blanc ; désactivé signifie une bordure en tirets et un fond gris.
- Les champs obligatoires conservent un astérisque bien visible, et les messages de validation ne s'affichent qu'en cas d'erreur, encadrés et à côté du champ.
- L'interrupteur du mode d'édition dans la barre supérieure est une piste blanche avec un bouton noir lorsqu'il est désactivé, et une piste noire avec un bouton blanc lorsqu'il est activé : son état est donc indiqué par la position et la forme autant que par la couleur.

### Alertes et notifications

Les alertes de Moodle (erreur, avertissement, succès, information) sont repensées pour que leur sens ne dépende jamais de la couleur :

- un **fond blanc** (pas de fond teinté), pour que le texte garde son plein contraste ;
- un **cadre coloré** de la couleur de l'alerte ;
- une **bande à motif** à gauche, différente pour chaque type ;
- un **symbole** à côté de la première ligne de texte ;
- le **type écrit en gras** avant le message : « Erreur : », « Avertissement : », « Succès : », « Information : » ;
- une infobulle sur la bande et le symbole indiquant le type d'alerte.

Une personne qui ne voit aucune couleur, ou qui utilise un lecteur d'écran, obtient quand même le type du message. Les alertes écrites par d'autres plugins avec un balisage d'alerte simple reçoivent aussi le cadre, le motif et le symbole (mais pas le mot écrit, qui provient des modèles d'alerte propres au thème).

### Barres de défilement

Les barres de défilement font **24 px** de large, avec un curseur noir sur une piste blanche encadrée, partout : page, tiroirs et tableaux. Elles n'ont volontairement aucun effet au survol ni au glissement : une barre de défilement qui change de taille ou de couleur sous le pointeur saute pour les personnes qui ont un tremblement ou qui utilisent une loupe. La largeur fonctionne dans Chrome, Edge et les autres navigateurs Chromium ; Firefox conserve sa propre largeur mais utilise les couleurs.

### En-tête et pied de page

- La barre supérieure n'affiche que l'essentiel et est noire avec du texte blanc dans tous les modes.
- Le pied de page est toujours visible et court : les boutons flottants d'aide et de communication, la ligne « Connecté sous le nom » et la version de Moodle sont supprimés. Les liens ajoutés par des plugins (par exemple le résumé de la conservation des données) sont conservés.
- Les avatars d'initiales (les cercles colorés avec des lettres) sont masqués, sauf lorsqu'ils sont le lien vers un profil ; les photos des utilisateurs restent.

---

## 7. Lecteurs d'écran et utilisateurs du clavier

Accessible a été vérifié avec l'arbre d'accessibilité du navigateur et des analyses au clavier (voir la [section 14](#14-comment-le-thème-a-été-testé)). Les changements sont les suivants :

- **Lien d'évitement en premier.** « Passer au contenu principal » est la première chose sur chaque page.
- **Options d'accessibilité en deuxième.** Le bouton d'accessibilité est l'élément suivant dans l'ordre du clavier : un utilisateur peut donc atteindre ses options en deux pressions de touche. (Il est affiché à droite de la barre supérieure.)
- **Contenu principal avant les blocs.** Dans Boost, le tiroir des blocs vient avant le contenu principal dans le code de la page. Dans Accessible, il vient après : un lecteur d'écran lit donc d'abord le contenu de la page. La mise en page visuelle ne change pas.
- **Chaque zone de navigation a un nom** : « Menu principal », « Menu de la page », « Index du cours » et les menus à l'intérieur des pages, afin qu'un utilisateur qui liste les repères d'une page sache ce que chacun est.
- **Le champ de mot de passe** a un bouton « Afficher le mot de passe » qui indique au lecteur d'écran si le mot de passe est visible (appuyé ou non appuyé).
- **Retour en haut.** Un bouton apparaît en bas à droite une fois que la page a défilé d'environ un écran. Il ramène l'utilisateur en haut et place le focus sur le lien d'évitement : les utilisateurs du clavier et des lecteurs d'écran retournent donc vraiment au début, et pas seulement la page visuelle. Il se masque lorsque le focus est sur un contenu situé en dessous, pour ne jamais recouvrir l'élément qui a le focus.
- **Bouton « ← Retour au cours »** en haut de l'index du cours dans une activité, pour revenir à la page du cours.
- **L'index du cours s'ouvre et se ferme au même endroit.** Dans Boost, le bouton qui ferme l'index du cours se trouve
  à l'autre bout de son en-tête, loin du bouton qui l'ouvre. Dans Accessible, il apparaît exactement là où se trouvait le
  bouton d'ouverture : le tiroir s'ouvre et se ferme sans déplacer le pointeur ni la vue agrandie, et c'est le premier
  élément du tiroir au clavier.

---

## 8. Mode contraste élevé

Le contraste élevé est une option personnelle (et peut être la valeur par défaut du site). Il transforme la page en **texte blanc sur fond noir** :

- Le texte secondaire est un gris très clair (#E0E0E0), toujours au-dessus de 7:1 sur le noir.
- Les liens sont blancs et soulignés, comme le texte.
- Le **jaune** (#FFE600) n'est utilisé que pour le survol et le focus : fonds au survol et anneau de focus, avec du texte noir sur jaune.
- Les alertes conservent leurs cadres, leurs motifs et leurs symboles, dans des couleurs plus vives qui atteignent le niveau de contraste sur le noir.
- Les cartes, menus, boîtes de dialogue et formulaires de Moodle passent en sombre grâce au mode sombre propre à Bootstrap, pour être cohérents.
- La barre supérieure garde son aspect habituel, et la zone d'édition de l'éditeur (TinyMCE) est assombrie par un filtre.

Le mode normal n'est pas affecté : la palette claire est exactement la même avec ou sans cette option disponible.

Ce que le contraste élevé ne peut pas changer (H5P, iframes, contenu des enseignants avec ses propres couleurs) est listé dans [Limites connues](#15-limites-connues).

---

## 9. Filtres de vision des couleurs

### Ce qu'ils font

La déficience de la vision des couleurs signifie que certaines couleurs qui paraissent différentes à la plupart des gens paraissent identiques à l'utilisateur, le plus souvent les rouges et les verts. L'option de vision des couleurs applique sur toute la fenêtre un filtre qui **déplace les couleurs que l'utilisateur ne peut pas distinguer vers des couleurs qu'il peut distinguer**, de sorte que les différences redeviennent visibles.

### Les options

- **Type :**
  - **Protan :** sensibilité faible ou absente au rouge.
  - **Deutan :** sensibilité faible ou absente au vert.
  - **Tritan :** sensibilité faible ou absente au bleu.
  - **Sans couleur :** la page est affichée en gris.
- **Intensité :** **légère** (les types « -anomalie », où le cône fonctionne en partie), **moyenne**, ou **forte** (les types « -anopie », où le cône est absent). La vue sans couleur ignore l'intensité.

Si un utilisateur ne connaît pas son type, il peut les essayer tous et garder celui où les éléments rouges, verts et bleus paraissent le plus différents. C'est une aide, pas un test médical.

### Comment cela fonctionne

Chaque filtre est une matrice de couleurs SVG appliquée par une couche couvrant toute la fenêtre, construite en deux étapes :

1. **Simulation :** ce que voit une personne ayant cette déficience, à l'aide du [modèle publié](https://doi.org/10.1109/TVCG.2009.113) de Machado, Oliveira et Fernandes (2009), mis à l'échelle selon l'intensité choisie.
2. **Correction :** la part de la couleur que l'utilisateur ne peut pas voir est déplacée vers les canaux qu'il voit encore (le rouge vers le vert et le bleu pour protan et deutan ; le bleu vers le rouge et le vert pour tritan). Cette technique est connue sous le nom de « daltonisation ».

**Le blanc, le gris et le noir ne changent pas** : le texte et les fonds conservent donc leur contraste.

### Comment cela a été vérifié

Des échantillons colorés ont été dessinés sur une page pour chaque combinaison de type et d'intensité, et leurs couleurs de pixels ont été relues. Le blanc, le noir et le gris étaient inchangés dans tous les cas ; chaque intensité déplaçait les couleurs plus loin que la précédente ; la vue sans couleur transformait chaque échantillon en un gris pur.

### Limites

- Les matrices proviennent de valeurs publiées. Elles n'ont **pas été validées cliniquement**, et seules les personnes ayant une déficience de la vision des couleurs peuvent confirmer qu'elles aident. Un test avec de vrais utilisateurs sur du vrai contenu de cours est recommandé.
- Les images et les vidéos sont filtrées aussi, car le filtre couvre toute la fenêtre. Cela inclut H5P et les contenus intégrés de tiers comme YouTube et Vimeo dans Chrome, Edge et Firefox. Dans un navigateur qui ne peut pas appliquer la couche, le filtre est appliqué à la page à la place et les contenus intégrés de tiers conservent leurs propres couleurs.
- La **vidéo en plein écran** et les boîtes de dialogue modales natives sont dessinées par le navigateur au-dessus de tout et ne sont pas filtrées. Les filtres de couleur du système d'exploitation (Windows, macOS, iOS et Android) les couvrent.
- L'effet d'un filtre sur toute la fenêtre sur la vitesse des ordinateurs lents n'a pas été mesuré.

### Test de vision des couleurs pour l'administration

L'onglet **Informations** des réglages du thème affiche la même image de test onze fois : l'originale, la vue sans couleur et chaque type dans chaque intensité. L'administration peut ainsi voir comment les couleurs du site apparaissent à chaque utilisateur. L'image est le dessin propre au thème, pas une planche d'Ishihara, et ce n'est pas un test médical.

---

## 10. Polices : pourquoi ces trois

### Pourquoi offrir un choix

Aucune police n'est la meilleure pour tout le monde. Le confort de lecture dépend de la personne, de ses yeux et de la tâche. Le thème fournit donc trois polices aux objectifs de conception différents, laisse chaque utilisateur les essayer et garder celle qui lui convient, et laisse l'administration choisir la police par défaut du site.

Les trois sont fournies avec le thème sous forme de fichiers de polices Web : **aucune requête n'est envoyée à Google Fonts ni à aucun autre service externe**, ce qui est meilleur pour la confidentialité et fonctionne sur des réseaux sans accès à Internet. Les trois sont sous licence **SIL Open Font License 1.1**. L'onglet Informations des réglages du thème montre un spécimen de chaque police, en normal et en gras, y compris les caractères les plus faciles à confondre : `I / l / 1`, `O / 0`, `rn / m`, `cl / d`.

| Police | Créée par | Idée principale |
|---|---|---|
| [**Lexend Deca**](https://www.lexend.com/) (par défaut) | Dr Bonnie Shaver-Troup et Thomas Jockin | Espacement des lettres large et régulier pour rendre la lecture plus fluide |
| [**Atkinson Hyperlegible**](https://www.brailleinstitute.org/freefont/) | Braille Institute of America, conçue avec Applied Design Works | Des formes de lettres faciles à distinguer, pour la vision réduite |
| [**OpenDyslexic**](https://opendyslexic.org/) | Abbie Gonzalez | Bas des lettres plus lourds, destinés à aider les lecteurs dyslexiques |

### Lexend Deca (par défaut)

**Historique.** Lexend est l'œuvre du Dr Bonnie Shaver-Troup, thérapeute en éducation, et du créateur de caractères Thomas Jockin. À partir de son travail avec des lecteurs en difficulté, elle a proposé que la lecture s'améliore avec une police sans empattement, des proportions étendues et un espacement des caractères plus large. Ils l'ont développée vers 2018 et elle a été publiée sur [Google Fonts](https://fonts.google.com/specimen/Lexend+Deca) en 2019. Lexend est basée sur [Quicksand](https://fonts.google.com/specimen/Quicksand), un caractère lancé par Andrew Paglinawan en 2008. La famille compte sept largeurs, de **Deca** (la plus étroite) à Zetta (la plus large) ; en 2021, un axe de graisse a été ajouté.

**Pourquoi c'est la police par défaut.** Lexend Deca est une police sans empattement claire et ouverte, à l'espacement généreux mais assez compacte pour une interface dense comme Moodle, et elle se lit bien aux petites comme aux grandes tailles.

### Atkinson Hyperlegible

**Historique.** Atkinson Hyperlegible a été créée pour le **Braille Institute of America** et publiée en 2019, l'année du centenaire de l'institut. Elle a été conçue par l'agence Applied Design Works dans le cadre de la nouvelle identité de l'institut, et porte le nom du fondateur de l'institut, J. Robert Atkinson. Elle a remporté en 2019 le prix Innovation by Design de Fast Company et, en 2024, est entrée dans la collection permanente du Cooper Hewitt, Smithsonian Design Museum. En 2025, le Braille Institute a publié **Atkinson Hyperlegible Next**, avec plus de graisses et une couverture linguistique plus large, ainsi qu'une version à chasse fixe.

**L'idée.** La plupart des caractères visent des lettres uniformes. Atkinson Hyperlegible fait l'inverse : elle donne la priorité aux **différences entre les caractères** pour que les lecteurs malvoyants puissent les distinguer, avec des formes ouvertes et des dessins distincts pour les paires faciles à confondre, comme le I majuscule, le l minuscule et le chiffre 1, ou le O et le 0.

**Pourquoi elle est proposée.** C'est la police la plus directement conçue pour les utilisateurs malvoyants que ce thème sert. Le thème fournit la version d'origine en normal et en gras.

### OpenDyslexic

**Historique.** OpenDyslexic a été créée par Abbie Gonzalez, qui est dyslexique, et publiée pour la première fois en 2011. Elle est open source et dérivait à l'origine de Bitstream Vera Sans.

**L'idée.** Ses lettres ont un **bas plus lourd**. L'autrice dit que ce poids indique quel côté est le bas, ce qui aide les lecteurs à reconnaître les lettres et peut les empêcher de les retourner ou de les faire pivoter mentalement (par exemple b, d, p et q). Les formes des lettres sont aussi rendues plus distinctes, et l'espacement est plus large.

### Ce que couvrent les polices

Lexend Deca et Atkinson Hyperlegible sont fournies avec les jeux de caractères latin et latin étendu, les mêmes fichiers que ceux que sert Google Fonts, qui couvrent les sept langues du thème et la plupart des langues européennes ; ces deux polices n'ont pas de caractères grecs ni cyrilliques. OpenDyslexic est fournie complète, telle que son autrice la publie : outre le latin, elle couvre le grec, le cyrillique et l'alphabet phonétique international. Les caractères qu'une police n'a pas (par exemple l'arabe ou les écritures asiatiques, ou le grec et le cyrillique avec Lexend Deca et Atkinson Hyperlegible) sont affichés dans la police sans empattement du système.

---

## 11. Fonctionnalités pour l'administration

### Réglages du thème

- Onglet **Valeurs par défaut des utilisateurs** : la police, la taille du texte, l'espacement, le contraste, les animations et le focus par défaut pour tout le site, y compris les visiteurs et la page de connexion. Le choix propre à un utilisateur l'emporte toujours sur la valeur par défaut. (La vision des couleurs n'a pas de valeur par défaut pour le site, car elle est personnelle.)
- Onglet **Informations** (dernier onglet) :
  - la version du thème, lue à partir des informations du plugin ;
  - un bouton **Documentation**, en haut, qui ouvre ce guide dans un nouvel onglet, dans la langue de l'utilisateur lorsque le guide y a été traduit et en anglais sinon. La page propose aussi le guide en fichier Markdown à télécharger. Seule l'administration peut l'ouvrir ;
  - des **informations pour le support** en lignes de texte brut (versions du thème, de Moodle, de PHP, de la base de données et du serveur Web, thème utilisé, langue et options d'accessibilité de l'administrateur lui-même). Le navigateur y ajoute la taille de sa fenêtre, son ratio de pixels, la taille de police de la racine et ses réglages d'animations réduites, de contraste et de couleurs forcées. Un bouton **Copier** copie le tout dans le presse-papiers pour un rapport de bogue. Les informations ne contiennent jamais l'adresse du site, les chemins de fichiers ni de données personnelles ;
  - des liens vers la page des options d'accessibilité et vers l'onglet Valeurs par défaut des utilisateurs ;
  - le **test de vision des couleurs** (voir la [section 9](#9-filtres-de-vision-des-couleurs)) ;
  - un exemple des quatre types d'**alerte** (succès, information, avertissement et erreur), tels que les utilisateurs les voient avec les options actuelles (voir la [section 6](#6-conception-visuelle--ce-que-voit-chaque-utilisateur)). Les lecteurs d'écran les lisent comme du texte normal, pas comme des alertes ;
  - les **spécimens de polices** (voir la [section 10](#10-polices--pourquoi-ces-trois)) ;
  - les **licences** du thème et des polices, avec un lien vers le texte officiel et vers la copie fournie avec le thème.

### Favicon

Le thème apporte son propre favicon (la petite icône de l'onglet du navigateur), `pix/favicon.ico`. Pour utiliser le vôtre, déposez-le dans *Administration du site > Présentation > Logos* (**Favicon**) : Moodle l'affiche alors à la place de celui du thème. Vous pouvez aussi remplacer le fichier `pix/favicon.ico`, mais la prochaine mise à jour du thème remettra l'original.

### Thème du site ou choix de l'utilisateur

- **Comme thème du site :** tout le monde obtient Accessible, avec les valeurs par défaut du site que vous avez définies.
- **Comme choix :** conservez votre thème de site habituel et activez **Autoriser les thèmes utilisateur**. Chaque utilisateur peut alors choisir Accessible (et revenir en arrière) depuis sa page d'options d'accessibilité, et tous les autres conservent l'apparence habituelle.

### Un lien de connexion qui ouvre Accessible

Lorsque Accessible est un choix de l'utilisateur et non le thème du site, la page de connexion à laquelle on arrive depuis l'adresse du site utilise le thème du site. Un utilisateur qui a besoin d'Accessible doit se connecter par une page qui peut lui être difficile à utiliser.

Si **Autoriser le changement du thème dans l’URL** est activé (`allowthemechangeonurl`), vous pouvez donner à ces utilisateurs un lien de connexion qui ouvre directement Accessible : `https://your.site/login/index.php?theme=accessible`. Le thème est conservé dans la session : il reste après la connexion et, jusqu'à ce que l'utilisateur se déconnecte, il a priorité sur le thème choisi dans son profil.

Compromis : le réglage doit rester activé pour que le lien fonctionne, et tant qu'il l'est, n'importe qui peut changer le thème de sa propre session avec le paramètre. Personne ne peut le changer pour les autres.

### Avertissements lorsque les utilisateurs ne peuvent pas utiliser leurs options

Si **Autoriser les thèmes utilisateur** est désactivé, les utilisateurs ne peuvent pas choisir le thème eux-mêmes. Le thème avertit de cela à deux endroits :

- une alerte sur la page des notifications d'administration, avec un lien vers le réglage ;
- une vérification dans **Rapports > Statut du système** (la page de statut du système de Moodle).

---

## 12. Confidentialité et données

- **Utilisateurs connectés :** chaque option est enregistrée comme une préférence utilisateur Moodle (`theme_accessible_font`, `theme_accessible_fontsize`, etc.). Elles sont déclarées dans le fournisseur **Privacy API** du thème et incluses dans l'export des données de l'utilisateur.
- **Visiteurs et invités :** les choix sont enregistrés dans un cookie nommé `MoodleAccessible` suivi du nom du cookie de session du site. Il ne contient que les options d'affichage (en JSON), est `HttpOnly` et `SameSite=Lax`, dure un an, et est comparé à la liste des valeurs valides à chaque lecture. Lorsque des options sont enregistrées par un utilisateur connecté, le cookie les reflète afin que la page de connexion affiche le dernier choix. Le cookie est supprimé à la déconnexion, de sorte que sur un ordinateur partagé la personne suivante ne voit ni n'hérite de ces options. Un visiteur qui ne se connecte jamais conserve le cookie : sur les ordinateurs publics (bibliothèques, salles de classe), réglez le navigateur pour qu'il efface ses données à la fermeture ou qu'il ouvre des fenêtres invité ou privées ; sinon, la personne suivante verra la page avec ces options jusqu'à ce qu'elle les change. **Mentionnez ce cookie dans la politique de confidentialité et de cookies de votre site.**
- **Page d'options sans connexion :** la page des options d'accessibilité s'ouvre sans session même lorsque **Imposer la connexion** est activé, afin que chacun puisse régler la page avant de se connecter. Les visiteurs ne voient que le formulaire d'options, avec la mise en page de la page de connexion (sans blocs, menus ni navigation), et leurs choix vont uniquement dans le cookie de leur propre navigateur.
- **Aucune requête externe :** les polices, les icônes et les filtres sont tous servis par votre propre site.
- **Aucun suivi :** le thème ne collecte aucune donnée d'utilisation.

---

## 13. Langues

Les textes du thème sont disponibles en **sept langues** : anglais, espagnol, catalan, français, italien, allemand et portugais du Brésil. Les traductions sont disponibles dans les paquetages de langue de Moodle : lorsque le paquetage d'une langue est installé sur un site, le thème s'affiche dans cette langue. Les textes et les traductions ont été écrits avec une IA (Claude). Les textes anglais, espagnols et catalans ont été relus par des personnes. Ce guide est disponible dans les mêmes langues.

---

## 14. Comment le thème a été testé

Les affirmations d'accessibilité ne valent que ce qui a été vérifié. Voici ce qui a été vérifié et comment.

### Analyses automatisées

Trois scripts utilisant Playwright (un outil d'automatisation de navigateur) ont été exécutés sur Moodle 5.2 et Moodle 5.3, dans **Chromium** et **Firefox** :

- Une **analyse complète** de 27 pages (tableau de bord, cours, activités, forums, test et tentative de test, participants, carnet de notes, calendrier, administration, formulaires, connexion...) aux tailles de texte **100 %, 125 % et 200 %**, en **contraste normal et élevé**. Elle vérifie le contraste de chaque texte visible par rapport à son fond réel (7:1, ou 4,5:1 pour le grand texte), les noms accessibles, les repères, les id en double, l'ordre des titres et la taille des cibles.
- Une **analyse du clavier** : ordre de tabulation, pièges à focus, indicateur de focus visible et focus masqué derrière des éléments fixes.
- Une **analyse du contraste** d'une liste de pages plus courte, utilisée après chaque modification de style.

**Résultat :** aucun échec de contraste sur aucune page, taille, mode ou navigateur. Les analyses sur Moodle 5.2 et Moodle 5.3 n'en ont trouvé aucun aux tailles de texte 100 %, 125 % et 200 %, en contraste normal ou élevé. Les autres constats sont listés dans [Limites connues](#15-limites-connues).

Les filtres de vision des couleurs ont été vérifiés en relisant les couleurs des pixels (voir la [section 9](#9-filtres-de-vision-des-couleurs)).

### Tests automatisés

Le thème inclut des tests PHPUnit (préférences, valeurs par défaut et validation du cookie, hooks, vérification de statut, fournisseur de confidentialité, informations pour le support, compilation SCSS) et des scénarios Behat (la page d'options pour les utilisateurs et les visiteurs, l'avertissement d'administration, l'onglet Informations).

Ils ont été exécutés sur les deux versions :

| | Moodle 5.2 | Moodle 5.3 |
| --- | --- | --- |
| PHPUnit (61 tests, 332 assertions) | tous réussis | tous réussis |
| Behat (17 scénarios, 124 étapes) | tous réussis | **15 réussis, 2 échoués** |

Les deux scénarios Behat qui échouent sur Moodle 5.3 sont ceux de l'avertissement d'administration. Ils échouent à l'étape qui ouvre *Rapports > Statut du système* par la barre de navigation supérieure, et non sur ce qu'ils vérifient. Moodle 5.3 dessine cette barre avec un nouveau composant et le thème utilise encore le balisage classique (voir [Limites connues](#15-limites-connues)). Les pages et les options fonctionnent ; seule l'étape du test ne trouve pas la barre.

### Vérifications du code

- **Les vérifications de plugin de Moodle** (moodle-plugin-ci 4.5), exécutées sur Moodle 5.2 puis à nouveau sur 5.3 : validation du plugin, lint PHP, PHPDoc, points de sauvegarde de mise à niveau, modèles Mustache (rendu et validation HTML), le tout sans erreur ni avertissement.
- **Style de code :** `phpcs` avec le standard de Moodle est propre ; ESLint ne signale ni erreur ni avertissement sur `javascript/accessible.js` ; stylelint n'en signale aucun sur le SCSS, avec quelques exceptions documentées (`!important` est délibéré, pour l'emporter sur les styles de Boost).
- **Les refactorisations de style** sont prouvées inoffensives avec un outil de comparaison : il compare les styles calculés de bien plus de 100 000 éléments avant et après une modification, et vérifie qu'aucune paire de règles concurrentes n'a changé d'ordre.

### WAVE

Les pages principales ont été vérifiées avec l'extension [WAVE](https://wave.webaim.org/) de WebAIM, dans Chrome. Toutes obtiennent 10 sur 10 au score AIM automatisé de WAVE. Le score AIM compare une page avec d'autres pages Web ; comme le dit WebAIM elle-même, un score élevé ne prouve pas qu'une page est accessible ou conforme, c'est pourquoi le thème a aussi été testé à la main.

### Ce qui n'a pas été fait

- **Lecteurs d'écran :** le thème a été testé à la main avec NVDA. Il n'a pas encore été testé avec JAWS, VoiceOver ni TalkBack. La structure des pages a aussi été vérifiée à travers l'arbre d'accessibilité du navigateur, que lisent les lecteurs d'écran.
- **Les tests de navigateur n'ont pas couvert Safari**, et sur Moodle 5.3 deux scénarios Behat échouent (voir ci-dessus).
- **Le lecteur vidéo a été vérifié dans Chromium et Firefox sans fenêtre**, pas à la main dans une fenêtre normale de Chrome ou de Firefox, et pas avec tous les types de contenu (fichiers vidéo locaux, audio seul, sous-titres, flux en direct).
- **Aucun test avec des utilisateurs** aveugles, malvoyants ou ayant une déficience de la vision des couleurs.
- **Audits internes uniquement ;** aucun audit externe ni certification.

Les retours des utilisateurs et des spécialistes de l'accessibilité sont la contribution la plus précieuse que le projet puisse recevoir.

---

## 15. Limites connues

### Contenu que le thème ne contrôle pas

- Les **activités H5P** et les autres **iframes intégrées** (vidéos, outils externes, LTI, documents intégrés) ont leur propre page et leurs propres styles. Le thème ne peut pas changer leurs couleurs : le contraste élevé ne les atteint donc pas. Le filtre de vision des couleurs les couvre, avec les exceptions listées dans la [section 9](#9-filtres-de-vision-des-couleurs).
- Le **texte coloré à la main** dans le contenu des cours (couleurs définies dans l'éditeur, texte collé depuis Word ou le Web) conserve ses couleurs, car les couleurs en ligne l'emportent sur le thème. Un enseignant qui définit un texte sombre sur un fond pâle le conserve, même en contraste élevé. Les enseignants devraient laisser la couleur du texte au thème.
- Les **images** gardent leurs pixels : le texte à l'intérieur d'une image n'est pas agrandi, et le contraste élevé ne le recolore pas (seul le filtre de vision des couleurs décale ses couleurs, comme il le fait pour toute la fenêtre). Les images ont besoin d'une alternative textuelle.
- **La zone d'édition de l'éditeur** (TinyMCE) est un document séparé. En contraste élevé, elle est assombrie par un filtre, ce qui garde des couleurs à peu près correctes mais change l'aspect des images pendant l'édition. Le contenu enregistré n'est pas modifié.

### Limites venant de Moodle lui-même

- Certaines pages du noyau sautent des niveaux de titre (par exemple de h1 à h3 ou h4), et certaines iframes de H5P, de TinyMCE et des pages d'administration n'ont pas de titre. Cela vient du balisage propre à Moodle.
- À la taille de texte 200 %, le carnet de notes et la page de tentative de test peuvent encore défiler horizontalement, de par la conception de Moodle.
- À la taille de texte 200 %, la page de gestion des cours peut défiler horizontalement, plus encore avec les tiroirs ouverts.

### Moodle 5.3

Moodle 5.3 dessine les barres de navigation principale et secondaire avec un nouveau composant (`core/nav`) et l'interrupteur du mode d'édition avec le Switch du système de conception. Le thème utilise encore le balisage classique de Moodle 5.2 pour eux. Cela fonctionne et c'est accessible, mais il n'utilise pas encore les nouveaux composants de Moodle, et les tests qui naviguent par la barre supérieure avec l'étape Behat standard (« I select ... from primary navigation ») échouent avec ce thème sur 5.3. Cela est prévu pour une prochaine version du thème.

### Taille des cibles

Les liens du fil d'Ariane, les actions des messages de forum (Lien permanent, Modifier, Répondre), les liens vers l'activité précédente et suivante et les liens de l'index du cours font de 31 à 34 px de haut, en dessous des 44 px des WCAG AAA. Les agrandir rendrait ces listes beaucoup plus longues ; la question est encore à l'étude.

### Navigateurs

- Les barres de défilement larges fonctionnent dans les navigateurs basés sur Chromium (Chrome, Edge, Opera, Brave). Firefox conserve sa propre largeur.
- Le thème a été testé dans Chromium et Firefox. Safari n'a pas été testé.

---

## 16. Accessible convient-il à votre site ?

### Choisissez Accessible quand

- Votre site a, ou peut avoir, des **étudiants, enseignants ou membres du personnel aveugles, malvoyants ou ayant une déficience de la vision des couleurs**, et vous voulez qu'ils travaillent de manière autonome.
- Vous avez des **obligations d'accessibilité** et voulez une plateforme conçue pour tendre vers les WCAG, la norme à l'origine de la plupart des lois sur l'accessibilité.
- Vous voulez **offrir une apparence alternative** à côté de votre thème principal, pour que toute personne qui en a besoin puisse basculer.
- Vous voulez un **Moodle calme et lisible** pour tout le monde : pas d'encombrement, un contraste fort, une mise en page prévisible.

### Réfléchissez à deux fois quand

- Vous avez besoin d'une **forte image de marque**, de couleurs personnalisées, d'images de fond ou d'une identité visuelle : l'apparence d'Accessible est délibérément sobre, et ses couleurs sont fixées pour le contraste.
- Vos cours reposent surtout sur **H5P ou des outils externes** : le thème ne peut pas modifier le style de ce qui s'exécute à l'intérieur, et ces parties gardent donc leurs propres couleurs et tailles.

### Essayez sans risque

Installez-le et activez **Autoriser le changement du thème dans l’URL** (*Administration du site > Présentation > Réglages avancés du thème*, réglage `allowthemechangeonurl`). Ouvrez ensuite votre site en ajoutant `?theme=accessible` à l'adresse (par exemple `https://your.site/my/?theme=accessible`) : le thème ne s'applique qu'à votre session. Essayez les options, ouvrez vos cours à 200 % et en contraste élevé, puis **désactivez à nouveau le réglage**, car tant qu'il est activé, toute personne qui connaît le paramètre peut changer le thème. Si vous voulez garder un lien de connexion qui ouvre Accessible, consultez [Un lien de connexion qui ouvre Accessible](#un-lien-de-connexion-qui-ouvre-accessible) : dans ce cas, le réglage reste activé.

---

## 17. Installation et configuration

### Prérequis

- **Moodle 5.2 et versions ultérieures.**
- Le thème **Boost**, fourni avec Moodle.
- Aucun autre plugin. Aucun outil de compilation.

### Installation

1. Copiez le dossier du thème dans `public/theme/accessible` de votre code Moodle (le dossier doit s'appeler `accessible` ; si vous téléchargez le ZIP depuis GitHub, renommez d'abord le dossier), ou téléversez le fichier ZIP depuis *Administration du site > Plugins > Installer des plugins*.
2. Allez dans *Administration du site > Notifications* pour terminer l'installation.
3. Purgez les caches si vous mettez à jour le thème à la main.

### Configuration

- **Comme thème du site :** *Administration du site > Présentation > Thèmes*, puis choisissez Accessible.
- **Comme choix de l'utilisateur :** activez **Autoriser les thèmes utilisateur** dans *Administration du site > Présentation > Réglages avancés du thème*.
- **Valeurs par défaut :** dans les réglages du thème, onglet **Valeurs par défaut des utilisateurs**, choisissez pour le site la police, la taille du texte, l'espacement, le contraste, les animations et le focus.
- **Confidentialité :** ajoutez le cookie des visiteurs à votre politique de confidentialité ou de cookies (voir la [section 12](#12-confidentialité-et-données)).

### Mise à jour

Installez la nouvelle version par-dessus l'ancienne et rendez-vous dans *Administration du site > Notifications*. Les utilisateurs conservent leurs options.

---

## 18. Crédits, licences et sources

### Crédits

Par **Fernando Acedo** et l'ancienne **équipe de développement de Koditik**. Claude Code a aidé à écrire des parties du thème, l'a relu et a aidé à le tester. Claude est une marque d'Anthropic, PBC.

[Code source et versions](https://github.com/f-acedo/moodle-theme_accessible). Rapports de bogues et suggestions : [outil de suivi des tickets](https://github.com/f-acedo/moodle-theme_accessible/issues).

### Licences

- Thème Accessible : **GNU General Public License v3 ou ultérieure** ([texte officiel](https://www.gnu.org/licenses/gpl-3.0.html) ; copie dans `LICENSE.txt`).
- Polices d'Accessible : **SIL Open Font License 1.1** ([texte officiel](https://openfontlicense.org/open-font-license-official-text/) ; copies dans `fonts/LICENSE-*.txt`).
  - Lexend Deca : Copyright 2019 The Lexend Project Authors.
  - Atkinson Hyperlegible : Copyright 2020 Braille Institute of America, Inc.
  - OpenDyslexic : Copyright 2019 Abbie Gonzalez, Reserved Font Name OpenDyslexic.

### Sources

Normes et lois :

- [Web Content Accessibility Guidelines (WCAG) 2.1](https://www.w3.org/TR/WCAG21/), W3C.
- [Understanding WCAG 2.1: conformance levels](https://www.w3.org/WAI/WCAG21/Understanding/conformance), W3C.
- [Directive (UE) 2016/2102 sur l'accessibilité des sites internet](https://eur-lex.europa.eu/eli/dir/2016/2102/oj).
- [Acte européen sur l'accessibilité, directive (UE) 2019/882](https://eur-lex.europa.eu/eli/dir/2019/882/oj).
- [EN 301 549, ETSI](https://www.etsi.org/human-factors-accessibility/en-301-549-v3-the-harmonized-european-standard-for-ict-accessibility).
- [Normes de la Section 508](https://www.access-board.gov/ict/), US Access Board.
- [Règle Web du Title II de l'ADA (2024)](https://www.ada.gov/resources/2024-03-08-web-rule/), US Department of Justice.

Utilisateurs :

- [Rapport mondial sur la vision](https://www.who.int/publications/i/item/9789241516570), Organisation mondiale de la santé, 2019.
- [Colour Blind Awareness](https://www.colourblindawareness.org/colour-blindness/).

Polices :

- [Lexend](https://www.lexend.com/) et [Lexend sur GitHub](https://github.com/googlefonts/lexend).
- [Atkinson Hyperlegible, Braille Institute](https://www.brailleinstitute.org/freefont/).
- [OpenDyslexic](https://opendyslexic.org/about) et
  [OpenDyslexic sur Wikipédia](https://en.wikipedia.org/wiki/OpenDyslexic).

Vision des couleurs :

- Machado, G. M., Oliveira, M. M. et Fernandes, L. A. F. (2009), [*A physiologically-based model for simulation of
  color vision deficiency*](https://doi.org/10.1109/TVCG.2009.113), IEEE Transactions on Visualization and Computer Graphics.

---

## Annexe A. Référence technique

Pour les spécialistes qui veulent les détails avant d'installer le thème : comment les filtres de vision des couleurs sont construits et ce que les vérifications ont montré, jusqu'où sont allées les vérifications du contraste élevé, et d'où viennent les polices fournies et ce que dit la recherche à leur sujet. Les sections 8, 9, 10 et 15 donnent les mêmes informations en termes simples.

### A.1 Filtres de vision des couleurs : implémentation et vérifications

Option utilisateur sur `/theme/accessible/preferences.php` : **Vision des couleurs** (type) et **Intensité**.

#### Comment cela fonctionne

- Types : none, protan (faiblesse ou cécité au rouge), deutan (faiblesse ou cécité au vert), tritan (faiblesse ou cécité au bleu) et mono (sans couleur, seulement des gris).
- Intensité : mild (les types « -anomalie »), medium, strong (les types « -anopie »). Mono l'ignore.
- Le choix est enregistré sous forme de préférences utilisateur `theme_accessible_colortype` et `theme_accessible_colorstrength`
  (`classes/preferences.php`) et arrive dans la page sous forme de classes du body : `accessible-colortype-X` et
  `accessible-colorstrength-Y`.
- `templates/colorfilters.mustache` contient neuf filtres SVG (3 types x 3 intensités) et le filtre mono. Il est inclus dans
  `templates/drawers.mustache`. Le CSS (fin de `scss/styles.scss`) applique le filtre correspondant par une couche.
- La couche est `body::after` : une boîte fixe qui couvre la fenêtre, avec `pointer-events: none` et
  `backdrop-filter: url(#accessible-colortype-X-Y)`. Elle recolore tout ce qui est dessiné en dessous : la page, les images, les éléments vidéo, H5P et les **contenus intégrés de tiers** (YouTube, Vimeo, LTI). Elle n'ajoute aucun balisage, les clics la traversent, elle n'a aucun contenu pour les technologies d'assistance, et elle est masquée à l'impression.
- Pourquoi pas un filtre sur la page elle-même : un filtre sur `<html>` n'atteint pas les iframes d'origine croisée dans Chromium (une image YouTube en pause est sortie identique avec et sans lui), et un filtre sur `<body>` en ferait le bloc conteneur de la barre de navigation et des tiroirs fixes et casserait leur position.
- Là où le navigateur ne peut pas utiliser `url()` dans `backdrop-filter`, l'ancienne règle s'applique (`filter` sur `<html>`). Dans ce cas, les contenus intégrés de tiers conservent leurs propres couleurs.
- Ce que la couche ne recolore pas, parce que le navigateur le dessine au-dessus de tout : la **vidéo en plein écran** et les modales natives `<dialog>` ouvertes avec `showModal()`. Les modales propres à Moodle sont des éléments normaux et sont couvertes. Les captures d'écran prises par des outils de navigateur (et non par le système d'exploitation) peuvent aussi omettre l'effet.

#### Les matrices

Chaque filtre est une `feColorMatrix` 3x3 (appliquée en RVB linéaire, la valeur par défaut de SVG) :

1. Simulation du cône manquant : la matrice de Machado et al. (2009) pour la dichromatie complète, mise à l'échelle selon l'intensité
   `S = (1 - s) * I + s * M`, avec s = 0,4 (légère), 0,7 (moyenne), 1,0 (forte).
2. Correction (l'étape habituelle de « daltonisation ») : la part de la couleur que l'utilisateur ne peut pas voir, `I - S`, est déplacée vers les canaux qu'il voit encore : l'erreur de rouge vers le vert et le bleu pour protan et deutan, l'erreur de bleu vers le rouge et le vert pour tritan. Résultat : `C = I + shift * (I - S)`.

Chaque ligne de `C` totalise 1, donc le blanc, le gris et le noir sont inchangés. Les matrices ont été calculées à la main (il n'y a pas d'étape de compilation) ; recalculez-les si les maths changent.

Les matrices viennent de valeurs publiées, pas d'une validation clinique. Considérez le filtre comme une aide, pas comme un outil médical.

#### Test

Huit échantillons (blanc, noir, gris, rouge, vert, bleu, jaune, rouge-orangé) ont été dessinés sur le tableau de bord pour chaque combinaison et leurs pixels lus depuis une capture d'écran. Les valeurs sont en RVB.

| Type | Résultat |
|---|---|
| None | Inchangé : rouge (255,0,0), vert (0,255,0), bleu (0,0,255) |
| Protan | Le rouge devient rose : léger (255,121,134), moyen (255,157,173), fort (255,184,203). Le vert devient plus sombre. |
| Deutan | Le rouge devient rose-magenta : léger (255,72,118), moyen (255,95,153), fort (255,112,180). |
| Tritan | Le bleu devient violet clair : léger (141,103,255), moyen (182,134,255), fort (213,158,255). Le jaune se décale vers le vert. |
| Mono | Tous les échantillons en gris (R = G = B), par exemple rouge (127,127,127), vert (220,220,220), bleu (76,76,76). |

- Le blanc (255,255,255), le noir (0,0,0) et le gris (128,128,128) étaient inchangés dans toutes les combinaisons.
- Chaque niveau d'intensité déplace les couleurs plus loin que le précédent.
- Les décalages font que des couleurs qui se ressemblent pour l'utilisateur diffèrent par la luminosité ou la teinte.

#### Non réalisé

- Aucune validation clinique des matrices.
- Aucune exception par couleur : les images et les vidéos sont filtrées aussi.
- La vidéo en plein écran et les boîtes de dialogue modales natives ne sont pas filtrées (voir ci-dessus). Les filtres de couleur propres au système d'exploitation (Windows, macOS, iOS, Android) les couvrent.
- Les performances sur des machines peu puissantes (une couche sur toute la fenêtre) n'ont pas été mesurées. Lors d'un test sur ordinateur de bureau, la fréquence de défilement était d'environ 54 images par seconde avec la couche, 59 avec l'ancien filtre et 61 sans option de couleur.

### A.2 Contraste élevé : portée des vérifications

Ce que le contraste élevé ne peut pas changer est listé dans la [section 15](#15-limites-connues).

Le contraste a été vérifié avec une analyse automatisée (texte à 7:1, grand texte à 4,5:1) aux tailles de texte 100 %, 125 % et 200 %, avec le filtre de vision des couleurs activé, dans les modales, et sur les pages du tableau de bord, du cours, du calendrier, des participants, du test et de la tentative de test.

### A.3 Polices : historique et recherche

Le thème Accessible fournit trois polices et laisse chaque utilisateur en choisir une : **Lexend Deca** (par défaut), **Atkinson Hyperlegible** et **OpenDyslexic**. Cette partie indique d'où vient chacune, ce que ses concepteurs voulaient obtenir, ce que dit la recherche, et pourquoi des polices comme celles-ci sont proposées sur des sites destinés aux personnes malvoyantes ou dyslexiques. Les trois sont fournies avec le thème (aucune requête vers un service de polices externe) et sous licence SIL Open Font License 1.1.

#### Ce qui rend une police plus facile à lire

Aucune police ne rend la lecture facile pour tout le monde, et la recherche sur les « polices accessibles » est plus modeste et plus nuancée que le marketing qui l'entoure. Voici les idées de conception qui reviennent sans cesse, avec ce que l'on sait de chacune :

- **Des lettres qui ne peuvent pas être confondues.** De nombreux caractères dessinent le **I** majuscule, le **l** minuscule et le chiffre **1** presque de la même façon, et il en va de même pour **O** et **0**, **B** et **8**, ou **rn** et **m**. Un lecteur malvoyant, qui voit les formes floues ou agrandies, ne peut pas utiliser le contexte pour deviner. Dessiner ces caractères différemment est l'idée principale d'Atkinson Hyperlegible.
- **Des formes ouvertes.** De larges ouvertures dans des lettres comme **a**, **c**, **e** et **s** restent lisibles quand l'image est floue ou agrandie.
- **Un espacement généreux.** Des lettres trop proches interfèrent entre elles, un effet appelé *crowding* (encombrement visuel). Dans une étude de 2012 portant sur 74 enfants dyslexiques de 8 à 14 ans (Zorzi et ses collègues, publiée dans PNAS), un espacement des lettres très large a rendu la lecture environ 20 % plus rapide et divisé les erreurs par deux, tandis qu'un interligne plus grand seul n'avait aucun effet. Un espacement large est aussi le point de départ de Lexend, et le thème le propose comme une option distincte, séparée de la police.
- **Des lettres droites, sans empattement.** Les recommandations pour la dyslexie, comme le guide de style de la British Dyslexia Association, conseillent généralement des polices simples sans empattement, et une étude par suivi du regard de 48 lecteurs dyslexiques (Rello et Baeza-Yates, 2013) a constaté que les polices sans empattement, à chasse fixe et romaines (pas italiques) donnaient de meilleurs résultats que les polices avec empattement, proportionnelles et italiques. Des revues plus récentes sont plus prudentes : Dyslexia Scotland ne signale aucun avantage constant des polices sans empattement sur celles avec empattement, et indique que l'espacement est un facteur plus fort que la forme des lettres.
- **La préférence compte.** Les lecteurs lisent souvent mieux dans la police à laquelle ils sont habitués et qu'ils aiment. C'est pourquoi le thème propose un choix plutôt qu'une police imposée.

La police n'est qu'une partie de la lisibilité. La taille, l'espacement, le contraste et la liberté de les modifier comptent au moins autant, et le thème a une option pour chacun (voir la page des options et les sections 5 et 8 du guide).

#### Lexend Deca (par défaut)

**Historique.** Lexend est l'œuvre du Dr Bonnie Shaver-Troup, thérapeute en éducation, et du créateur de caractères Thomas Jockin. Ils l'ont développée vers 2018 à partir de son travail avec des lecteurs en difficulté, et elle a été publiée sur [Google Fonts](https://fonts.google.com/specimen/Lexend+Deca) en 2019. Elle est basée sur [Quicksand](https://fonts.google.com/specimen/Quicksand), un caractère lancé par Andrew Paglinawan en 2008. La famille compte sept largeurs, de **Deca** (la plus étroite) à Zetta (la plus large), afin de pouvoir changer l'espacement des lettres sans changer de police. Depuis juin 2021, toutes les polices sont des polices variables avec un axe de graisse.

**L'idée.** Un espacement des lettres large et régulier et des formes simples et ouvertes, pour rendre la lecture plus fluide. Moodle est une interface dense : le thème utilise donc **Deca**, qui garde l'espacement généreux mais reste assez compacte pour les menus et les formulaires.

**Ce que dit la preuve.** Les concepteurs rapportent une meilleure vitesse de lecture dans leurs propres tests. L'étude la plus connue est petite (20 élèves de CE2 lisant pendant une minute dans cinq polices) et vient du côté des concepteurs. Nous n'avons trouvé aucune réplication indépendante. Le thème propose donc Lexend Deca comme une valeur par défaut lisible, pas comme une aide prouvée.

#### Atkinson Hyperlegible

**Historique.** Le Braille Institute of America l'a créée pour les personnes malvoyantes et publiée en 2019, l'année du centenaire de l'institut. Elle a été conçue par l'agence Applied Design Works dans le cadre de la nouvelle identité de l'institut, et porte le nom du fondateur de l'institut, J. Robert Atkinson. Elle a remporté le prix Innovation by Design de Fast Company en 2019 et est entrée dans la collection permanente du Cooper Hewitt, Smithsonian Design Museum. Elle est ensuite devenue disponible sur Google Fonts, et en 2025 l'institut a publié **Atkinson Hyperlegible Next**, avec plus de graisses et une couverture linguistique plus large, ainsi qu'une version à chasse fixe. Le thème fournit la version d'origine en normal et en gras.

**L'idée.** La plupart des caractères visent des lettres uniformes. Atkinson Hyperlegible fait l'inverse : elle garde une base sans empattement conventionnelle et n'ajoute des différences que là où deux caractères se confondent facilement :

- le **l** minuscule reçoit une queue et le chiffre **1** un crochet, de sorte qu'ils diffèrent l'un de l'autre et du **I** majuscule, qui a des empattements ;
- **B** et **8**, **O** et **0** et d'autres paires reçoivent des formes différentes, des ouvertures plus larges et des terminaisons en biais ;
- les lettres sont espacées de façon que leurs bords ne se touchent pas.

Le prix à payer est un aspect irrégulier : des empattements apparaissent dans certaines lettres et pas dans d'autres, et certains angles sont exagérés. Pour la lecture de l'interface du thème, c'est justement l'objectif, car les lettres doivent se distinguer, pas être élégantes.

**Ce que dit la preuve.** C'est la police la plus directement conçue pour les utilisateurs malvoyants que ce thème sert, et la logique de sa conception est facile à comprendre. Nous n'avons trouvé aucune étude publiée qui mesure son effet sur la lecture auprès d'un groupe de lecteurs : l'affirmation repose donc sur la conception et sur le travail propre de l'institut.

#### OpenDyslexic

**Historique.** Abbie Gonzalez, qui est dyslexique, a créé OpenDyslexic et l'a publiée en 2011 comme police open source, dérivée de Bitstream Vera Sans.

**L'idée.** Les lettres ont un **bas plus lourd**. L'autrice dit que ce poids donne à chaque lettre un « bas » clair, ce qui aide les lecteurs à la reconnaître et les empêche de retourner ou de faire pivoter mentalement des lettres comme b, d, p et q. Les formes des lettres sont aussi rendues plus distinctes, et l'espacement est plus large.

**Ce que dit la preuve.** Les études que nous avons trouvées ne soutiennent pas l'affirmation selon laquelle elle améliore la lecture : une étude sur la vitesse et la précision de lecture (Wery et Diliberto, 2017) n'a trouvé aucune amélioration par rapport à d'autres polices, et une étude ultérieure par suivi du regard de Rello et Baeza-Yates (2016) a constaté qu'elle ne faisait pas mieux que des polices sans empattement courantes comme Arial ou Verdana. De nombreuses personnes dyslexiques la préfèrent tout de même, et la préférence compte : le thème la propose donc comme un choix et non comme une recommandation.

#### Pourquoi des polices comme celles-ci sont proposées sur des sites pour la vision réduite et la dyslexie

1. **Le coût est faible et le bénéfice peut être grand pour certaines personnes.** Changer de police ne coûte rien dans un thème. Pour une personne qui trouve une police nettement plus facile, cela peut faire la différence entre lire et renoncer.
2. **Les gens sont différents.** La vision réduite a de nombreuses causes (perte du centre ou du bord du champ visuel, flou, sensibilité à l'éblouissement), et la dyslexie ne se présente pas de la même façon chez chaque lecteur. Il n'existe pas de « meilleure » police unique : la réponse raisonnable est donc une courte liste de polices bien conçues que chaque personne peut essayer.
3. **Les trois polices couvrent trois approches :** des lettres ouvertes et régulièrement espacées (Lexend Deca), des lettres que la conception permet de distinguer (Atkinson Hyperlegible) et des lettres avec un « poids » distinct (OpenDyslexic). Un utilisateur peut les comparer sur la même page.
4. **L'honnêteté sur la preuve.** Seul l'effet de l'espacement est bien étayé. Pour chaque police, le thème dit ce que ses concepteurs voulaient faire et ce que l'on sait, et il ne promet aucun résultat.

L'utilisateur décide, et l'administration peut définir la police par défaut de tout le site (onglet **Valeurs par défaut des utilisateurs** des réglages du thème). L'onglet Informations montre un spécimen de chaque police, y compris les caractères facilement confondus.

#### Sources

- Braille Institute : [communiqué de presse sur Atkinson Hyperlegible](https://prnewswire.com/news-releases/braille-institute-launches-new-award-winning-typeface-designed-to-improve-legibility-for-readers-with-low-vision-301012698.html)
  et [sa disponibilité sur Google Fonts](https://prnewswire.com/news-releases/braille-institutes-atkinson-hyperlegible-typeface-now-available-on-google-fonts-301349120.html) ;
  [Atkinson Hyperlegible sur GitHub](https://github.com/googlefonts/atkinson-hyperlegible).
- Cooper Hewitt, Smithsonian Design Museum : [Atkinson Hyperlegible dans la collection](https://collection.cooperhewitt.org/objects/2318809952).
- [Lexend sur GitHub](https://github.com/googlefonts/lexend/) et [lexend.com](https://www.lexend.com/).
- Gonzalez, A. : [OpenDyslexic](https://opendyslexic.org/about).
- Wery, J. J. et Diliberto, J. A. (2017), [The effect of a specialized dyslexia font, OpenDyslexic, on reading rate and accuracy](https://www.ncbi.nlm.nih.gov/pmc/articles/PMC5629233/), Annals of Dyslexia.
- Rello, L. et Baeza-Yates, R. (2013), [Good fonts for dyslexia](https://doi.org/10.1145/2513383.2513447), ACM ASSETS.
- Rello, L. et Baeza-Yates, R. (2016), [The effect of font type on screen readability by people with dyslexia](https://doi.org/10.1145/2897736), ACM Transactions on Accessible Computing.
- Zorzi, M. et autres (2012), [Extra-large letter spacing improves reading in dyslexia](https://pubmed.ncbi.nlm.nih.gov/22665803/), PNAS.
- Dyslexia Scotland : [Dyslexia-friendly typed formats](https://dyslexiascotland.org.uk/dyslexia-friendly-typed-formats).
- Dezeen : [Atkinson Hyperlegible](https://www.dezeen.com/awards/2020/longlists/atkinson-hyperlegible-typeface-for-people-with-low-vision/).
