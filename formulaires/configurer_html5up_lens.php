<?php

if (!defined('_ECRIRE_INC_VERSION')) return;

/**
 *
 * Un simple formulaire de config,
 * on a juste à declarer les saisies
 * Merci à Maïeul sur la liste spip.net pour son immense aide!
 *
**/
function formulaires_configurer_html5up_lens_saisies_dist(){

	include_spip('include/config');

	$saisies = array(
		array (
			'saisie' => 'fieldset',
			'options' => array (
				'nom' => 'ours',
				'label' => _T('html5up_lens:ours'),
				'pliable' => 'oui',
				'plie' => 'oui' 
			),
			'saisies' => array(
				array(
					'saisie' => 'input',
					'options' => array(
						'conteneur_class' => 'pleine_largeur',
						'nom' => 'breve_pied',
						'explication' => _T('html5up_lens:breve_pied_explication'), 
						'defaut' => lire_config('html5uplens/breve_pied'),
					),
						'verifier' => array(
						'type' => 'entier',
						'options' => array(
							'min' => 0,
							'max' => 10
						),
					)
				),
			),
		),
		array (
			'saisie' => 'fieldset',
			'options' => array (
				'nom' => 'cadre',
				'label' => _T('html5up_lens:cadre_vignette_label'),
				'pliable' => 'oui',
				'plie' => 'oui' 
			), 
			'saisies' => array(
				array(
					'saisie' => 'radio',
					'options' => array(
						'conteneur_class' => 'pleine_largeur',
						'nom' => 'valeur_cadre_vignette',
						'explication' => _T('html5up_lens:cadre_vignette_o_n_explication'),
						'defaut' => lire_config('html5uplens/valeur_cadre_vignette'),
						'datas' => array(
							'oui' => _T('html5up_lens:cadre_selecteur_oui'),
							'non' => _T('html5up_lens:cadre_selecteur_non') 
						) 
					),
				),
				array(
					'saisie' => 'input',
					'options' => array(
						'afficher_si' => '@valeur_cadre_vignette@=="oui"',
						'conteneur_class' => 'pleine_largeur',
						'nom' => 'valeur_cadre_taille',
						'explication' => _T('html5up_lens:cadre_vignette_taille_explication'),
						'defaut' => lire_config('html5uplens/valeur_cadre_taille') 
					) 
				),
				array(
					'saisie' => 'couleur',
					'options' => array(
						'afficher_si' => '@valeur_cadre_vignette@=="oui"',
						'conteneur_class' => 'pleine_largeur',
						'nom' => 'valeur_cadre_couleur',
						'explication' => _T('html5up_lens:cadre_couleur_explication'),
						'defaut' => lire_config('html5uplens/valeur_cadre_couleur') 
					) 
				),
			),
		),
		array (
			'saisie' => 'fieldset',
			'options' => array (
				'nom' => 'cadre_bouton',
				'label' => _T('html5up_lens:bouton_couleur_label'),
				'pliable' => 'oui',
				'plie' => 'oui' 
			), 
			'saisies' => array(
				array(
					'saisie' => 'radio',
					'options' => array(
						'nom' => 'valeur_cadre_bouton',
						'conteneur_class' => 'pleine_largeur',
						'explication' => _T('html5up_lens:cadre_bouton_o_n_explication'),
						'defaut' => lire_config('html5uplens/valeur_cadre_bouton'),
						'datas' => array(
							'oui' => _T('html5up_lens:cadre_selecteur_bouton_oui'),
							'non' => _T('html5up_lens:cadre_selecteur_bouton_non')
						) 
					),
				),
				array(
					'saisie' => 'input',
					'options' => array(
						'afficher_si' => '@valeur_cadre_bouton@=="oui"',
						'nom' => 'valeur_cadre_bouton_taille',
						'conteneur_class' => 'pleine_largeur',
						'explication' => _T('html5up_lens:cadre_bouton_taille_explication'),
						'defaut' => lire_config('html5uplens/valeur_cadre_bouton_taille'),
					),
					'verifier' => array(
						'type' => 'entier',
						'options' => array(
							'min' => 0,
							'max' => 10
						),
					)
				),
				array(
					'saisie' => 'couleur',
					'options' => array(
						'afficher_si' => '@valeur_cadre_bouton@=="oui"',
						'nom' => 'valeur_cadre_bouton_couleur',
						'conteneur_class' => 'pleine_largeur',
						'explication' => _T('html5up_lens:cadre_bouton_couleur_explication'),
						'defaut' => lire_config('html5uplens/valeur_cadre_bouton_couleur')
					) 
				),
				array(
					'saisie' => 'couleur',
					'options' => array(
						'afficher_si' => '@valeur_cadre_bouton@=="oui"',
						'nom' => 'valeur_bouton_couleur',
						'conteneur_class' => 'pleine_largeur',
						'explication' => _T('html5up_lens:bouton_couleur_explication'),
						'defaut' => lire_config('html5uplens/valeur_bouton_couleur')
					) 
				),
				array(
					'saisie' => 'couleur',
					'options' => array(
						'nom' => 'valeur_texte_bouton_couleur',
						'conteneur_class' => 'pleine_largeur',
						'explication' => _T('html5up_lens:texte_bouton_couleur_explication'),
						'defaut' => lire_config('html5uplens/valeur_texte_bouton_couleur')
					) 
				),
			),
		),
		array (
			'saisie' => 'fieldset',
			'options' => array (
				'nom' => 'texte_aux_images',
				'label' => _T('html5up_lens:texte_aux_images_label'),
				'pliable' => 'oui',
				'plie' => 'oui' 
			), 
			'saisies' => array(
				array(
					'saisie' => 'radio',
					'options' => array(
						'nom' => 'valeur_texte_aux_images',
						'conteneur_class' => 'pleine_largeur',
						'explication' => _T('html5up_lens:texte_aux_images_explication'),
						'defaut' => lire_config('html5uplens/valeur_texte_aux_images'),
						'datas' => array(
							'oui' => _T('html5up_lens:texte_aux_images_oui'),
							'non' => _T('html5up_lens:texte_aux_images_non')
						) 
					),
				),
				array(
					'saisie' => 'couleur',
					'options' => array(
						'afficher_si' => '@valeur_texte_aux_images@=="oui"',
						'nom' => 'valeur_texte_viewer_couleur',
						'conteneur_class' => 'pleine_largeur',
						'explication' => _T('html5up_lens:texte_viewer_couleur_explication'),
						'defaut' => lire_config('html5uplens/valeur_texte_viewer_couleur')
					) 
				),
			),
		),
	);

	return $saisies;
}

