<head>
    <title> SMS </title>
    <!--Google Font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <link rel="stylesheet" href="sms.css">
</head>

<body>
    <nav class="navtop">
        <div>
            <h1>Website Title</h1>
            <a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
        </div>
    </nav>
    <div class="container">
    <!--    
    <a class="goback" href="home.php"> Back </a>
        <br><br></br></br>  
    -->
        <h1> Official SMS </h1>
        <form action="" method="post">

            <input type="number" name="number" onKeyPress="if(this.value.length==11) return false;" id="contact-input" placeholder="Input number here..">

            <button type="button" class="add button" onclick="addContact()">Add</button>
            <br></br>

            <textarea id="my-text" rows="5" placeholder="Type something here.." required maxlength="160"></textarea>

            <p id="result"></p>

            <input type="hidden" name="numbers" id="hidden-numbers">
            <br></br>

            <input type="submit" name="submit" placeholder="Send here" value="Send" required>
            <br></br>
        </form>

        <?php
        /*
        // We need to use sessions, so you should always start sessions using the below code.
        session_start();
        // If the user is not logged in redirect to the login page...
        if (!isset($_SESSION['loggedin'])) {
            header('Location: login.php');
            exit;
        }
        */
        $DATABASE_HOST = 'localhost';
        $DATABASE_USER = 'root';
        $DATABASE_PASS = '';
        $DATABASE_NAME = 'phplogin';
        $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
        if (mysqli_connect_errno()) {
            exit('Failed to connect to MySQL: ' . mysqli_connect_error());
        }
        // We don't have the password or email info stored in sessions, so instead, we can get the results from the database.
        $stmt = $con->prepare('SELECT password, email FROM accounts WHERE id = ?');
        // In this case we can use the account ID to get the account info.
        $stmt->bind_param('i', $_SESSION['id']);
        $stmt->execute();
        $stmt->bind_result($password, $email);
        $stmt->fetch();
        $stmt->close();

        if (isset($_POST['submit'])) {
            $number = $_POST['numbers'];
            //echo "<fieldset> <legend> Recipient </legend>";
            echo $number;
            //echo " </fieldset>";
        }
        ?>


    </div>
    <script src="script.js"></script>

</body>

</html>