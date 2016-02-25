<?php
    
    $conn = mysql_connect("localhost", "root", "usbw") or die("There was a problem connecting you to our server(s)");
    
    mysql_select_db("vulturelogin", $conn) or die ("There was a problem connecting you to our database(s)");

echo "
    <body style='font-family: veranda, sans-serif;'>
    <div class='login' style='width: 25%; padding: 5px 5px 5px; border: 1px solid #e3e3e3; background-color: #fff; color:#000; margin-left: auto; margin-right: auto;' 
    
    <h1><b>Login</b></h1>
    <br />
    <form action='' method='post' style='text-align:center;'>
        <table>
            <tr>
                <td>
                    <b>Username:</b>
                </td>
                <td>
                    <input type='text' name='username' style='padding: 4pxl; text-align: center;' />
                </td>
            </tr>
            <tr>
                <td>
                    <b>Password:</b>
                </td>
                <td>
                    <input type='password' name='password' style='padding: 4pxl' />
                </td>
            </tr>
            <tr>
                <td>
                    <input type='submit' value='Login' />
                </td>
            </tr>
        </table>
    </form>
    </div>
</body>
 ";
?>