<?php
/*
 * Définie un nouveau filtre pour récupérer les données EXIF (v°>= 2.1)
 * afin de trouver si l'objet image a une position verticale ou horizontale
 * fonctionne pour les photo / Pour les images dessinnées, il faudra placer le 
 * tag à la main
 * Définition des valeurs pour le tag exif 'Orientaion':
 * (par convention, une valeur 1 représente un F et est dans le sens portrait)
 *	1        2       3      4
 *
 *	888888  888888      88  88
 *	88          88      88  88
 *	8888      8888    8888  8888
 *	88          88      88  88
 *	88          88  888888  888888
 *
 *	5           6           7          8
 *
 *	8888888888  88                  88  8888888888
 *	88  88      88  88          88  88      88  88
 *	88          8888888888  8888888888          88
 *
 *
 * R. Suinot <remi@suinot.org>
 * 17 mai 2020 / rev: 19/05/2020
 * Param: 
 * l'image $img
*/
if (!defined('_ECRIRE_INC_VERSION')) return;

function lens_exif($img ) {
	$retour = '';
	if ( $img ){
		if(in_array(strtolower(end(explode('.', $img))), array('jpg', 'jpeg', 'tif', 'tiff', 'png'))) // Si fichier Jpeg ou Tiff ou png
		{
			// L'img contient elle des tag exif? (on test le group IFD0 par exemple)
			if( exif_read_data($img, 'IFD0') ) {
				// oui il y a des tag, cette fois ci, on lis les données exif complètes
				$exif = exif_read_data($img, 0, true);
				foreach ($exif as $key => $section) {
					foreach ($section as $name => $val) {
						if ( $name == 'Orientation' ) {
							// orientation trouvée, ouf!
							// Reste à traiter l'affaire comme il faut
							spip_log("{name}".$name."{val}".$val);
						}
					}
				}
			} else {
				spip_log ( "pas de données exif.");
			}
		} else {
			spip_log ("image non valable (pas du bon type).");
		}
	} else {
		spip_log ("pas d'image?");
	}	
	
	return $img;
}

?>
