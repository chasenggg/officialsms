<?php
require_once("./database/connection.php");

if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if (!isset($_POST['username'], $_POST['password'])) {
    exit('Please fill both the username and password fields!');
}

if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')) {
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();

        if (password_verify($_POST['password'], $password)) { //password_hash
            //if ($_POST['password'] === $password) {
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            header('Location: home.php');
        } else {

            // $_SESSION['error'] = "Incorrect username and/or password!"
            echo 'Incorrect username and/or password!';

       }
    } else {

        // $_SESSION['error'] = "Incorrect username and/or password!"
        echo 'Incorrect username and/or password!';
    }
    $stmt->close();

    // header( "Location: login.php" );
}

?>
<HTML>

    <body>
        <br> <br>

        <div class="container login">

        <div class="signin">
            <form action="authenticate.php" method="post">
                <h2> Perpetual Help Medical Center - Las Piñas Hospital </h2>

                <input type="login" name="username" placeholder="Username" id="username" required>

                <input type="password" name="password" placeholder="Password" id="password" required>

                <input type="submit" value="Login">
            </form>
        </div>
        <a class="goback" href="login.php"> Back </a>
    </div>
        

    </body>

</HTML>