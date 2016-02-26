<?php

    if(!empty($_POST['email']) && !empty($_POST['password'])):
        echo $_POST['email'];
        die();
endif;

?>
    <!doctype html>
    <html lang="en">

    <head>
    </head>

    <body>
        <form action="" method="post">

            <input type="text" placeholder="Enter your email here." name="Email">
            <input type="password" placeholder="Enter your password here." name="Password">

            <input type="submit">

        </form>
    </body>

    </html>