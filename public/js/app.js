/**
 * Created by emir on 6/13/14.
 */

var app = angular.module('emir' , []);

app.factory('Data' , function() {
    return { korisnici : "" };
})

app.controller('Korisnici' , function($scope , $http , Data) {
    //$scope.korisnici = users;
    $http.get('api/korisnici').success(function(data) {
        $scope.korisnici = data;
        //console.log($scope.korisnici);
    });

    $scope.izbrisi = function(id) {
        $scope.izbrisi_text = id;
    }

});

app.controller('registracija' , function($scope, $http , Data ) {
    $scope.registruj = function() {
        $http({ method: "POST", url: "api/registruj", data: $scope.user });
        $scope.korisnici = $scope.user;
    }
});