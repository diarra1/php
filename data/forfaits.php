<?php

function get_forfaits() {
    global $forfaits_data;
    return $forfaits_data;
}

function get_categories() {
    global $categories;
    return $categories;
}

define('FORF_NOM',          'nom');
define('FORF_CATEGORY',     'categorie');
define('FORF_DESCRIPTION',  'description');
define('FORF_DUREE',        'duree');
define('FORF_DEBUT_SAISON', 'debut_saison');
define('FORF_FIN_SAISON',   'fin_saison');
define('FORF_PRIX',         'prix');
define('FORF_PLACES_DISPO', 'places_dispo');
define('FORF_MAX_ANIMAUX',  'nbr_max_animaux');
define('FORF_PRIX_ANIMAL',  'prix_animal');
define('FORF_PHOTO1',       'photo1');
define('FORF_PHOTO2',       'photo2');
define('IMG_PATH',      'images/images-modal/');
$categories = array("Croisières", "Sports d'hiver", "Nature");

$forfaits_data = array(
    '05' => array(
        FORF_NOM => "L'OCEAN ATLANTIQUE",
        FORF_CATEGORY => "Croisieres",
        FORF_DESCRIPTION => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure ",
        FORF_DUREE => 14,
        FORF_DEBUT_SAISON => "2016-09-01",
        FORF_FIN_SAISON => "2017-05-31",
        FORF_PRIX => 7660,
        FORF_PLACES_DISPO => 98,
        FORF_MAX_ANIMAUX => 2,
        FORF_PRIX_ANIMAL => 99,
        FORF_PHOTO1 => "croisiere_01.jpg",
        FORF_PHOTO2 => "iceberg_01.jpg"
    ),
    '12' => array(
        FORF_NOM => "SUD",
        FORF_CATEGORY => "croisiere",
        FORF_DESCRIPTION => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure ",
        FORF_DUREE => 18,
        FORF_DEBUT_SAISON => "2016-04-01",
        FORF_FIN_SAISON => "2016-10-31",
        FORF_PRIX => 8920,
        FORF_PLACES_DISPO => 105,
        FORF_MAX_ANIMAUX => 2,
        FORF_PRIX_ANIMAL => 156,
        FORF_PHOTO1 => "Banff_Parke.jpg",
        FORF_PHOTO2 => "croisiere_01.jpg"
    ),
    '13' => array(
        FORF_NOM => "LA FORET AMAZONIENNE",
        FORF_CATEGORY => "Afrique",
        FORF_DESCRIPTION => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod t" ,
        FORF_DEBUT_SAISON => "2016-04-01",
        FORF_FIN_SAISON => "2016-12-31",
        FORF_PRIX => 9230,
        FORF_PLACES_DISPO => 56,
        FORF_MAX_ANIMAUX => 0,
        FORF_PRIX_ANIMAL => 0,
        FORF_PHOTO1 => "iceberg_02.jpg",
        FORF_PHOTO2 => "croisiere_02.jpg"
    ),
    '14' => array(
        FORF_NOM => "L'AFRIQUE ET SES OURS",
        FORF_CATEGORY => "Afrique",
        FORF_DESCRIPTION => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore mag ",
        FORF_DUREE => 12,
        FORF_DEBUT_SAISON => "2016-05-01",
        FORF_FIN_SAISON => "2016-11-30",
        FORF_PRIX => 9230,
        FORF_PLACES_DISPO => 322,
        FORF_MAX_ANIMAUX => 0,
        FORF_PRIX_ANIMAL => 0,
        FORF_PHOTO1 => "ours_01.jpg",
        FORF_PHOTO2 => "ours_02.jpg"
    ),
    '18' => array(
        FORF_NOM => "MONT_ROYAL",
        FORF_CATEGORY => "Amerique",
        FORF_DESCRIPTION => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua",
        FORF_DUREE => 1,
        FORF_DEBUT_SAISON => "2016-12-01",
        FORF_FIN_SAISON => "2017-04-30",
        FORF_PRIX => 199,
        FORF_PLACES_DISPO => 450,
        FORF_MAX_ANIMAUX => 0,
        FORF_PRIX_ANIMAL => 0,
        FORF_PHOTO1 => "escalade_Husky.jpg",
        FORF_PHOTO2 => "tente.jpg"
    ),
    '22' => array(
        FORF_NOM => "Sommets du St Laurent en ski",
        FORF_CATEGORY => "amerique",
        FORF_DESCRIPTION => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure ",
        FORF_DUREE => 1,
        FORF_DEBUT_SAISON => "2016-12-01",
        FORF_FIN_SAISON => "2017-04-30",
        FORF_PRIX => 215,
        FORF_PLACES_DISPO => 341,
        FORF_MAX_ANIMAUX => 0,
        FORF_PRIX_ANIMAL => 0,
        FORF_PHOTO1 => "ski.jpg",
        FORF_PHOTO2 => "station_ski.jpg"
    ),
    '23' => array(
        FORF_NOM => "ski de fond raquette à Tremblant",
        FORF_CATEGORY => "Amerique",
        FORF_DESCRIPTION => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure ",
        FORF_DUREE => 1,
        FORF_DEBUT_SAISON => "2016-12-01",
        FORF_FIN_SAISON => "2017-04-30",
        FORF_PRIX => 255,
        FORF_PLACES_DISPO => 256,
        FORF_MAX_ANIMAUX => 0,
        FORF_PRIX_ANIMAL => 0,
        FORF_PHOTO1 => "station_ski.jpg",
        FORF_PHOTO2 => "ski.jpg"
    ),
    '31' => array(
        FORF_NOM => "Via ferrata des glaces",
        FORF_CATEGORY => "Nature",
        FORF_DESCRIPTION => "Lorem ipsum dolor sit amet, consectetur adipisicing elit",
        FORF_DUREE => 1,
        FORF_DEBUT_SAISON => "2017-01-01",
        FORF_FIN_SAISON => "2017-03-31",
        FORF_PRIX => 389,
        FORF_PLACES_DISPO => 268,
        FORF_MAX_ANIMAUX => 0,
        FORF_PRIX_ANIMAL => 0,
        FORF_PHOTO1 => "aventure_01.jpg",
        FORF_PHOTO2 => "lac_louise.jpg"
    ),
    '32' => array(
        FORF_NOM => "Le grand nord en hydravion",
        FORF_CATEGORY => "Nature",
        FORF_DESCRIPTION => "Lorem ipsum dolor sit amet, consectetur adipisicing elit,",
        FORF_DUREE => 8,
        FORF_DEBUT_SAISON => "2016-07-15",
        FORF_FIN_SAISON => "2016-09-15",
        FORF_PRIX => 3240,
        FORF_PLACES_DISPO => 82,
        FORF_MAX_ANIMAUX => 2,
        FORF_PRIX_ANIMAL => 176,
        FORF_PHOTO1 => "pingouins.jpg",
        FORF_PHOTO2 => "lac_moraine.jpg"
    ),
    '44' => array(
        FORF_NOM => "Chiens et gîtes du grand nord",
        FORF_CATEGORY => "Nature",
        FORF_DESCRIPTION => "Lorem ipsum dolor sit amet, consectetur adipisic.",
        FORF_DUREE => 7,
        FORF_DEBUT_SAISON => "2016-10-01",
        FORF_FIN_SAISON => "2017-05-31",
        FORF_PRIX => 2099,
        FORF_PLACES_DISPO => 102,
        FORF_MAX_ANIMAUX => 0,
        FORF_PRIX_ANIMAL => 0,
        FORF_PHOTO1 => "chiens_traineau.jpg",
        FORF_PHOTO2 => "Caribou.jpg"
    ),
    '46' => array(
        FORF_NOM => "Au sommet de l'Everest",
        FORF_CATEGORY => "Nature",
        FORF_DESCRIPTION => "Lorem ipsum dolor sit amet, consectetur .",
        FORF_DUREE => 69,
        FORF_DEBUT_SAISON => "2016-01-01",
        FORF_FIN_SAISON => "2016-12-31",
        FORF_PRIX => 12150,
        FORF_PLACES_DISPO => 65,
        FORF_MAX_ANIMAUX => 0,
        FORF_PRIX_ANIMAL => 0,
        FORF_PHOTO1 => "nature.jpg",
        FORF_PHOTO2 => "aventure_01.jpg"
    ),
    '47' => array(
        FORF_NOM => "Sermilik, la route des icebergs",
        FORF_CATEGORY => "Nature",
        FORF_DESCRIPTION => "Lorem ipsum dolor sit amet, consectetur .",
        FORF_DUREE => 15,
        FORF_DEBUT_SAISON => "2016-06-15",
        FORF_FIN_SAISON => "2016-09-15",
        FORF_PRIX => 5990,
        FORF_PLACES_DISPO => 34,
        FORF_MAX_ANIMAUX => 0,
        FORF_PRIX_ANIMAL => 0,
        FORF_PHOTO1 => "iceberg_01.jpg",
        FORF_PHOTO2 => "iceberg_02.jpg"
    ),
);
