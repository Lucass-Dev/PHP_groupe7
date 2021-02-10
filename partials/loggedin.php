<?php
    require_once '../init.php';

if(isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    echo "Connecté en tant que" . $user;
}
else {
    //header('Location: ../index.php?p=form_login');
  die();
}

?>


<a href="logout.php">Logout</a><br />
    Ceci est un contenu privé.<br />
    <?php var_dump($user); ?>