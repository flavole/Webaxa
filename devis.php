
<?php
    $head ="Devis en ligne";
?>
    <div class="box">
        
        
        
        <?php    if(isset($erreur)) { echo "<br /><p class='erreur'>$erreur</p><br />"; } ;?>
        <form id="formdevis" method="post" action="devispost.php">
            
            <select class="select" name="whois">
                <option value="">Vous êtes :</option>
                <option value="Entreprise">Une entreprise</option>
                <option value="Particulier">Un particulier</option>
                <option value="Professionnel">Un professionnel</option>
               
            </select>
            
            <br />
            <input type="texts" name="name" value="Nom et Prénom"/>
            <br />
            <input type="texts" name="cp" value="Code Postal"/>
            <br />
            <input type="texts" name="phone" value="Téléphone"/>
            <br />
            <input type="texts" name="mail" value="E-mail"/>
            <br />
            <input type="texts" name="web" value="Site Web (si existant) :"/>
            <br />
            
            <h6>Quel est votre projet?</h6>
                <input type="checkbox" name="tabprojet[]" value="10"/> Site vitrine (Faire connaitre votre entreprise, vos produits ou services)
                <br />
                <input type="checkbox" name="tabprojet[]" value="20"/> Boutique en ligne (e-commerce)
                <br />
                <input type="checkbox" name="tabprojet[]" value="30"/> Référencement
                <br />
                <input type="checkbox" name="tabprojet[]" value="40"/> Refonte graphique
                <br />
                <input type="checkbox" name="tabprojet[]" value="50"/> Print
                <br />
                <input type="checkbox" name="tabprojet[]" value="autre"/> Autre (précisez)
                <br />
				 
                <textarea name="content" id="specificites" cols="50" rows="15">Fonctionnalités spécifiques, remarques, demandes particuliéres...</textarea>
                <br />
                <input type="submit" class="btn" name="go" value="Envoyez">
                <input type="button" name="cancel" value="Annuler" onclick="closebox()">
        </form>
    </div>