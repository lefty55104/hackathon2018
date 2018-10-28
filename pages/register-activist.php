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

        <div class="page-wrapper inner-page">

            <h2>Continue Your Signup</h2>

            <form action="../process-forms/user-submit.php" method="POST">
                <div class="input-wrapper">
                    <label for="first_name">Your First Name:</label> <input id="first_name" type="text" name="first_name"><br />
                </div>
                <div class="input-wrapper">
                    <label for="first_name">Your Last Name:</label> <input id="last_name" type="text" name="last_name"><br />
                </div>
                <div class="input-wrapper">
                    <label for="email">Your Email:</label> <input id="email" type="text" name="email"><br />
                </div>
                <?php $postvalue = $_POST['interests'];
                foreach($postvalue as $value) {
                    echo '<input type="hidden" name="interests[]" value="'. $value. '">';
                } ?>
                
                <div class="submit-wrapper">
                    <input type="submit" value="Complete Signup">
                </div>

            </form>
        </div>
    </div>

</body>
</html>