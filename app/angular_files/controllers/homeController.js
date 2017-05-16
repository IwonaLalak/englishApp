angular.module('englishApp')
    .controller('homeController', homeController);

function homeController(homeService, $location, $timeout, tokenStorage, validateAccess) {

    (function(){
        validateAccess.checkAccess();
    })();

    var vm = this;

    vm.logIn = function (login, pass) {

        $("#login_message").removeClass("alert alert-danger alert-success").text("").fadeIn();

        homeService.logIn(login, pass).then(function (data) {
            console.log(data);
            if (!data[0]) {
                // login failed
                $("#login_message").addClass("alert alert-danger").text(data[1]).delay(1500).fadeOut();
            }
            else {
                $("#login_message").addClass("alert alert-success").text(data[1]).delay(1500).fadeOut();
                tokenStorage.setToken(data[2]);
                setTimeout(function () {
                    $("#loginModalArea").modal("toggle");
                    $timeout(function () {
                        $location.path("main");
                    }, 1200);
                }, 3000);
            }
        });

    };

    vm.register = function (login, pass, email) {

        $("#register_message").removeClass("alert alert-danger alert-success").text("").fadeIn();

        homeService.register(login, pass, email).then(function (data) {
            console.log(data);
            if (!data[0]) {
                // register failed
                $("#register_message").addClass("alert alert-danger").text(data[1]).delay(1500).fadeOut();
            }
            else {
                $("#register_message").addClass("alert alert-success").text(data[1]).delay(1500).fadeOut();

                setTimeout(function () {
                    $("#registerModalArea").modal("toggle");
                    $timeout(function () {
                        $("#loginModalArea").modal("toggle");
                    }, 1200);
                }, 3000);
            }
        })
    };

    // to check
    vm.tryToGetToken = function(){
      console.log(tokenStorage.getToken());
    }

}