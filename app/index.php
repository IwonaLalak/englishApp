<?php
/**
 * Created by IntelliJ IDEA.
 * User: Iwona
 * Date: 18.02.17
 * Time: 17:58
 */
?>

<!DOCTYPE html>
<html ng-app="englishApp" lang="en">
<head>
    <meta charset="UTF-8">
    <title>EnglishApp</title>
    <link rel="stylesheet" href="resources/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="resources/flag-icon-css-master/css/flag-icon.css" />
    <link rel="stylesheet" href="css_files/import.css" />
</head>
<body>
<!--
<div class="container">

    <div class="row">
        <div class="col-md-12">
            links:
        </div>
        <div class="col-md-12">
            <a href="#s_words">words</a>
            <a href="#s_tests">tests</a>
            <a href="#main">main</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <script type="text/ng-template" id="app_sites/s_words.php">
            <p>
                <b>words: </b>
                {{message}}
            </p>
            </script>

            <script type="text/ng-template" id="app_sites/s_tests.php">
                <p>
                    <b>tests: </b>
                    {{message}}
                </p>
            </script>


        </div>
    </div>
</div>-->

<div ng-view></div>

</body>

</html>
<script src="resources/jQuery/jQuery.js"></script>
<script src="resources/bootstrap/js/bootstrap.js"></script>
<script src="resources/angular/angular.js"></script>
<script src="resources/angular-route/angular-route.js"></script>
<script src="js_files/main.js"></script>
<script src="app_parts/navbar/navbarDirective.js"></script>
<script src="app_parts/footer/footerDirective.js"></script>
<script src="angular_files/mainController.js"></script>
<script src="angular_files/wordsController.js"></script>
<script src="angular_files/testsController.js"></script>
<script src="angular_files/homeController.js"></script>