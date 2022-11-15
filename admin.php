<?php 

require_once("koneksi.php");
//mengecek apakah login udah dicek apa belum
if(isset($_POST['login'])){
    //filter uname ama pass
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    //Pada query, kita menggunakan logika OR agar user bisa login dengan email dan username .
    $sql = "SELECT * FROM users WHERE username=:username OR email=:email";
    $stmt = $db->prepare($sql);
    
    // bind parameter ke query
    $params = array(
        ":username" => $username,
        ":email" => $username
    );

    $stmt->execute($params);

    //Setelah query dieksekusi, kita ambil hasilnya dengan fungsi fetch().
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    /*
    Artinya, kita akan mengambil hasil query sebagai array assosiatif.
    Fungsi fetch() akan menghasilkan null kalau tidak ada data
    */

    // jika user terdaftar
    if($user){
        // verifikasi password
        if(password_verify($password, $user["password"])){
            // buat Session
            session_start();
            $_SESSION["user"] = $user;
            // login sukses, alihkan ke halaman timeline
            header("Location: timeline.php");
            /*
            Variabel $_SESSION adalah variabel super global yang bisa dibaca dari semua file PHP, karena diingat oleh server
            Untuk dapat menggunakan variabel $_SESSION kita harus memanggil fungsi session_start() terlebih dahulu.
            $_SESSION["user"] = $user; artinya kita menyimpan data user ke dalam session.
            Ini yang akan kita manfaatkan untuk mengecek apakah user sudah login atau belum.
            */
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">

        <p>&larr; <a href="index.php">Home</a>

        <h4>Masuk ke Pesbuk</h4>
        <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>

        <form action="" method="POST">

            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" type="text" name="username" placeholder="Username atau email" />
            </div>


            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Password" />
            </div>

            <input type="submit" class="btn btn-success btn-block" name="login" value="Masuk" />

        </form>
            
        </div>

    </div>
</div>
    
</body>
</html>