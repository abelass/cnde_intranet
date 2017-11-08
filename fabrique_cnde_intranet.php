<?php

/**
 *  Fichier généré par la Fabrique de plugin v6
 *   le 2017-11-08 16:02:23
 *
 *  Ce fichier de sauvegarde peut servir à recréer
 *  votre plugin avec le plugin «Fabrique» qui a servi à le créer.
 *
 *  Bien évidemment, les modifications apportées ultérieurement
 *  par vos soins dans le code de ce plugin généré
 *  NE SERONT PAS connues du plugin «Fabrique» et ne pourront pas
 *  être recréées par lui !
 *
 *  La «Fabrique» ne pourra que régénerer le code de base du plugin
 *  avec les informations dont il dispose.
 *
**/

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

$data = array (
  'fabrique' => 
  array (
    'version' => 6,
  ),
  'paquet' => 
  array (
    'prefixe' => 'cnde_intranet',
    'nom' => 'CNDE ',
    'slogan' => 'Intranet pour la CNDE',
    'description' => '',
    'version' => '1.0.0',
    'auteur' => 'Rainer Müller',
    'auteur_lien' => 'https://websimple.be',
    'licence' => 'GNU/GPL',
    'categorie' => 'squelette',
    'etat' => 'dev',
    'compatibilite' => '[3.2.0;3.2.*]',
    'documentation' => '',
    'administrations' => '',
    'schema' => '1.0.0',
    'formulaire_config' => '',
    'formulaire_config_titre' => '',
    'fichiers' => 
    array (
      0 => 'autorisations',
      1 => 'fonctions',
      2 => 'pipelines',
    ),
    'inserer' => 
    array (
      'paquet' => '',
      'administrations' => 
      array (
        'maj' => '',
        'desinstallation' => '',
        'fin' => '',
      ),
      'base' => 
      array (
        'tables' => 
        array (
          'fin' => '',
        ),
      ),
    ),
    'scripts' => 
    array (
      'pre_copie' => '',
      'post_creation' => '',
    ),
    'exemples' => 'on',
  ),
  'objets' => 
  array (
  ),
  'images' => 
  array (
    'paquet' => 
    array (
      'logo' => 
      array (
        0 => 
        array (
          'extension' => 'png',
          'contenu' => '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',
        ),
      ),
    ),
    'objets' => 
    array (
    ),
  ),
);
