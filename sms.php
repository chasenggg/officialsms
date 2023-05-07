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
        <h1> Menu </h1>
        <br></br>

        <a href="sms.php"><button type="button" class="sms button"> Send Message </button></a>
        <br></br>
        <a href="smsunsent.php"><button type="button" class="sms button"> Unsend Message </button></a>
        <br></br>
        <a href="smsdelete.php"><button type="button" class="sms button"> Delete Message </button></a>
        <br></br>


    </div>

    <div class="container">
        <h1> Send Messages </h1>
        <br>
        <form action="" method="post">

            <input type="number" name="number" onKeyPress="if(this.value.length==11) return false;" id="contact-input" placeholder="Input number here..">

            <button type="button" class="add button" onclick="addContact()"> Add </button>
            <br></br>

            <textarea id="my-text" rows="5" placeholder="Type something here.." required maxlength="160"></textarea>

            <p id="result"></p>

            <input type="hidden" name="numbers" id="hidden-numbers">
            <br></br>

            <input type="submit" name="submit" placeholder="Send here" value="Send" required>
            <br></br>

        </form>

        <?php
        //for input db
        /*
        $number = $_POST['number'];
        $mytext = $_POST['my-text'];
        
        $conn = new mysqli('localhost','root','','phplogin');
        
        if ($conn->connect_error){
            die('Connection Failed : '.$conn->connect_error);
        }else{
            $stmt = $conn->prepare("insert into messages(number, mytext) values(?, ?)");
            $stmr->bind_param("is",$number, $mytext);
            $stmt->execute();
            echo "Message sent successfully...";
            $stmt->close();
        }
        */

        if (isset($_POST['submit'])) {
            $number = $_POST['numbers'];
           // echo "<fieldset> <legend> Recipient </legend>";
            echo $number;
            //echo " </fieldset>";
        }
        ?>

        

    </div>
    <script src="script.js"></script>

</body>

</html>