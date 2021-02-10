<?php?>

<div class="formulaire_container">
    <h1 id="form_title">Connectez-vous</h1>
    <form id="formulaire" action="partials/handle_login.php" method="POST">
        <h3>E-mail:</h3>
        <input name="email" type="text"/>
        <h3>Password:</h3>
        <input name="passw" type="password"/>
        <button type="submit">Connexion</button>
    </form>
</div>