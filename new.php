
<?php

try {
    $bdd = new PDO('mysql:host=;dbname=JQUERY;charset=utf8', 'root', 'bbyou',
             array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    // $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    $sql = 'select  * from Produit ';

    // preparation de la requete
    $req = $bdd->query($sql);
    //execution de la requete

   
    // echo  json_encode($info);
   
} catch (Exception $e) {
    die('Erreur : '.$e->getMessage());
    echo 'pas de connexion';
}

?>