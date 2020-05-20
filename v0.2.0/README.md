# HTML5up Lens pour SPIP
Adaptation pour SPIP du squelette «LENS» de html5up https://html5up.net/lens 

 -- 02 mai 2020 -- R. Suinot <remi -at- suinot |.| org>
Cette version est une reprise trouvé sur la "zone spip":
http://zone.spip.org/trac/spip-zone/browser/_squelettes_/html5up_lens
Le projet de mise au point à l'air en attente (dernière date de modification: 3 mars 2016)
La doc : Pas de doc pour le moment... Désolé.
Pourquoi une reprise du projet:
Une de mes utilisatrices a besoin de ce squelette (on passera sur le côté celui-ci plutôt que celui-la)
 - projet en standby
 - une partie du boulot déjà fait
 - défi?

Toute(s) aide(s) sera malgré tout la bienvenue.

## todo
[x] vérifier que tout marche à peut près bien! (il faudrait prévoir une rotation)
=> images coupée si taille(s) trop grandes;
=> pas de vignettes à droite => en fait, il y a une vignette par album;
=> manque bouton(s) de réseau sociaux et adresse mail;

## Améliorations
[ ] les autres pages (auteur, mot, recherche) ?

## ce qui a été fait avec la date
 **02/05/2020**
 - ajout d'une page de configuration;
 - ajout d'une icone de plugin (taille 100x100 64x64 et 16x16)
 
 **03/05/2020**
 - modification de la page de configuration : choix d'une brève pour un texte court à placer dans l'ours du site
 - la partie Footer est supprimée et placée dans include/footer.html
 - Modification de footer.html:
    - inclusion du code pour afficher la breve paramétrée
    - ajout d'un lien vers spip.net
    - ajout d'un lien vers la page de login
 - Revue du code pour comprendre comment il est fait!

 **10/05/2020**
 - modification du type de configuration:
    - choix par des positions repliée, 
    - la base de données est remplie par défaut avec des constantes dans ./inclure/
 - ce qu'il reste à faire: 
   - traitement des données rentré par le formulaire de configuration
   - ajouter quelques options de configuration? => à voir...
   - faire en sorte qu'à la suppression du pluggin, les options en base soit supprimées
   - améliorer le nommage dans lang/hml5up_lens, ça ne me va pas du tout.

 **11/05/2020**
 - ajout de l'utilisation du plugin 'palette' pour le choix des couleurs. Il y a un petit souci, car la largeur du cadre de couleur choisi est tout petit.
   Mais ca va changer (j'espère)

 **12/05/2020**
  - Voila© c'est fait! j'ai enfin réussi à mettre le css en partie privé uniquement. Ce ne fut pas facile!!! Le problème venait non de spip, mais de l'interprétation
   par le CSS, du nom de la class!!!  

 **14/05/2020**
 - Traitement des erreurs de validation du formulaire de configuration: fait.
   Impossible de mettre un numéro de breve si pas de brève du tout ou un numéro supérieur au nombre déjà présentes,
   taille des épaisseurs limitées à 10 pixels, et pour que la limitation fonctionne, il faut utiliser le plugin "API de vérification"
 
 **15/05/2020**
 - corrections des labels dans le formulaire de configuration: supprimés et gardé uniquement les explications avec un container en mode grande largeur
 - La CSS est bien prise en compte pour les modifications demandées (c'est le minimum! )
 - Reste un problème: la sauvegarde de la nouvelle configuration ne refait pas le cache automatiquement. Il faut le faire à la main. Je ne trouve pas ça très
   'user friendly'. A voir...
  
