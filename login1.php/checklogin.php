<html>
    <head>
        <title>
            checklogin
        </title>
    </head>
    <body>
        <center>
            <?php 
            $USER=$_POST['textuser'];
            $PASS=$_POST['textpass'];
            echo $USER;
            echo "<br>";
            echo $PASS;
            $USERNAME="admin";
            $PASSWORD="admin123";
            if(strcmp($USER,$USERNAME)==0 && strcmp($PASS,$PASSWORD)==0){
                echo "<h1>Login Successful</h1>";
            }else{
                echo "<h2>invalid</h2>";
            }
            ?>
        </center>
    </body>
</html>