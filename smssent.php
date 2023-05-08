<?php

session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}

$DATABASE_HOST = 'localhost';                                                                      
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'officialsms'; //database name
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$stmt = $con->prepare('SELECT password, email FROM accounts WHERE id = ?');
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();

?>

<head>
    <title> SMS </title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <link rel="stylesheet" href="sms.css">
</head>

<body>
    <nav class="navtop">
        <div>
            <h1>PHMC</h1>
            <a href="home.php"><i class="fas fa-solid fa-house"></i>HOME</a>
            <a href="sms.php"><i class="fas fa-solid fa-message"></i>SMS</a>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
        </div>
    </nav>

    <div class="menu">
    <h1> Main Menu </h1>
        <br></br>

        <a href="sms.php"><button type="button" class="sms button"> Create New Message </button></a>
        <br></br>
        <a href="smsinbox.php"><button type="button" class="sms button"> Inbox </button></a>
        <br></br>
        <a href="smssent.php"><button type="button" class="sms button"> Sent Messages </button></a>
        <br></br>
        <a href="smsunsent.php"><button type="button" class="sms button"> Unsent Messages </button></a>
        <br></br>
        <a href="smsqueued.php"><button type="button" class="sms button"> Queued Messages </button></a>
        <br></br>
        <a href="smsbroadcast.php"><button type="button" class="sms button"> Broadcast Messages </button></a>
        <br></br>
        <a href="smsbroadcastsent.php"><button type="button" class="sms button"> Broadcast Sent Messages </button></a>
        <br></br>
        <a href="smsbroadcastunsent.php"><button type="button" class="sms button"> Broadcast Unsent Messages </button></a>
        <br></br>

    </div>

    <div class="container">
        <h1> Sent Messages </h1>
        <br>
        <form action="" method="post">

          

        </form>

        <?php
      
        ?>

        

    </div>
    

</body>

</html>