<!DOCTYPE  html>
<!--cargamos nuestro modulo en la etiqueta html con ng-app-->
<html lang="es" ng-app="app">
<head>
    <meta charset="UTF-8" />
    <title>Combinando Laravel 4 y AngularJS</title>
	{{ HTML::style('piedra/css/normalize.css') }}
	{{ HTML::style('piedra/css/foundation.min.css') }}
</head>
<body>
<a href="#login">login</a>
<a href="#home">home</a>
	<!--creamos el div con la directiva ng-view, aquí será donde
	carguen todas las vistas-->
	<div class="row" ng-view></div>
	  <!--cdn con la version 1.2.4 de angular.js-->
  <script type='text/javascript' src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.4/angular.min.js"></script>
  <!--cdn con el modulo ngRoute de angular-->
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0rc1/angular-route.min.js"></script>
	{{ HTML::script('piedra/js/app.js') }}
	{{ HTML::script('piedra/js/controllers.js') }}
</body>
</html>