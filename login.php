<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <link href="sms.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="container login">
        <form action="authenticate.php" method="post">
            <h2> Perpetual Help Medical Center - Las Piñas Hospital </h2>

            <div class="signin">
                <input type="login" name="username" placeholder="Username" id="username" required>

                <input type="password" name="password" placeholder="Password" id="password" required>

                <input type="submit" value="Login">
        </form>
    </div>

    </div>
</body>

</html>