angular.module('englishApp')
    .service('testsService', testsService);

function testsService($http, $q) {
    var vm = this;

    /*vm.getWords = function(){
        return $q(function(resolve,reject){
            $http.get("php_files/maintest.php")
                .success(function(data){
                    resolve(data);
                })
                .error(function(){
                    reject("error");
                })
        })
    }*/
}