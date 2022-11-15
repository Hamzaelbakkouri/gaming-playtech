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
       
       if(isset($_POST['button'])){
           //extraction des informations envoyé dans des variables par la methode POST
           extract($_POST);

           
           if(isset($productN) && isset($quantity) && $price){

                include_once "connexion.php";
               
                $req = mysqli_query($con , "INSERT INTO product VALUES(NULL, '$productN', '$quantity','$price')");
                if($req){
                    header("location: index.php");
                }else {
                    $message = "produit non ajouté";
                }

           }else {
               
               $message = "Veuillez remplir tous les champs !";
           }
       }
    
    ?>
    <div class="form">
        <a href="index.php" class="back_btn"><img src="images/back.png"> Retour</a>
        <h2>Ajouter un produit</h2>
        <p class="erreur_message">
            <?php 
           
            if(isset($message)){
                echo $message;
            }
            ?>

        </p>
        <form action="" method="POST">
            <label>productName</label>
            <input type="text" name="productN" required>
            <label>quantity</label>
            <input type="number" name="quantity">
            <label>price</label>
            <input type="number" name="price">
            <input type="submit" value="Ajouter" name="button">
        </form>
    </div>
</body>
</html>