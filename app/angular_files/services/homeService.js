angular.module('englishApp')
    .service('homeService', homeService);

function homeService($http, $q) {
    var vm = this;

    vm.logIn = function (login, pass) {
        return $q(function (resolve, reject) {
            $http.post("php_files/app_logics/login.php", {
                username: login,
                password: pass
            })
                .success(function (data) {
                    resolve(data);
                })
                .error(function () {
                    reject("error");
                })
        })
    };

    vm.register = function (login, pass, email) {
        return $q(function (resolve, reject) {
            $http.put("php_files/app_logics/register.php", {
                username: login,
                password: pass,
                email: email
            })
                .success(function (data) {
                    resolve(data)
                })
                .error(function () {
                    reject("error")
                })
        })
    }
}