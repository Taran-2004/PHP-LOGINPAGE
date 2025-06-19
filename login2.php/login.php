<html>
    <head>
        <title>
            this is php
        </title>
    </head>
    <body>
        <form method="post" action="login.php">
            <label for="user">USERNAME :-</label>
            <input placeholder="fill the name" id="user" type="text" name="textuser"/>
            <BR><BR>
            <label for="password">PASSWORD:-</label>
            <input placeholder="fill the password" id="password" type="password" name="textpass"/>
            <BR> <BR><BR>
            <button type="submit" value="submit" name="submitbtn">SUBMIT</button>
            <button type="reset" value="reset">RESET</button>
        </form>
        <?php
           if(isset($_POST['submitbtn'])){
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
           }
            ?>

    </body>
</html>