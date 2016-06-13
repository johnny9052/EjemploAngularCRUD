<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ARCHIVOS MINIMOS NECESARIOS DEL BOWER -->
        <link href="Public/Resources/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="Public/Resources/bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>
        <script src="Public/Resources/bower_components/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="Public/Resources/bower_components/angular/angular.min.js" type="text/javascript"></script>

        <!-- DEPENDENCIAS ADICIONALES ANGULAR -->        
        <!-- ARCHIVO NECESARIO PARA EL MASTER PAGE -->
        <!-- PERMITE HACER EL ENRUTAMIENTO DE URL'S -->
        <script src="Public/Resources/bower_components/angular-route/angular-route.min.js" type="text/javascript"></script>

        <!-- ARCHIVOS PROPIOS -->
        <script src="Public/Resources/app.js" type="text/javascript"></script>


        <!-- ARCHIVOS DEL LOGIN-->
        <script src="Public/Resources/app/logIn/logInCtl.js" type="text/javascript"></script>
        <script src="Public/Resources/app/logIn/logInSer.js" type="text/javascript"></script>


    </head>
    <body ng-app="appPrincipal">
        <!-- Seccion donde se actualizara el contenido definido en el route, 
        especificado con ng-view -->
        <div class="container">            
            <!-- FORMULARIO LOGIN -->
            <form ng-controller="CtlLogIn" name="formLogIn">
                <table  border="0">
                    <tr>
                        <td>
                            <label>Usuario</label>                        
                        </td>
                        <td>
                            <!-- Se asocial el modelo al campo-->
                            <input type="text" id="txtUsuario" name="usuario" 
                                   ng-model="identificacion.usuario" required>
                        </td>                     
                    </tr>

                    <tr>
                        <td>
                            <label>Password</label>                        
                        </td>
                        <td>
                            <input type="password" id="txtPassword" name="password" 
                                   ng-model="identificacion.password" required>
                        </td>                     
                    </tr>

                    <tr>
                        <td>

                        </td>
                        <td>
                            <!-- Se envia por parametro si esta bien diligenciado
                            el formulario o no-->
                            <input type="button" value="Loguin" id="btnLoguin" 
                                   ng-click="logIn(formLogIn.$valid)">                       
                        </td>
                    </tr>
                </table>           
            </form>
            <!--END FORMULARIO LOGIN -->


        </div>
    </body>            
</html>
