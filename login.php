<?php
session_start(); 

if (isset($_GET['logout'])) {
    if ($_GET['logout'] == "1") {
        session_destroy();
        unset($_SESSION);
    }
}



if (isset($_POST['login']) && isset($_POST['mdp'])) { 
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_database = "camping";
    $db_port = "3306";

    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_database, $db_port);
    if (!$conn) { 
        die("Erreur de connexion à la base de données");
    };

    $sql = "select * from utilisateurs where mail='" . $_POST['login'] . "' and password_user='" . $_POST['mdp'] . "'"; 
    $resultat = mysqli_query($conn, $sql);
    if ($resultat == FALSE) {
        die("<br>Echec d'execution de la requete : " . $sql);
    } else {
        if (mysqli_num_rows($resultat) == 1) { 
            $row = mysqli_fetch_assoc($resultat);
            $_SESSION['nom_user'] = $row['pseudo'];
            $_SESSION['mail_user'] = $row['mail'];
            $_SESSION['type'] = "etu"; 
        }
    }

}

?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Expires" content="0">
</head>

<body>
    <?php
    
        $db_host = "localhost";
        $db_user = "root";
        $db_password = "";
        $db_database = "camping";
        $db_port = "3306";
    
        $conn = mysqli_connect($db_host, $db_user, $db_password, $db_database, $db_port);

        $_SESSION['AfficherFormulaire'] = 1;
        $_SESSION['AfficherConnexion'] = 1;
    if(isset($_POST['pseudo'],$_POST['mail'],$_POST['passwd'])) {
        if(!mysqli_query($conn,"INSERT INTO utilisateurs SET pseudo='".$_POST['pseudo']."', mail='".$_POST['mail']."', password_user='".$_POST['passwd']."'")) {
            echo "Une erreur s'est produite: ".mysqli_error($conn);
        } else {
            echo "Vous êtes inscrit avec succès!";
            $_SESSION['AfficherFormulaire']=0;
        }
    }
    if (isset($_SESSION['type'])) {
        $_SESSION['AfficherConnexion']= 0;
        $_SESSION['AfficherFormulaire'] = 0;
        echo 'Hello ' . $_SESSION['nom_user'];
        echo '<a href="index-shop.html?Connexion=Oui"></a>';
        echo '<br><a href="./index.php?Connexion=Oui">Accéder au site</a><br><br>';
        echo '<br><a href="./login.php?logout=1">Se deconnecter</a><br><br>';
    }

if($_SESSION['AfficherFormulaire']==1){
    ?>

    <br />
    <h3> Inscription </h3>
    <br>
    <form method="post" action="login.php">
        Pseudo : <input type="text" name ="pseudo">
        <br />
        Mail : <input type="text" name="mail">
        <br />
        Mot de passe : <input type="password" name="passwd">
        <br />
        <input type="submit" value="S'inscrire">
    </form>
    <?php
}
?>
<?php
if ($_SESSION['AfficherConnexion'] ==1){
    ?>
    <br>
    <h3> Connexion </h3>
    <br>
    <form action="./login.php" method=post>
        <label for="login">login :</label>
        <input type="text" id="login" name="login"><br><br>

        <label for="mdp">Mot de passe :</label>
        <input type="text" id="mdp" name="mdp"><br><br>

        <input type="submit" value="Se connecter">
    </form>
    <?php
}
?>

    <br><br><br><br><br>

</body>

</html>