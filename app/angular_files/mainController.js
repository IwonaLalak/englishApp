angular.module('englishApp')
    .controller('mainController', mainController);

function mainController(mainService,$scope) {

    $scope.currentSection = "none";
    $scope.changeSection = function(choosen){
        $scope.currentSection = choosen;
    };


    var vm = this;
    vm.users = [];

        vm.users.push({
            firstname: "iwa",
            surname: "lalak",
            number: 1212111221
        });
        vm.users.push({
            firstname: "adam",
            surname: "adada",
            number: 21122121
        });

    console.log(vm.users);

    console.log(vm.users[0].firstname);

    vm.doSomething = function () {

        mainService.getWords().then(function(data){
            $('#areaForSomething').html(data);

            vm.users = data ;

            console.log(data);

        });

    };

}

angular.module('englishApp')
    .service('mainService', mainService);

function mainService($http, $q) {
    var vm = this;

    vm.getWords = function(){
        return $q(function(resolve,reject){
            $http.get("php_files/maintest.php")
                .success(function(data){
                    resolve(data);
                })
                .error(function(){
                    reject("error");
                })
        })
    }
}