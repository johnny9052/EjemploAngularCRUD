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


        <!-- ARCHIVOS ADMINISTRACION SESION -->
        <script src="Public/Resources/app/logIn/logInCtl.js" type="text/javascript"></script>
        <script src="Public/Resources/app/logIn/logInSer.js" type="text/javascript"></script>
        <!-- END ARCHIVOS ADMINISTRACION SESION -->

        <!-- ARCHIVOS MODULO ESTUDIANTE -->
        <script src="Public/Resources/app/estudiante/estudianteCtl.js" type="text/javascript"></script>
        <script src="Public/Resources/app/estudiante/estudianteInSer.js" type="text/javascript"></script>
        <!-- END ARCHIVOS MODULO ESTUDIANTE -->
    </head>

    <!-- Se asocia el controlador y el ngshow para validar si se debe mostrar
     o no el masterPage, teniendo en cuenta si se ha iniciado sesion-->
    <body ng-app="appMasterPage" ng-controller="CtlValidate" ng-show="sesion">


        <!-- MENU -->        
        <div ng-include="'Public/View/template/menu.php'"></div>
        <!-- END MENU -->

        <hr>

        <!-- MASTER PAGE -->
        <div ng-view></div>
        <!-- END MASTER PAGE -->


        <hr>

        <!-- FOOTER -->
        <div ng-include="'Public/View/template/footer.php'"></div>
        <!-- END FOOTER -->
    </body>
</html>
