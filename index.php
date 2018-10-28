<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>SoPact - Making an impact through social connection</title>
    
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">


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
                <h1><img class="logo" src="assets/logo.png" alt="SoPact"></h1>
                <h2>Find Your Cause</h2>
                <p>We help you find nonprofits that tackle issues you care about. Make connections with organizations and volunteers. We're making an impact through social connection by matching you with organizations that you care about. Bringing change together.</p>
                <div class="button"><a href="#get-started" class="smoothscroll">Get Started</a></div>
            </div>
        </div>

        <div class="page-wrapper">

            <div id="get-started" class="area-wrapper">
                <h3 id="top-3-message" class="form-notification area-title">Start by selecting your top <span class="amt">3</span> interests</h3>

                <form id="register-interests" action="pages/register-activist.php" method="POST">

                    <div class="input-wrapper">

                        <div class="checkbox-wrapper">
                            <div class="checkbox-inner">
                                <input type="checkbox" name="interests[]" id="animal-rights" value="animal-rights" class="input-box checkbox-max-3"> <label for="animal-rights" class="label-for-check"><span>Animal Rights</span></label>
                            </div>
                        </div>
                        <div class="checkbox-wrapper">
                            <div class="checkbox-inner">
                                <input type="checkbox" name="interests[]" id="gender-equality" value="gender-equality" class="input-box checkbox-max-3"> <label for="gender-equality" class="label-for-check"><span>Gender Equality</span></label>
                            </div>
                        </div>
                        <div class="checkbox-wrapper">
                            <div class="checkbox-inner">
                                <input type="checkbox" name="interests[]" id="housing" value="housing" class="input-box checkbox-max-3"> <label for="housing" class="label-for-check"><span>Housing</span></label>
                            </div>
                        </div>
                        <div class="checkbox-wrapper">
                            <div class="checkbox-inner">
                                <input type="checkbox" name="interests[]" id="poverty" value="poverty" class="input-box checkbox-max-3"> <label for="poverty" class="label-for-check"><span>Poverty</span></label>
                            </div>
                        </div>
                        <div class="checkbox-wrapper">
                            <div class="checkbox-inner">
                                <input type="checkbox" name="interests[]" id="hunger" value="hunger" class="input-box checkbox-max-3"> <label for="hunger" class="label-for-check"><span>Hunger</span></label>
                            </div>
                        </div>
                        <div class="checkbox-wrapper">
                            <div class="checkbox-inner">
                                <input type="checkbox" name="interests[]" id="healthcare" value="healthcare" class="input-box checkbox-max-3"> <label for="healthcare" class="label-for-check"><span>Healthcare</span></label>
                            </div>
                        </div>
                        <div class="checkbox-wrapper">
                            <div class="checkbox-inner">
                                <input type="checkbox" name="interests[]" id="children" value="children" class="input-box checkbox-max-3"> <label for="children" class="label-for-check"><span>Children</span></label>
                            </div>
                        </div>
                        <div class="checkbox-wrapper">
                            <div class="checkbox-inner">
                                <input type="checkbox" name="interests[]" id="performing-arts" value="performing-arts" class="input-box checkbox-max-3"> <label for="performing-arts" class="label-for-check"><span>Performing Arts</span></label>
                            </div>
                        </div>
                        <div class="checkbox-wrapper">
                            <div class="checkbox-inner">
                                <input type="checkbox" name="interests[]" id="environmental-awareness" value="environmental-awareness" class="input-box checkbox-max-3"> <label for="environmental-awareness" class="label-for-check"><span>Environmental Awareness</span></label>
                            </div>
                        </div>
                    
                    </div>

                    <div class="submit-wrapper">
                        <input type="submit" value="Get Matched">
                    </div>

                </form>
            </div>

            <div class="area-wrapper">
                <!-- <div class="area">
                    <h4>Are you a nonprofit?</h4>
                    <p><a href="register-nonprofit.php">Register your nonprofit to start finding supporters and activists.</a></p>
                </div> -->
                <div class="area">
                    <h4>Already connected? <a href="pages/opportunities.php">Log into your account.</a></h4>
                </div>
            </div>

        </div>
    </div>
	
</body>
</html>