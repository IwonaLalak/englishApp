/**
 * Created by Iwona on 16.05.17.
 */
angular.module('englishApp')
    .factory('tokenStorage',function () {
       var key = "authorization";
       return{
           setToken: function (token) {
               return localStorage.setItem(key,token);
           },
           getToken: function () {
               return localStorage.getItem(key);
           },
           removeToken: function () {
               return localStorage.removeItem(key);
           }
       }
    });