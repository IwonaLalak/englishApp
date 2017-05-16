angular.module('englishApp', [
        'ngRoute',
        'englishApp.englishNavbar',
        'englishApp.englishFooter'


    ])

   .config(function ($routeProvider) {
        $routeProvider
            .when("/", {
                templateUrl: "app_sites/home.php",
                controller: "homeController",
                controllerAs: "vm"
            })
           /* .when("/login", {
                templateUrl: "app_sites/login.php"
               // controller: "loginController",
               // controllerAs: "vm"
            })
            .when("/register", {
                templateUrl: "app_sites/register.php"
                //controller: "registerController",
               // controllerAs: "vm"
            })*/

            .when("/words", {
                templateUrl: "app_sites/words.php",
                controller: "wordsController"
                //controllerAs: "vm"
            })

            .when("/tests", {
                templateUrl: "app_sites/tests.php",
                controller: "testsController",
                controllerAs: "vm"
            })


            .when("/main", {
                templateUrl: "app_sites/main.php",
                controller: "mainController",
                controllerAs: "vm"
            })
            .otherwise('/');


        /*    .when("/profile", {
                templateUrl: "app/profile/profile.html",
                controller: "profileController",
                controllerAs: "vm"
            })
            .when("/panel", {
                templateUrl: "app/panel/panel.html",
                controller: "panelController",
                controllerAs: "vm"
            })
            .when("/users", {
                templateUrl: "app/users/users.html",
                controller: "usersController",
                controllerAs: "vm"
            })
            .when("/user/:id", {
                templateUrl: "app/user/user.html",
                controller: "userController",
                controllerAs: "vm"
            })
            .when("/suggest", {
                templateUrl: "app/suggest/suggest.html",
                controller: "suggestController",
                controllerAs: "vm"
            })*/


    });


