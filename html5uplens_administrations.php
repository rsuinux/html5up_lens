<?php

if (!defined('_ECRIRE_INC_VERSION')) return;

/**
 * Fonction d'installation du plugin
 * Fonction de mise à jour.
**/
function html5uplens_upgrade($nom_meta_base_version, $version_cible) {
	/* définitions des valeurs de la page formulaires et des constantes de la base de données */
	include_spip('inc/meta');
	include_spip('inc/config');
	include_spip('inclure/html5up_lens_constantes');
	$maj=array();
	$maj['create'] = array(
		array('ecrire_config', 'html5uplens/breve_pied', _LENS_BREVE_PIED ),
		array('ecrire_config', 'html5uplens/valeur_cadre_vignette', _LENS_CADRE_VIGNETTE_O_N ),
		array('ecrire_config', 'html5uplens/valeur_cadre_couleur', _LENS_CADRE_COULEUR ),
		array('ecrire_config', 'html5uplens/valeur_cadre_taille', _LENS_CADRE_TAILLE ),
		array('ecrire_config', 'html5uplens/valeur_cadre_bouton', _LENS_BOUTON_CADRE_O_N ),
		array('ecrire_config', 'html5uplens/valeur_cadre_bouton_couleur', _LENS_BOUTON_CADRE_COULEUR ),
		array('ecrire_config', 'html5uplens/valeur_cadre_bouton_taille', _LENS_BOUTON_CADRE_TAILLE ),
		array('ecrire_config', 'html5uplens/valeur_bouton_couleur', _LENS_BOUTON_COULEUR ),
		array('ecrire_config', 'html5uplens/valeur_texte_bouton_couleur',_LENS_TEXTE_BOUTON_COULEUR),
		array('ecrire_config', 'html5uplens/valeur_texte_viewer_couleur',_LENS_TEXTE_VIEWER_COULEUR),
		array('ecrire_config', 'html5uplens/valeur_texte_aux_images',_LENS_TEXTE_AUX_IMAGES)
	);


	/* 0.2.1 = mise à jour base de données si besoin
	$maj['0.2.2'] = array(
	); */ 

	include_spip('base/upgrade');
	maj_plugin($nom_meta_base_version, $version_cible, $maj);

}


/**
 * Fonction de désinstallation du plugin.
 * Vous devez :
 * - nettoyer toutes les données ajoutées par le plugin et son utilisation
 * - supprimer les tables et les champs créés par le plugin. 
**/
function html5uplens_vider_tables($nom_meta_base_version) {
	include_spip('inc/meta');
	include_spip('inc/config');

	// Supprimer les méta, ou oublie pas celle de la base.
	effacer_meta('html5uplens');
	effacer_meta($nom_meta_base_version);
}

?>
