<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Log In</title>
        <!--Google Font-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
       
        <!--Stylesheet-->
        <link href="login.css" rel="stylesheet" type="text/css">
    </head>

<body>
    <div class="container">

        <form method="post" action="authenticate.php">

            <h2> Perpetual Help Medical Center - Las Piñas Hospital </h2>
            <br><br>
            <label for="username">
					<i class="fas fa-user"></i>
            </label>
            <input type="login" placeholder="Username" id="username" name="login" required>
            <br><br>
            <label for="password">
					<i class="fas fa-lock"></i>
			</label>
            <input type="password" placeholder="Password" id="password" name="password" required>
            <br><br>
            <br><br>
            <input type="submit" value="Login">

    </div>
    </form>
</body>

</html>