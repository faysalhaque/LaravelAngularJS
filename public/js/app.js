/**
 * Created by emir on 6/13/14.
 */

var app = angular.module('emir' , []);

app.controller('Korisnici' , function($scope , $http) {
    //$scope.korisnici = users;
    $http.get('api/korisnici').success(function(data) {
        $scope.korisnici = data;
        console.log($scope.korisnici);
    });
});