<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>SoPact - Making an impact through social connection</title>
    
    <link href="https://fonts.googleapis.com/css?family=Salsa|Bungee+Inline|Open+Sans" rel="stylesheet">


    <link rel="stylesheet" href="assets/main.css" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>

    <script src="assets/process-forms.js"></script>
</head>
<body>

    <div class="site-wrapper">
    
        <div class="header-wrapper">
            <div class="header-inner">
                <h1>SoPact: Find Your Cause</h1>
                <h2>Matching you with organizations that you care about.</h2>
                <p>We help you find nonprofits that tackle issues you care about. Make connections with organizations and volunteers. We're making an impact through social connection.</p>
                <div class="button"><a href="#get-started" class="smoothscroll">Get Started</a></div>
            </div>
        </div>

        <div class="page-wrapper">

            <div id="get-started" class="area-wrapper">
                <h3 id="top-3-message" class="form-notification area-title">Start by selecting your top <span class="amt">3</span> interests</h3>

                <form id="register-interests" action="forms/register-activist.php" method="POST">

                    <div class="input-wrapper">

                        <div class="checkbox-wrapper">
                            <div class="checkbox-inner">
                                <input type="checkbox" name="interests[]" id="animal-rights" value="Animal Rights" class="input-box checkbox-max-3"> <label for="animal-rights" class="label-for-check"><span>Animal Rights</span></label>
                            </div>
                        </div>
                        <div class="checkbox-wrapper">
                            <div class="checkbox-inner">
                                <input type="checkbox" name="interests[]" id="gender-equality" value="Gender Equality" class="input-box checkbox-max-3"> <label for="gender-equality" class="label-for-check"><span>Gender Equality</span></label>
                            </div>
                        </div>
                        <div class="checkbox-wrapper">
                            <div class="checkbox-inner">
                                <input type="checkbox" name="interests[]" id="housing" value="Housing" class="input-box checkbox-max-3"> <label for="housing" class="label-for-check"><span>Housing</span></label>
                            </div>
                        </div>
                        <div class="checkbox-wrapper">
                            <div class="checkbox-inner">
                                <input type="checkbox" name="interests[]" id="poverty" value="Poverty" class="input-box checkbox-max-3"> <label for="poverty" class="label-for-check"><span>Poverty</span></label>
                            </div>
                        </div>
                        <div class="checkbox-wrapper">
                            <div class="checkbox-inner">
                                <input type="checkbox" name="interests[]" id="hunger" value="Hunger" class="input-box checkbox-max-3"> <label for="hunger" class="label-for-check"><span>Hunger</span></label>
                            </div>
                        </div>
                        <div class="checkbox-wrapper">
                            <div class="checkbox-inner">
                                <input type="checkbox" name="interests[]" id="healthcare" value="Healthcare" class="input-box checkbox-max-3"> <label for="healthcare" class="label-for-check"><span>Healthcare</span></label>
                            </div>
                        </div>
                        <div class="checkbox-wrapper">
                            <div class="checkbox-inner">
                                <input type="checkbox" name="interests[]" id="children" value="Children" class="input-box checkbox-max-3"> <label for="children" class="label-for-check"><span>Children</span></label>
                            </div>
                        </div>
                        <div class="checkbox-wrapper">
                            <div class="checkbox-inner">
                                <input type="checkbox" name="interests[]" id="performing-arts" value="Performing Arts" class="input-box checkbox-max-3"> <label for="performing-arts" class="label-for-check"><span>Performing Arts</span></label>
                            </div>
                        </div>
                        <div class="checkbox-wrapper">
                            <div class="checkbox-inner">
                                <input type="checkbox" name="interests[]" id="environmental-awareness" value="Environmental Awareness" class="input-box checkbox-max-3"> <label for="environmental-awareness" class="label-for-check"><span>Environmental Awareness</span></label>
                            </div>
                        </div>
                    
                    </div>

                    <input type="submit" value="Get Matched">

                </form>
            </div>

            <div class="area-wrapper">
                <div class="area">
                    <h4>Are you a nonprofit?</h4>
                    <p><a href="register-nonprofit.php">Register your nonprofit to start finding supporters and activists.</a></p>
                </div>
                <div class="area">
                    <h4>Already connected?</h4>
                    <p><a href="dashboard.php">Log into your account.</a></p>
                </div>
            </div>

        </div>
    </div>
	
</body>
</html>