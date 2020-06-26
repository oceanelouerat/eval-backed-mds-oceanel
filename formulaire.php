
<!DOCTYPE html>
<html>
<form action="/ma-page-de-traitement" method="post">
    <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="oluser_name">
    </div>
    <div>
        <label for="city">Ville :</label>
        <input type="text" id="city" name="oluser_city">
    </div>
    <div>
        <label for="phone">Téléphone :</label>
        <input id="phone" name="oluser_phone">
    </div>
    <div>
        <label for="mail">e-mail :</label>
        <input type="email" id="mail" name="oluser_mail">
    </div>
    <div>
        <label for="project">Votre projet :</label>
        <input type="select">
   			<option valeur="siteweb">Création de site web</option>
   			<option valeur="seo">référencement</option>
   			<option valeur="refonte">refonte de site web</option>
   			<option valeur="gestionbo">Gestion Back Office</option>
</input>
    </div>
</form>
</html>