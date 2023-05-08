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



    <div class="container contacts">
        <a class="goback" href="sms.php"> Back </a>
        <br></br>
        <h1> Search Contact(s) </h1>
        <br>
        <form action="" method="post">

            <label> Firstname: </label>
            <input type="text" name="firstname" required>
            <br></br>

            <label> Lastname: </label>
            <input type="text" name="lastname" required>
            <br></br>

            <label> Group Name: </label>
            <input type="text" name="groupname" required> 
            <br></br>

            <button type="search" class="search button"> Search </button>

            <button type="clear" class="clear button"> Clear </button>
            <br></br>

        </form>



        <?php

        ?>
    </div>

</body>

</html>