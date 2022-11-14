<?php
session_start();
include 'koneksi.php';
if(isset($_POST['login'])){
    // cek akun
    $cek = mysqli_query($koneksi,"SELECT * FROM users 
    WHERE username = '".htmlspecialchars($_POST['user'])."' AND password ='".MD5( htmlspecialchars($_POST['pass']))."' 
    ");

    if(mysqli_num_rows($cek) > 0){
        $a = mysqli_fetch_object($cek);

        $_SESSION['stat_login']= true;
        $_SESSION['nik']=$a->nik;
        $_SESSION['username']= $a->user;

        echo '<script>window.location="index.php" </script>';
    }else{
        echo '<script>alert("Gagal, username atau password salah") </script>';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PSB Online  | Administrator</title>
    <link rel="stylesheet" type="text/css" href="css/sytle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="stylesheet" href="style1.css">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- baggian main login -->
    <section class="main-login">

    <div class="box-login">
                <h2>Login Admin</h2>


        <!-- bagina form login -->
    
        <form action="" method="post">
    
        <div class="box">

                <table> 
                    <tr>
                        <td>Username</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="user" class="input-control ">
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td>
                            <input type="password" name="pass" class="input-control ">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input type="submit" name="login" value="Login" class="btn-login">
                        </td>
                    </tr>



                </table>

</div>
</form>
    </div>
    </section>

</body>
</html>