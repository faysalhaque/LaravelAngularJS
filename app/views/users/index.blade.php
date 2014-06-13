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

    <div ng-controller="registracija" >
        <form novalidate>
        {{ Form::label('email') }}
        <br/>
        <input type="text" ng-model="user.email" />
        <br/>
        {{ Form::label('first_name') }}
        <br/>
        <input type="text" ng-model="user.first_name" />
        <br/>
            {{ Form::label('last_name') }}
            <br/>
            <input type="text" ng-model="user.last_name" />
            <br/>
        {{ Form::label('password') }}
        <br/>
        <input type="text" ng-model="user.password" />
        <br/>
            <button ng-click="registruj()" > Registruj </button>
        </form>
        @{{ user }}

        @{{ svi }}
    </div>

</div>

@stop