// verifier
//
function formulaires_configurer_html5up_lens_verifier_dist() {
	$erreurs = array() ;
	$compteur_breve = nombre_breve();
	$nbr_lu=_request('html5uplens/breve_pied');

	if ( _request('breve_pied') > $compteur_breve || is_null($compteur_breve) ) {
		$erreurs['breve_pied'] = _T('html5up_lens:erreur_breve_pied');
	}

	return $erreurs ;
}

function nombre_breve( ) {
	// recherche le nombre total de breve et le renvoi
	$nbr=0;
	$result = sql_select('*', "spip_rubriques", "id_parent=0", '', '0+titre,titre');
	while ($row = sql_fetch($result)){
		$id_rubrique = $row['id_rubrique'];
		if ($res = sql_select('titre', 'spip_breves', 'id_rubrique='.$id_rubrique)) {
			$nbr = sql_count($res) + $nbr ;
		}
	}
	return $nbr;
}

// traiter
//
function formulaires_configurer_html5up_lens_traiter_dist() {
	$retour = array();

	include_spip('include/config');
	include_spip('inclure/html5up_lens_constantes');

	if ( ! _request('breve_pied') ) {
		ecrire_config( 'html5uplens/breve_pied', _LENS_BREVE_PIED ) ; 
	} else {
		ecrire_config( 'html5uplens/breve_pied', _request('breve_pied') ) ;
	}

	if ( _request('valeur_cadre_vignette') == "oui" ) {
		ecrire_config( 'html5uplens/valeur_cadre_vignette', 'oui' ) ;
		ecrire_config( 'html5uplens/valeur_cadre_vignette', _request('valeur_cadre_vignette') ) ;
		ecrire_config( 'html5uplens/valeur_cadre_taille', _request('valeur_cadre_taille') ) ;
		ecrire_config( 'html5uplens/valeur_cadre_couleur', _request('valeur_cadre_couleur') ) ;
	} else {
		ecrire_config( 'html5uplens/valeur_cadre_vignette', 'non' ) ;
		ecrire_config( 'html5uplens/valeur_cadre_taille', 0 ) ;
	}

	if ( _request('valeur_cadre_bouton') == "oui" ) {
		ecrire_config( 'html5uplens/valeur_cadre_bouton', 'oui' ) ;
		ecrire_config( 'html5uplens/valeur_cadre_bouton', _request('valeur_cadre_bouton') ) ;
		ecrire_config( 'html5uplens/valeur_cadre_bouton_taille', _request('valeur_cadre_bouton_taille') ) ;
		ecrire_config( 'html5uplens/valeur_cadre_bouton_couleur', _request('valeur_cadre_bouton_couleur') ) ;
	} else {
		ecrire_config( 'html5uplens/valeur_cadre_bouton', 'non' ) ;
		ecrire_config( 'html5uplens/valeur_cadre_bouton_taille', 0 ) ;
	}
	ecrire_config( 'html5uplens/valeur_bouton_couleur', _request('valeur_bouton_couleur') ) ;

	ecrire_config( 'html5uplens/valeur_texte_bouton_couleur', _request('valeur_texte_bouton_couleur') ) ;


	if ( _request('valeur_texte_aux_images') == "oui" ) {
		ecrire_config( 'html5uplens/valeur_texte_viewer_couleur', _request('valeur_texte_viewer_couleur') ) ;
		ecrire_config( 'html5uplens/valeur_texte_aux_images', _request('valeur_texte_aux_images') ) ;
	} else {
		ecrire_config( 'html5uplens/valeur_texte_aux_images', _request('valeur_texte_aux_images') ) ;
	}

	$retour['message_ok'] = _T('html5up_lens:enregistrement_formulaire');
	return $retour;
}
