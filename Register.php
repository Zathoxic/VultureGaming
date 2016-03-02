<?php

require 'dbconnect.php';



if(isset($_POST['Name'])){
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
        // Enter the new user in the DB
        $sql = mysql_query("INSERT INTO `users`(`Username`, `Password`, `Email`) VALUES ('$name', '$password', '$email')");

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
    <!doctype html>
    <html lang="en">

    <head>
    </head>

    <body>
        <form action="" method="post">

            <input type="text" placeholder="Name" name="Name">
            <input type="password" placeholder="Enter your password here" name="Password">
            <input type="password" placeholder="Confirm your password" name="Confirm_Password">
            <input type="text" placeholder="Enter your email here." name="Email">
            <input type="submit">

        </form>
    </body>

    </html>