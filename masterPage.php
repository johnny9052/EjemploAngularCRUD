<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

        <!-- ARCHIVOS MINIMOS NECESARIOS DEL BOWER -->
        <link href="Public/Resources/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="Public/Resources/bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>
        <script src="Public/Resources/bower_components/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="Public/Resources/bower_components/angular/angular.min.js" type="text/javascript"></script>

        <!-- DEPENDENCIAS ADICIONALES ANGULAR -->        
        <!-- ARCHIVO NECESARIO PARA EL MASTER PAGE -->
        <!-- PERMITE HACER EL ENRUTAMIENTO DE URL'S -->
        <script src="Public/Resources/bower_components/angular-route/angular-route.min.js" type="text/javascript"></script>
        <!-- ARCHIVO NECESARIO PARA LA GESTION DE COOKIES -->            
        <script src="Public/Resources/bower_components/angular-cookies/angular-cookies.min.js" type="text/javascript"></script>
        <!-- ARCHIVO NECESARIO PARA CONSUMO REST (ES MEJOR POR HTTP) -->
        <script src="Public/Resources/bower_components/angular-resource/angular-resource.min.js" type="text/javascript"></script>

        <!-- ARCHIVOS PROPIOS -->
        <script src="Public/Resources/appMasterPage.js" type="text/javascript"></script>

    </head>

    <body ng-app="appMasterPage">

        <h1>Entramos carajo!</h1>
        
        <!-- MASTER PAGE -->
        <div ng-view>

        </div>
        <!-- END MASTER PAGE -->

    </body>
</html>
