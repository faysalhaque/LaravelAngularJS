/**
 * Created by emir on 6/13/14.
 */

var app = angular.module('emir' , []);

app.factory('Data1' , function() {
    return {};
})

app.controller('Korisnici' , function($scope , $http , Data1) {
    //$scope.korisnici = users;
    $http.get('api/korisnici').success(function(data) {
        Data1 = data;
        $scope.korisnici = Data1;
        //console.log($scope.korisnici);
        console.log(Data1);
    });
});

app.controller('registracija' , function($scope, $http , Data1) {
    $scope.registruj = function() {
        $http({ method: "POST", url: "api/registruj", data: $scope.user });
        Data1 = $scope.user;
    }
});