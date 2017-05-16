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