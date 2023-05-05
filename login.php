<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <link href="login.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="container">
        <form action="authenticate.php" method="post">
            <br><br><br><br><br><br>
            <h2> Perpetual Help Medical Center - Las Piñas Hospital </h2>
            <br><br>
            <input type="login" name="username" placeholder="Username" id="username" required>
            <br><br>
            <input type="password" name="password" placeholder="Password" id="password" required>
            <br><br>
            <br><br>
            <input type="submit" value="Login">
        </form>
    </div>
</body>

</html>