<?php
 //-----------------------------------connexion à la base de donnee--------------------------------------------------------------------------
       try{
                $bdd = new PDO('mysql:host=;dbname=Jquery;charset=utf8', 'root', 'jinadiallo',
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                // $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
        }
        catch(Exception $e){
            die('Erreur : ' . $e->getMessage());
        }
?>

 <?php   
        $sql= "select libsouscat,quantite from produit as p, souscategorie as s where s.idsous=p.idsouscate AND idprd=20" ;
        $reponse=$bdd->query($sql);
        while($donnees = $reponse->fetch()){

          echo "<tr>
                  <td>".$donnees['libsouscat']."</td>
                  <td>".$donnees['quantite']."</td>
                </tr>";
        }
 
 ?>