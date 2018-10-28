<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>SoPact - Making an impact through social connection</title>
    
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">


    <link rel="stylesheet" href="../assets/main.css" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>

    <script src="../assets/process-forms.js"></script>
</head>
<body>

    <div class="site-wrapper">
        
        <?php

            $email = 'testt@test.com';
            // if(isset($_COOKIE['sopact_user']) && $_COOKIE['sopact_user'] != ''){
                
                // $email = $_COOKIE['sopact_user']; ?>

                <h3>You're Logged In</h3>
                <p>Your interests:</p>

                <?php define('DB_SERVER', 'sopact-db.c0enhg7bdhdx.us-east-2.rds.amazonaws.com:3306');
                define('DB_USERNAME', 'SOPACT_ADMIN');
                define('DB_PASSWORD', 'SO_HACK102718');
                define('DB_DATABASE', 'SOPACT_ADMIN');
                $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE) or die(mysqli_error());
                $result = mysqli_query($link, "SELECT * FROM `users` WHERE eMail = '$email'");
                while ($row = $result->fetch_assoc()) {
                    // echo $row['Interest1'].", ".$row['Interest2']. ", " . $row['Interest3'] . "</p>";
                } ?>

                <p>Animal Rights</p>
                <p>Poverty</p>
                <p>Children</p>
                
            <?php // } else { ?>

                <!-- <form action="../process-forms/user-login.php" method="POST">
                    <div class="input-wrapper">
                        <label for="email">Enter Your Email To Log In:</label> <input id="email" type="text" name="email"><br />
                    </div>
                    <div class="submit-wrapper">
                        <input type="submit" value="Log In">
                    </div>
                </form>
                <a href="../index.php">Or Sign Up</a> -->

            <?php // }
        ?>
    </div>
</body>
</html>