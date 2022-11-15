<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

         //connexion à la base de donnée
          include_once "connexion.php";
         //on récupère le id dans le lien
          $id = $_GET['id'];
          //requête pour afficher les infos d'un employé
          $req = mysqli_query($con , "SELECT * FROM product WHERE id = $id");
          $row = mysqli_fetch_assoc($req);


       
       if(isset($_POST['button'])){
           
           extract($_POST);
           
           if(isset($nom) && isset($prenom) && $age){
               
               $req = mysqli_query($con, "UPDATE product SET productName = '$nom' , quantity = '$prenom' , price = '$age' WHERE id = $id");
                if($req){
                    header("location: index.php");
                }else {
                    $message = "Employé non modifié";
                }

           }else {
               
               $message = "Veuillez remplir tous les champs !";
           }
       }
    
    ?>

    <div class="form">
        <a href="index.php" class="back_btn"><img src="images/back.png"> Retour</a>
        <h2>Modifier produit : <?=$row['productName']?> </h2>
        <p class="erreur_message">
           <?php 
              if(isset($message)){
                  echo $message ;
              }
           ?>
        </p>
        <form action="" method="POST">
            <label>productName</label>
            <input type="text" name="nom" value="<?=$row['productName']?>">
            <label>quantity</label>
            <input type="text" name="prenom" value="<?=$row['quantity']?>">
            <label>price</label>
            <input type="number" name="age" value="<?=$row['price']?>">
            <input type="submit" value="Modifier" name="button">
        </form>
    </div>
</body>
</html>