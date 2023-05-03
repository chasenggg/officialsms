<head>
    <title> Home </title>
    <!--Google Font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <link rel="stylesheet" href="home.css">
</head>

<body>
    <div class="container">
        <h1> Official SMS </h1>
        <form action="" method="post">

            <input type="number" name="number" onKeyPress="if(this.value.length==11) return false;" id="contact-input">

            <button type="button" class="add button" onclick="addContact()">Add</button>
            <br></br>

            <textarea id="my-text" rows="5" placeholder="Type something here.." required maxlength="160"></textarea>

            <p id="result"></p>

            <input type="hidden" name="numbers" id="hidden-numbers">
            <br></br>

            <input type="submit" name="submit" placeholder="Send here" value="Send" required>
            <br></br>

        </form>

        <a class="goback" href="login.php"> Back </a>

        <?php
        if (isset($_POST['submit'])) {
            $number = $_POST['numbers'];
            echo $number;
        }
        ?>


    </div>
    <script src="script.js"></script>

</body>

</html>