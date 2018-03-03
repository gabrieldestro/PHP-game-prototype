<?php require_once("../connection/connection.php") ?>
<?php
    session_start();

    // Test if the user tried to login
    if ( isset($_POST["submit"]) ) {
        // assign variables        
        $unsafe_username = $_POST["username"];
         $unsafe_pwd      = $_POST["pwd"];
        
        // prevents sql injection
        $safe_username = mysqli_real_escape_string ($connect, $unsafe_username);
        $safe_pwd      = mysqli_real_escape_string ($connect, $unsafe_pwd);
    
        // tries to execute query
        $login  = "SELECT * FROM users ";
        $login .= "WHERE username='{$safe_username}' and pwd='{$safe_pwd}' "; 
        $acess  = mysqli_query($connect, $login);
        // test query
        if (!$acess) {
            die("Fail to execute query.");
        }
        $info = mysqli_fetch_assoc($acess);
        // validate info
        if ( empty($info) ) {
            $message = "Wrong username or password.";
        } else {
            $_SESSION["user_portal"] = $info["userID"];
            header("location:home.php");
        }
    }
?>

<html>
    <head>
        <title>Login Game</title>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="resources/css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="resources/css/general.css">
        <link rel="stylesheet" href="resources/css/login.css">
    </head>
    
    <body>    
        <div class="container">
            <div class="row">
                <div class="login col-md-4">
                    <div class="text-center">
                        <h2>Game Title</h2>
                        <p>Realize o login</p>
                    </div>
                    <form action="login.php" method="post">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Insert username" required>
                        </div>
                        <div class="form-group">
                            <label for="pwd">password</label>
                            <input type="password" name="pwd" id="pwd" class="form-control" placeholder="Insert password" maxlength="10" required>
                        </div>
                        <?php if ( isset($message) ) { ?>
                            <div id="loginFailed"><p><?php echo $message ?></p></div>
                        <?php } ?>
                        <input type="submit" name="submit" id="btnLogin">
                    </form>
                </div>
            </div>
        </div>   
        
        <script src="resources/js/jquery/jquery.js"></script>
        <script src="resources/js/bootstrap/bootstrap.min.js"></script>
    </body>
</html>