<!DOCTYPE html>
<html lang="en">
<head>
  <title>AFFICHAGE PRODUIT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<tr>

<center> <form class="example" action="" style="margin:auto">
<tr>


<div class="container">
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">NOUVEAU</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Ajout Produit</h4>
        </div>
        <div class="modal-body">
	
	<fieldset>
			<legend class="font-weight-bolder">Enregistrement des produits</legend>
			<div id="messages">
				
			</div>
			<div class="col-md-5 col-sm-5 col-md-offset-4 col-sm-offset-4">
			<form method="POST" action="pages\envoi_image.php" enctype="multipart/form-data" id="image-form">
				<div class="form-group">
				    <label>Nom du produit</label>
				    <input type="text" class="form-control" name="nomimage" placeholder="Nom du produit">
				</div>
				<div class="form-group">
				    <label>Prix</label>
				    <input type="number" class="form-control" name="prix" placeholder="prix du produit">
				</div>
				<div class="form-group">
				    <label>Quantité</label>
				    <input type="number" class="form-control" name="qte" placeholder="Quantité de stock">
				</div>  
				<div class="form-group">
					    <label>Photo du produit</label>
						<input type="file" name="prodimage">
				 </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
 &nbsp;Entrer un produit : <input type="text" placeholder="Search.." name="search2">
<button class="btn btn-primary">Rechercher</button>
  <table class="table table-secondary">
      <tr>
          <th>NOM PROD</th>
          <th>QUANTITE</th>
          <th>PRIX UNITAIRE</th>
          <th>PHOTO</th>
          <th></th>
      </tr>
      <?php 
      include'new.php';
        while($recup = $req->fetch()){
          ?>
          <tr>
              <td><?php echo $recup['libellepdt']; ?></td>
              <td><?php echo $recup['qtestock']; ?></td>
              <td><?php echo $recup['prix']; ?></td>
          </tr>
          <?php
        }
      ?>
  </table>
</div>
</body>
</html>
