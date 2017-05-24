Projet Web & Bdd - Gestion des apprentissages 3-CSi 2017
=================

 1 Présentation du projet
 1.1 Objectifs
Les centres de formation sont demandeurs de solutions d’évaluation et de suivi de la
progression leurs usagers (élèves ou étudiants pour le cas des écoles).
Il s'agit de mettre à disposition des équipes pédagogiques un outil permettant principalement
un suivi de la progression des apprenants dans leur acquisition des compétences - connaissances
prévues à un référentiel. Le suivi pourra se faire au quotidien, ou dans le cadre d’évaluations plus
formelles (CCCF par exemple).
Cet outil doit être également accessible aux apprenants afin qu'ils puissent suivre leur
progression, et dans le cadre de leur auto-évaluation.
Il ne concerne pas la création d'épreuves ou d'exercices d'évaluations type QCM par
exemple. C'est essentiellement un outil de suivi, disponible via internet, qui permet les taches
d’administration des données aussi bien que la préparation d’évaluations, l’évaluation elle-même,
et l’édition de tous les bilans.
Projet Web & BdD
Gestion des apprentissages
 1.2 Expression du besoin
 1.2.1 Spécifications
On distingue 2 types d’acteurs principaux : les enseignants et les Apprenants.
Les enseignants sont chargés de la création du référentiel de compétences, de la préparation des
évaluations et de la saisie du niveau d'acquisition par les apprenants. Ils peuvent accéder aux bilans
individuels ou de groupe-classe.
Les apprenants peuvent consulter leur progression et saisir leur niveau pour les compétences, en
auto-évaluation.
Les principales fonctionnalités sont organisées de la manière suivante.
 1.2.2 Evaluer
L'enseignant doit pouvoir saisir les évaluations de chaque usager pour chacune des compétences
qui sont sous sa responsabilité.
L’usager doit pouvoir s’auto-évaluer pour chacune des compétences qui font partie du référentiel
de sa formation.
Il est nécessaire d'avoir une présentation simple et claire des compétences, donc de pouvoir les
filtrer, au moins par matière et par situation d'évaluation.
Chaque compétence est évaluée sur une échelle à 5 niveaux :
✗ 1 = Non acquis ("je ne sais pas de quoi on parle")
✗ 2 = En cours d'acquisition ("je sais de quoi on parle, mais je ne sais pas l'exploiter sans
être guidé, le cours et de l'aide me sont indispensable")
✗ 3 = A renforcer ("Je peux l'exploiter quand on me le demande explicitement,
éventuellement avec de l'aide : je ne suis pas encore autonome")
✗ 4 = Acquis ("Je suis capable de l'exploiter dans un contexte défini, sans qu'on me le
demande explicitement")
✗ 5 = Maîtrisé ("Je suis totalement autonome et capable d'anticiper et planifier son
exploitation")
3-CSi
Illustration 1: Organisation des fonctionnalités.
Projet Web & BdD
Gestion des apprentissages
Exemple :
 1.2.3 Préparer les évaluations
Le référentiel des connaissances pour la matière « Développement logiciel » en classe de BTS 1-
SNIR contient environ 150 connaissances à évaluer… Pour simplifier son travail d’évaluation sur le
terrain, l'enseignant doit pouvoir pré-définir des « situations d'évaluations » qui restreignent les
compétences évaluables à une liste précise (cas des TP ou des CCF par exemple).
Pour être utilisable, cette fonctionnalité doit être pratique d'utilisation, la création d'une situation
d'évaluation devant se faire en un minimum de clics et de changement d'écran.
 1.2.4 Bilan
L’intervenant peut obtenir sur demande des bilans des évaluations, par usager, par compétence
ou par groupe-classe. Une des utilités pour l'enseignant est de pouvoir, pour une classe et une matière
donnée, connaître et filtrer le niveau (par exemple ≤ 2) d'acquisition de telle ou telle connaissance, afin
de déceler les étudiants dont le niveau d'acquisition n'est pas suffisant et mettre en place avec eux une
action de formation particulière sur ces compétences.
L’usager peut obtenir à sa demande le bilan de ses évaluations. Les compétences pouvant être en
auto-évaluation et/ou évaluées par l'enseignant, le bilan doit comporter les deux valeurs lorsqu'elles
existent.
 1.2.5 Gestion
Un ensemble d’activité de gestion des listes sont à prévoir, que ce soit par des fiches écran pour
créer / modifier / supprimer un élément (compétence, utilisateur, …) ou par l’importation de fichier CSV
pour l’ajout en lots (par exemple, ajout d’une classe complète en début d’année)
 2 Contraintes de développement.
Le projet utilisera la base de données développée lors du cours Base de données.
Les langages imposés pour la présentation sont HTML5 et CSS, avec un éventuel recours à
JavaScript. L'utilisation de templates HTML/CSS (voir ceux proposés dans le cours) est possible.
Attention toutefois au temps de formation nécessaire à leur prise en main…
La programmation applicative se fera en PHP. Les étudiants de spécialité développeur doivent
utiliser le paradigme objet.
Les fonctionnalités fournies devront être opérationnelles sur les navigateurs communs sur
ordinateur personnel, et sur les navigateurs de smartphone et tablette (CSS responsive).
Un des objectifs, à terme, est de développer des applications clientes sur les différentes plateformes
mobiles en étant basé sur une technologie hybride (web app) reposant sur
HTML3/CSS3/JavaScript.
3-CSi
Illustration 2: Exemple d'évaluation d'une compétence-connaissance
Projet Web & BdD
Gestion des apprentissages
 3 Contraintes qualité.
Les contraintes de qualités suivantes sont imposées :
✗ Le projet devra être livrable à la date du 08/06/2017 en respectant la conformité aux
demandes.
✗ La structure du code devra dissocier les aspects présentation et application.
✗ Pour les étudiants de la spécialité développeur, vous devez obligatoirement mettre
en œuvre un modèle MVC (Modèle-vue-Controleur), avec (ou sans) l’un des
frameworks suivant : Zend, Simfony, Laravel.
✗ L'ergonomie et la simplicité d'utilisation sont deux qualités prépondérantes.
✗ L’accent devra être mis sur la qualité de la réalisation (qualité du codage, commentaires,
documentation, ergonomie) davantage que sur la quantité des fonctionnalités réalisées.
✗ La gestion des exceptions et des anomalies de fonctionnement doit être parfaite.
✗ La sécurité des saisies utilisateur (formulaires, etc.) doit être assurée.
