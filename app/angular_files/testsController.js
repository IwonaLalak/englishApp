angular.module('englishApp')
    .controller('testsController', testsController);

function testsController($scope) {
    $scope.message = "to jest sekcja tests";

    var vm = this;

    vm.selectAllTags = function(){
        console.log("Aaaa");
        /*$(".checkbox").prop('checked', true);*/
        $("#selectAllTags").text("Select all");

        var chbox = $('.checkbox');

        if(chbox.prop('checked')==true){
            chbox.each(function(){
                chbox.prop('checked', false);
            })
        }else{
            chbox.each(function(){
                chbox.prop('checked', true);
            });
            $("#selectAllTags").text("Unselect");
        }

    }
}