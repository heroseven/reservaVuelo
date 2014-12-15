//creamos el modulo y le inyectamos el modulo ngRoute
var app = angular.module("app", ['ngRoute']);
 
//las rutas siguen trabajando de la misma forma
app.config(function($routeProvider)
{
    $routeProvider.when("/home", {
        templateUrl: "../templates/home.html",
        controller : "homeController"
    })
    .when("/login", {
        templateUrl : "../templates/login.html",
        controller : "loginController"
    })
    .otherwise({ reditrectTo : "/" });
});
 
 

 
app.controller("loginController", function($scope)
{
 
});