<?php

session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}

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
        <h1> Inbox </h1>
        <br>
        <table action="" method="post">
            <tr>  
                <th> From </th>
                <th> Mobile # </th>
                <th> Text Message </th>
                <th> Date/Time Received </th>
            </tr>
            <tr>
                <th> Chasey Elizarde </th>
                <th> 09150174133 </th>
                <th> test message </th>
                <th> 5/19/2023 11:25:50 AM </th>
            </tr>

        </table>
        
        <?php
      
        ?>

    </div>
    

</body>

</html>