<!DOCTYPE html>
<html>

<head>
    <link href="Css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
</head>

<body>
    <div class="Container">
        <div class="Header">
            <img src="Img/VultureLogo.jpg" />
            <p class="Login">Login here:</p>
            <?php
                include 'Login.php'
            ?>
                <p class="Register">Or <a href="Register.php"><b><u><i>REGISTER</i></u></b></a></p>
        </div>
        <div class="LeftContent">

            <div class="Menu">
                <link href="Css/bootstrap.min.css" type="text/css" rel="stylesheet">


                <ul class="nav nav-pills nav-stacked">
                    <li><a href="Index.php">Home</a></li>
                    <li><a href="Players.php">Players</a></li>
                    <li class="active"><a href="Sponsors.php">Sponsors<span class="sr-only">(current)</span></a></li>
                    <li><a href="Form.php">Form</a></li>
                    <li><a href="Help.php">Help and FAQ</a></li>
                </ul>
            </div>
        </div>
        <div class="RightContent">

        </div>
    </div>
</body>

</html>