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

<div ng-view></div>

</body>

</html>
<script src="resources/jQuery/jQuery.js"></script>
<script src="resources/bootstrap/js/bootstrap.js"></script>
<script src="resources/angular/angular.js"></script>
<script src="resources/angular-route/angular-route.js"></script>
<script src="angular_files/app_config.js"></script>
<script src="app_parts/navbar/navbarDirective.js"></script>
<script src="app_parts/footer/footerDirective.js"></script>
<script src="angular_files/tokenStorage/tokenStorage.js"></script>
<script src="angular_files/validateAccess/validateAccess.js"></script>
<script src="angular_files/services/mainService.js"></script>
<script src="angular_files/services/homeService.js"></script>
<script src="angular_files/services/wordsService.js"></script>
<script src="angular_files/services/testsService.js"></script>
<script src="angular_files/controllers/mainController.js"></script>
<script src="angular_files/controllers/wordsController.js"></script>
<script src="angular_files/controllers/testsController.js"></script>
<script src="angular_files/controllers/homeController.js"></script>