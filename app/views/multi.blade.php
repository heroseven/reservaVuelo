<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <!-- CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/darkly/bootstrap.min.css">
    <link rel="stylesheet" href="multiStep/style.css">
    
    <!-- JS -->
    <!-- load angular, nganimate, and ui-router -->
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.2.10/angular-ui-router.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular-animate.min.js"></script>
    <script src="multiStep/app.js"></script>
    
</head>
<body ng-app="formApp">

<!-- views will be injected here -->
<div class="container">
    <div ui-view></div>
</div>

<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
    <div class="jumbotron text-muted text-center">
        <p>a tutorial by <a href="http://scotch.io" target="_blank">scotch.io</a></p>
        <p><a href="http://scotch.io/tutorials/javascript/angularjs-multi-step-form-using-ui-router">Create a Multi-Step Form Using Angular and UI-Router</a></p>
    </div>
    </div>
</div>

</body>
</html>