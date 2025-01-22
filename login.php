<?php
 session_start();
 include_once "config.php";

 if($_SERVER['REQUEST_METHOD'] ==   "POST"){
    $mail = $_POST['mail'];
    $password = $_POST['password'];

    $sql = "SELECT mail,password FROM user WHERE mail= '$mail' ";
    $resultat = $conn->query($sql);
    if($resultat->num_rows >0){
        $row = $resultat->fetch_assoc();
        if($password == $row['password']){
            $_SESSION['mail'] == $mail;
            header('location: welcome.php');
            exit();
        }else{
            header("location: login.php?msg=mot de oasse incorect");
        }
    }else{
        header('location: login.php?msg=cet mail n existe pas');
    }
 }
 $conn->close();
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign in</title>
    <link rel="stylesheet" href="bootstrap.css">
    
</head>
<body>
    <main>
        <section class="w-100 min-vh-100 justify-content-center align-items-center flex-column">
            <div class="container min-vh-100 d-flex justify-content-center align-items-center ">
                <div class="form-content p-4 border rounded">
                    <form action="" method="post" class="p-3">
                        <h1 class="text-primary">sign in</h1>
                        <?php
                        if(isset($_GET['msg'])){
                            $msg = $_GET['msg'];
                            echo "<div class'alert alert-danger' role='aler'>
                            $msg  </div>";
                        }
                        ?>
                        <div class="input-box mb-3">
                            <label for="">Mail</label>
                            <input type="email" class="form-control" name="mail" required>
                        </div>
                        <div class="input-box mb-3">
                            <label for="">password</label>
                            <input type="text" class="form-control" name="password" required>
                        </div>
                        <div class="input-box mb-3">
                            <button type="submit" class="btn bg-primary text-white w-100">Soumetre</button>
                        </div>
                    </form>
                </div>
                
            </div>

        </section>
    </main>
</body>
</html>