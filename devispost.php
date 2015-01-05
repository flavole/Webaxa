<?php
    if(!empty($_POST['whois']) && !empty($_POST['name']) && !empty($_POST['cp']) && !empty($_POST['phone']) && !empty($_POST['mail']))
    {
        ?>
            <h1>Recapitulatif</h1>
        <?php
        $whois=$_POST['whois'];
        $name=$_POST['name'];
        $cp=$_POST['cp'];
        $phone=$_POST['phone'];
        $mail=$_POST['mail'];
        $web=$_POST['web'];
        $tabprojet = $_POST['tabprojet'];
        $total = implode('+',$tabprojet);
        echo $whois;
        ?><br /><?php
        echo $name;
        ?><br /><?php
        echo $cp;
        ?><br /><?php
        echo $phone;
        ?><br /><?php
        echo $mail;
        ?><br /><?php
        echo $web;
        ?><br /><h1>Total</h1><?php
        echo $total; 
    }       
    else {
        $erreur = "Veuillez remplir tous les champs";
        include "devis.php";
    }
?>