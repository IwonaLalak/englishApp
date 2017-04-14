angular.module('englishApp')
    .controller('homeController', homeController);

function homeController(homeService) {

    var vm = this;

    vm.logIn = function (login,pass) {
        console.log("logje sie: "+login+", "+pass);
        homeService.logIn(login,pass).then(function(data){

            console.log(data);

        });

    };

}

angular.module('englishApp')
    .service('homeService', homeService);

function homeService($http, $q) {
    var vm = this;

    vm.logIn = function(login,pass){
        return $q(function(resolve,reject){
            $http.post("php_files/login.php",{
                username: login,
                password: pass
            })
                .success(function(data){
                    resolve(data);
                })
                .error(function(){
                    reject("error");
                })
        })
    }
}