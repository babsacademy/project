<?php
 //-----------------------------------connexion à la base de donnee--------------------------------------------------------------------------
       try{
                $bdd = new PDO('mysql:host=;dbname=JQUERY;charset=utf8', 'root', 'jinadiallo',
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                // $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
        }
        catch(Exception $e){
            die('Erreur : ' . $e->getMessage());
        }
?>

<?php
        $sql= "select libellescat,qtestock from Produit as p, SousCategorie as s where s.idscat=p.idscat AND idpdt=6" ;
        $reponse=$bdd->query($sql);
        while($donnees = $reponse->fetch()){

          echo "<tr>
                  <td>".$donnees['libellescat']."</td>
                  <td>".$donnees['qtestock']."</td>
                </tr>";
       }

?>