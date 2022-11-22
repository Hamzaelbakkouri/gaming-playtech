<?php
include_once "connexion.php";

?>
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

    if (isset($_POST['button'])) {
        //extraction des informations envoyé dans des variables par la methode POST
        $target_dir = $_SERVER['DOCUMENT_ROOT'] . "/gaming-playtech/uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image

        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
            $taza = "uploads/" . $_FILES["fileToUpload"]["name"];
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    extract($_POST);

    $req = mysqli_query($con, "INSERT INTO `product` (`id`, `productName`, `quantity`, `price`, `cat_id`, `image`, `filter`) VALUES (NULL, '$productN', '$quantity','$price', '$select', '$taza', '$filter')");
    if ($req) {
        header("location: index.php");
    } else {
        $message = "produit non ajouté";
    }

    }

    ?>
    <div class="form">
        <a href="index.php" class="back_btn"><img src="../images/back.png"> Retour</a>
        <h2>Ajouter un produit</h2>
        <p class="erreur_message">
            <?php

            if (isset($message)) {
                echo $message;
            }
            ?>

        </p>
        <form action="" method="POST" enctype="multipart/form-data" novalidate>
            <label>productName</label>
            <input type="text" name="productN" required>
            <label>quantity</label>
            <input type="number" name="quantity" required>
            <label>price</label>
            <input type="number" name="price" required>
            <select name="select" id="">
                <option selected disabled>Select an option</option>
                <?php
                $req1 = "SELECT * FROM `category` ";
                $result = $con->query($req1);

                while ($key = $result->fetch_assoc()) {
                    echo "<option value=" . $key['id'] . ">" . $key['type'] . "</option>";
                }


                ?>
            </select>


            <select name="filter" id="">
                <option selected disabled>Select filter category</option>
                <option value="hr">HORROR games</option>
                <option value="fps">FPS games</option>
                <option value="old">OLD games</option>
                <option value="set">setup</option>
                <option value="key">keyboards</option>
                <option value="mou">mouses</option>
                <option value="gc">gaming chair</option>
            </select>


            <label for="image">image</label>
            <input type="file" name="fileToUpload" id="">

            <input type="submit" value="Ajouter" name="button">
        </form>
    </div>
</body>

</html>