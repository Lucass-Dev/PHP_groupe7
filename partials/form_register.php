<?php?>

<div class="formulaire_container">
    <h1 id="form_title">Formulaire d'inscription</h1>
    <form id="formulaire" action="partials/handle_signup.php" method="POST">
        <h3>Nom:</h3>
        <input name="name" type="text"/>
        <h3>E-mail:</h3>
        <input name="email" type="text"/>
        <h3>Password:</h3>
        <input name="passw" type="password"/>
        <h3>Comfirm Password:</h3>
        <input name="conf_passw" type="password"/>
        <button type="submit">Créer un compte</button>
    </form>
    <a class="blog" href="?p=form_login">Je possède déjà un compte</a>
</div>