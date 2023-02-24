<?php 
 session_start();
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sectory</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet"href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/booking/css/styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script
        src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
        crossorigin="anonymous">
    </script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

</head>
<body>
    <header>
    <a href="index.php"><img class="logohorizontal" src="/sectory/img/sectorylogohorizontal.png" alt="Sectory Logo"></a>
    <nav>
        <!-- <div class="wrapper"> -->
            
            <ul class="nav_links">
                <!-- <li><a href="index.php">Home</a></li>
                <li><a href="/sectory/signin.php">Sign In</a></li> -->
                <?php
                    if (isset($_SESSION["useruid"])){
                        // echo($_SESSION["useruid"]);
                        echo "<li><a href='Welcome'>".$_SESSION['useruid']."</li>";
                        echo "<li><a href='/sectory/includes/logout.inc.php'>Logout</a></li>";
                    }
                    else{
                        // echo "<li><a href='index.php'>Home</a></li>";
                        echo "<li><a href='/sectory/signin.php'>Sign In</a></li>";
                    }
                ?>


            </ul>
        <!-- </div> -->
    </nav>
    </header>

<!-- <div class="wrapper"> -->


</body>
</html>