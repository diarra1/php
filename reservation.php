<?php
require_once(dirname(__FILE__).'/defines.php');
require_once('view/page_top.php');// Inclusion des defines

/**
 * Fomulaire à valider
 */
//var_dump($_POST);
define ('ANIMAUX_MIN', 3);
define ('ANIMAUX_MAX', 5);
define('PRIX_MIN' ,1034);
define('PRIX_MAX' ,2000);

// Par défaut, je mets tous les champs à NON VALIDE jusqu'à vérification du contraire
$validation = array(
    'nom_forfait' => array(
        'is_valid' => false,
        'value' => null,
        'err_msg' => '',
    ),
    'categorie_forfait' => array(
        'is_valid' => false,
        'value' => null,
        'err_msg' => '',
    ),
    'email' => array(
        'is_valid' => false,
        'value' => null,
        'err_msg' => '',
    ),
    'Animaux' => array(
        'is_valid' => false,
        'value' => null,
        'err_msg' => '',
    ),
    'periode_debut' =>array(
        'is_valid'=> false ,
        'value'=>null,
        'err_msg'=>'',
    ),
    'periode_fin' =>array(
        'is_valid'=> false ,
        'value'=>null,
        'err_msg'=>'',
    ),
    'prix' => array(
        'is_valid' => false,
        'value' => null,
        'err_msg' => '',
    ),
    'nombre_participants' => array(
        'is_valid' => false,
        'value' => null,
        'err_msg' => '',
    ),
);

// Champ nom du forfait
$validation['nom_forfait']['value'] = filter_input(INPUT_POST, 'nom_forfait', FILTER_SANITIZE_STRING);
$validation['nom_forfait']['is_valid'] = (1 === preg_match('/\w{2,}/', $validation['nom_forfait']['value']));

// Champ categorie forfait
$validation['categorie_forfait']['value'] = filter_input(INPUT_POST, 'categorie_forfait', FILTER_SANITIZE_STRING);
$validation['categorie_forfait']['is_valid'] = (1 === preg_match('/\w{2,}/', $validation['categorie_forfait']['value']));

// Champ email
$validation['email']['value'] = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$validation['email']['is_valid'] = false !== filter_var($validation['email']['value'], FILTER_VALIDATE_EMAIL);

// Champ animaux
$validation['Animaux']['value'] = filter_input(INPUT_POST, 'Animaux', FILTER_SANITIZE_STRING);
//var_dump($validation['age']['value']);
$options=array('options'=>array('min_range'=>ANIMAUX_MIN, 'max_range'=>ANIMAUX_MAX));
$validation['Animaux']['is_valid'] = false !== filter_var($validation['Animaux']['value'], FILTER_VALIDATE_INT, $options);
//var_dump($validation['age']['is_valid']);
//champ telephone
$validation['periode_debut']['value'] = filter_input(INPUT_POST, 'periode_debut', FILTER_SANITIZE_STRING, $options);
$validation['periode_debut']['is_valid']=(1===preg_match('/\d{4,}{2,}{2}/' ,$validation['periode_debut']['value']));
//champ periode fin
$validation['periode_fin']['value'] = filter_input(INPUT_POST, 'periode_fin', FILTER_SANITIZE_ENCODED,$options);
$validation['periode_fin']['is_valid']=(1===preg_match('/\d{4,}{2,}{2}/' ,$validation['periode_fin']['value']));

//champ prix
$validation['prix']['value'] = filter_input(INPUT_POST, 'prix', FILTER_SANITIZE_STRING);
//var_dump($validation['age']['value']);
$options=array('options'=>array('min_range'=>PRIX_MIN, 'max_range'=>PRIX_MAX));
$validation['prix']['is_valid'] = false !== filter_var($validation['prix']['value'], FILTER_VALIDATE_INT, $options);
// Validité totale du questionnaire : On passe en revue les valeurs 'is_valid' de tous les champs
$formulaire_valide = true;
foreach ($validation as $field) {
    if (! $field['is_valid']) {
        $formulaire_valide = false;
        break;
    }
}

// Si le questionnaire est valide, on affiche un résumé (ou une redirection vers une autre page)
if ($formulaire_valide) {
    // Enregistrement ou traitement des données
    // Eventuellement affichage récapitulatif des données
    // Eventuellement redirection avec header('location: apresFormulaire.php');
    exit();
}

?>

<h1>Formulaire</h1>

<form method="post">
    <div>
    <label for="nom_forfait">nom forfait: </label>
    <input type="text" name="nom_forfait" id="nom_forfait"  placeholder="Prénom"
           class="<?php echo $validation['nom_forfait']['is_valid'] ? '' : 'champ_invalide'; ?>"
           value="<?php echo isset($_POST['nom_forfait']) ? $_POST['nom_forfait'] : ''; ?>"
    />
        </div>
    <div>
    <label for="categorie_forfait">categorie forfait: </label>
    <input type="text" name="categorie_forfait" id="nom" placeholder="Nom"
           class="<?php echo $validation['categorie_forfait']['is_valid'] ? '' : 'champ_invalide'; ?>"
           value="<?php echo isset($_POST['categorie_forfait']) ? $_POST['categorie_forfait'] : ''; ?>"
    />
    </div>
    <div>
    <label for="email">Email</label>
    <input type="text" name="email" id="email" placeholder="Courriel"
           class="<?php echo $validation['email']['is_valid'] ? '' : 'champ_invalide'; ?>"
           value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>"
    />
        <div>
            <label for="prix">Prix</label>
            <input type="number" name="prix" id="prix" placeholder=""
                   class="<?php echo $validation['prix']['is_valid'] ? '' : 'champ_invalide'; ?>"
                   value="<?php echo isset($_POST['prix']) ? $_POST['prix'] : ''; ?>"
            />
    </div>
    <div>
    <label for="Animaux">nombre d'animaux</label>
    <input type="number" name="Animaux" id="animaux" placeholder=""
           class="<?php echo $validation['Animaux']['is_valid'] ? '' : 'champ_invalide'; ?>"
           value="<?php echo isset($_POST['Animaux']) ? $_POST['Animaux'] : ''; ?>"
    />
    </div>
        <div>
            <label for="nombre_participants">nombre participants</label>
            <input type="number" name="nombre_participants" id="age" placeholder=""
                   class="<?php echo $validation['nombre_participants']['is_valid'] ? '' : 'champ_invalide'; ?>"
                   value="<?php echo isset($_POST['nombre_participants']) ? $_POST['nombre_participants'] : ''; ?>"
            />
        </div>
    <div>
        <label for="periode_debut">debut : </label>
        <input type="date" name="periode" id="periode_debut" placeholder="01-12-2011"
               class="<?php echo $validation['periode_debut']['is_valid'] ?'':'champ invalide';?>"
               value="<?php echo isset($_POST['periode_debut']) ? $_POST['periode_debut'] : ''; ?>"/>


    </div>
    <div>
        <label for="periode_fin">Fin : </label>
        <input type="date" name="periode" id="periode_fin" placeholder="01-12-2011"
               class="<?php echo $validation['periode_fin']['is_valid'] ?'':'champ invalide';?>"
               value="<?php echo isset($_POST['periode_fin']) ? $_POST['periode_debut'] : ''; ?>"/>


    </div>
    <div>
    <input type="submit" name="submit" value="Soumettre"/>
        </div>
</form>



<?php
require_once('view/page_bottom.php.');// Inclusion des defines

?>

