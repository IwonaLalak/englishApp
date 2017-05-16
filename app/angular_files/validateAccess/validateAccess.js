/**
 * Created by Iwona on 16.05.17.
 */

angular.module('englishApp')
    .factory('validateAccess', function ($location, tokenStorage) {
        return {
            checkAccess: function () {
                console.log("current: "+$location.path());
                if (tokenStorage.getToken() == null) { // redirect guests on index page to log or register
                    $location.path("/");
                }
                else if (tokenStorage.getToken() != null && $location.path() == "/") { // redirect logged users from index page to main
                    $location.path("main");
                }

            }
        }

    });