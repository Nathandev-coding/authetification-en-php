<?php
  session_start();
  if(!isset($_SESSION['mail'])){
    header("location: login.php");
    exit();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <main>
        <section class="w-100 min-vh-100 d-flex justify-content-center align-items-center flex-column">
            <h1>bienvenu</h1>
            <h2><?php echo $_SESSION['mail'];?></h2>

        </section>
    </main>
    
</body>
</html>