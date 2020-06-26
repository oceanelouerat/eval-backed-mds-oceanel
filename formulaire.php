
<form action="reponse.php" method="post"> <!--création du balise formulaire-->
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
        <input id="phone" name="oluser_phone"><!--type d'information et ID de l'information-->
    </div>
    <div>
        <label for="mail">e-mail :</label><!--Titre affiché pour l'information demandée-->
        <input type="email" id="mail" name="oluser_mail"><!--type d'information et ID de l'information-->
    </div>
    <div>
        <label for="project">Votre projet :</label><!--Titre affiché pour l'information demandée-->
        <input type="select"><!--Choix déroulant de propositions-->
   			<option valeur="siteweb">Création de site web</option>
   			<option valeur="seo">référencement</option>
   			<option valeur="refonte">refonte de site web</option>
   			<option valeur="gestionbo">Gestion Back Office</option></input>
    </div>
</form>

