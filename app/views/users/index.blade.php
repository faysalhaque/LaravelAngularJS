@extends('default')
@section('main')

<div class="container" ng-app="emir">

<div ng-controller="Korisnici" >

    <table class="table">
        <thead>
            <tr>
                <th> ID </th>
                <th> Ime </th>
                <th> Prezim </th>
            </tr>
        </thead>

        <tbody>
            <tr ng-repeat="korisnik in korisnici" >
                <td> @{{ korisnik.id }} </td>
                <td> @{{ korisnik.first_name }} </td>
                <td> @{{ korisnik.last_name }} </td>
            </tr>
        </tbody>
    </table>

</div>

</div>

@stop