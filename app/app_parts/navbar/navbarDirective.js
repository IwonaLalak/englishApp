/**
 * Created by iwona on 28.10.16.
 */

console.log("aaaa");

angular.module('englishApp.englishNavbar', []);
angular.module('englishApp.englishNavbar', [])
    .directive('englishNavbar', function () {
        return {
            restrict: 'AEC',
            templateUrl: 'app_parts/navbar/navbar.php'
        }
    })
    .controller('englishNavbarController',function (validateAccess,tokenStorage,$location,$timeout) {
        var vm = this;

        (function () {
            validateAccess.checkAccess();
        })();

        vm.logOut = function(){
            console.log("login out");
            tokenStorage.removeToken();
            $timeout(function () {
                $location.path("/");
            }, 1000);
        }
    });

/*    .controller('libraryNav', function ($scope, TokenStorage, $location, profileService) {
        $scope.check_if_user_is_logged = function () {
            $scope.user_logged = false;
            if (TokenStorage.retrieve() != undefined) {
                $scope.user_logged = true;
            }
        };
        $scope.check_if_user_is_logged();

        $scope.logout = function () {
            if (TokenStorage.retrieve() != undefined) {
                TokenStorage.clear();
                $scope.user_logged = false;
                $scope.currentUser = "";
                $location.path("/");
            }

        };
        $scope.currentUser = "";

        $scope.admin = function () {
            profileService.getCurrentUser().then(function (data) {
                if (data.username == "admin") {
                    $scope.currentUser = data.username;
                    return data.username;
                }
            });

        };
        $scope.admin();
    });*/



