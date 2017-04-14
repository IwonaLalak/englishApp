angular.module('englishApp')
    .controller('testsController', testsController);

function testsController($scope) {
    $scope.message = "to jest sekcja tests";

}
