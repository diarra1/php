<?php
require_once(dirname(__FILE__).'/defines.php');
require_once('data/page_top.php');// Inclusion des defines

/**
 * Fomulaire à valider
 */
//var_dump($_POST);
define ('Animaux_MIN', 3);
define ('Animaux_MAX', 5);

// Par défaut, je mets tous les champs à NON VALIDE jusqu'à vérification du contraire
$validation = array(
    'prenom' => array(
        'is_valid' => false,
        'value' => null,
        'err_msg' => '',
    ),
    'nom' => array(
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
    'telephone' =>array(
        'is_valid'=> false ,
        'value'=>null,
        'err_msg'=>'',
    ),
);

// Champ prenom
$validation['prenom']['value'] = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_STRING);
$validation['prenom']['is_valid'] = (1 === preg_match('/\w{2,}/', $validation['prenom']['value']));

// Champ nom
$validation['nom']['value'] = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
$validation['nom']['is_valid'] = (1 === preg_match('/\w{2,}/', $validation['nom']['value']));

// Champ email
$validation['email']['value'] = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$validation['email']['is_valid'] = false !== filter_var($validation['email']['value'], FILTER_VALIDATE_EMAIL);

// Champ age
$validation['Animaux']['value'] = filter_input(INPUT_POST, 'Animaux', FILTER_SANITIZE_STRING);
//var_dump($validation['age']['value']);
$options=array('options'=>array('min_range'=>Animaux_MIN, 'max_range'=>Animaux_MAX));
$validation['Animaux']['is_valid'] = false !== filter_var($validation['Animaux']['value'], FILTER_VALIDATE_INT, $options);
//var_dump($validation['age']['is_valid']);
//champ telephone
$validation['telephone']['value']=filter_input(INPUT_POST, 'telephone',FILTER_SANITIZE_NUMBER_FLOAT,$options);
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
    <label for="prenom">Prenom : </label>
    <input type="text" name="prenom" id="prenom"  placeholder="Prénom"
           class="<?php echo $validation['prenom']['is_valid'] ? '' : 'champ_invalide'; ?>"
           value="<?php echo isset($_POST['prenom']) ? $_POST['prenom'] : ''; ?>"
    />
        </div>
    <div>
    <label for="nom">Nom: </label>
    <input type="text" name="nom" id="nom" placeholder="Nom"
           class="<?php echo $validation['nom']['is_valid'] ? '' : 'champ_invalide'; ?>"
           value="<?php echo isset($_POST['nom']) ? $_POST['nom'] : ''; ?>"
    />
    </div>
    <div>
    <label for="email">Email</label>
    <input type="text" name="email" id="email" placeholder="Courriel"
           class="<?php echo $validation['email']['is_valid'] ? '' : 'champ_invalide'; ?>"
           value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>"
    />
    </div>
    <div>
    <label for="Animaux">Age</label>
    <input type="text" name="Animaux" id="age" placeholder=""
           class="<?php echo $validation['Animaux']['is_valid'] ? '' : 'champ_invalide'; ?>"
           value="<?php echo isset($_POST['Animaux']) ? $_POST['Animaux'] : ''; ?>"
    />
    </div>
    <div>
    <input type="submit" name="submit" value="Soumettre"/>
        </div>
</form>



<?php
require_once('data/page_bottom.php.');// Inclusion des defines

?>

