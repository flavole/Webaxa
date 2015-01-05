<?php
    $head ="Devis en ligne";
?>
    <div class="box">
        
        <p>Selectionnez les sp�cificit�s de votre projet</p>
        
        <?php    if(isset($erreur)) { echo "<br /><p class='erreur'>$erreur</p><br />"; } ;?>
        <form id="formdevis" method="post" action="devispost.php">
            
            <select class="select" name="whois">
                <option value="">Vous �tes :</option>
                <option value="Entreprise">Une entreprise</option>
                <option value="Particulier">Un particulier</option>
                <option value="Professionnel">Un professionnel</option>
                <option value="Pingouin">Un pingouin</option>
            </select>
            
            <br />
            <input type="text" name="name" value="Nom et Pr�nom"/>
            <br />
            <input type="text" name="cp" value="Code Postal"/>
            <br />
            <input type="text" name="phone" value="T�l�phone"/>
            <br />
            <input type="text" name="mail" value="E-mail"/>
            <br />
            <input type="text" name="web" value="Site Web (si existant) :"/>
            <br />
            
            <h3>Quel est votre projet?</h3>
                <input type="checkbox" name="tabprojet[]" value="10"/> Site vitrine (Faire conna�tre votre entreprise, vos produits ou services)
                <br />
                <input type="checkbox" name="tabprojet[]" value="20"/> Boutique en ligne (e-commerce)
                <br />
                <input type="checkbox" name="tabprojet[]" value="30"/> R�f�rencement
                <br />
                <input type="checkbox" name="tabprojet[]" value="40"/> Refonte graphique
                <br />
                <input type="checkbox" name="tabprojet[]" value="50"/> Print
                <br />
                <input type="checkbox" name="tabprojet[]" value="autre"/> Autre (pr�cisez)
                <br />
                <textarea name="content" id="specificites" cols="50" rows="15">Fonctionnalit�s sp�cifiques, remarques, demandes particuli�res...</textarea>
                <br />
                <input type="submit" class="btn" name="go" value="Envoyez">
                <input type="button" name="cancel" value="Annuler" onclick="closebox()">
        </form>
    </div>