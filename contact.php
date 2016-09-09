<?php
require_once('data/page_top.php');// Inclusion des defines
?>
<main>



   <h1 id="formu"> Formulaire de contact</h1>
   <form id=paiement>

      <fieldset>
         <legend>Votre identité</legend>

         <ol>
            <li>
               <label for=nom>Nom</label>
               <input id=nom name=nom type=text placeholder=" nom" required autofocus>
            </li>

            <li>
               <label for="prenom">prenom</label>
               <input type="text"id="prenom"  required/>
            </li>
            <li>
               <label for=email>Email</label>
               <input id=email name=email type=email placeholder="exemple@domaine.com" required>
            </li>
            <li>
               <label for=telephone>Téléphone</label>
               <input id=telephone name=telephone type=tel pattern="^\(?\d{3}\)?(-|)?\d{3}(-| )?\d{2}(-|)?\d{2}" placeholder="(514)-621-87-82" required>
            </li>

         </ol>
      </fieldset>

      <fieldset>
         <legend>   Adresse </legend>
         <ol>
            <li>
               <label for=adresse>Adresse</label>
               <textarea id=adresse name=adresse rows=5 required></textarea>
            </li>
            <li>
               <label for=codepostal>Code postal</label>
               <input id=codepostal name=codepostal type=text required>
            </li>
            <li>
               <label for="choix_dejeuner">Pays</label>
               <input list="pays" type="text" id="choix_dejeuner"/>
               <datalist id="pays">
                  <option>senegal</option>
                  <option>france</option>
                  <option>cameroun</option>
                  <option>maroc</option>
                  <option>guinee</option>
               </datalist>
            </li>
         </ol>
      </fieldset>
      <fieldset>
         <legend>Informations </legend>
         <ol>
            <li>
               <fieldset>
                  <legend>renseignements</legend>
                  <ol>
                     <li>
                        <input id=femme name=type_d'identite type=radio>
                        <label for=femme>Femme</label>
                     </li>
                     <li>
                        <input id=Homme name=type_d'identite type=radio>
                        <label for=homme>hommes</label>
                     </li>
                     <li>
                        <input id="enfants" name=type_d'identite type=radio>
                        <label for=enfants>enfants</label>
                     </li>
                  </ol>
               </fieldset>
            </li>


      <fieldset>
         <button type=submit>Je valide!</button>
      </fieldset>
   </form>
   </fieldset>
   </form>
   <footer>

</main>

<?php
require_once ('data/page_bottom.php');
?>