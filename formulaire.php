
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UFT-8">
	<title> Formulaire pour devis</title>

</head>
<body>

<p> Merci de remplir les champs suivants pour obtenir votre devis </p>
<form action="reponse.php" method="get"> <!--création du balise formulaire-->
    <div>
        <label for="name">Nom :</label><!--Titre affiché pour l'information demandée-->
        <input type="text" id="name" name="oluser_name"><!--type d'information et ID de l'information-->
    </div>
    <div>
        <label for="city">Ville :</label><!--Titre affiché pour l'information demandée-->
        <input type="text" id="city" name="oluser_city"><!--type d'information et ID de l'information-->
    </div>
    <div>
        <label for="phone">Téléphone :</label><!--Titre affiché pour l'information demandée-->
        <input type="text" id="phone" name="oluser_phone"><!--type d'information et ID de l'information-->
    </div>
    <div>
        <label for="mail">e-mail :</label><!--Titre affiché pour l'information demandée-->
        <input type="email" id="mail" name="oluser_mail"><!--type d'information et ID de l'information-->
    </div>
    <div>
        <label for="project">Votre projet :</label><!--Titre affiché pour l'information demandée-->
        <input type="select" id="project" name="oluser_project"><!--Choix déroulant de propositions-->
   			<option valeur="siteweb">Création de site web</option>
   			<option valeur="seo">référencement</option>
   			<option valeur="refonte">refonte de site web</option>
   			<option valeur="gestionbo">Gestion Back Office</option></input>
    </div>
</form>
<p> Merci </p>
</body>
</html>
