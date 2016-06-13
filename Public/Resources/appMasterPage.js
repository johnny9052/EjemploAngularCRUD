
/*Se definen las depenciencias que seran utilizadas por el sistema*/
var app = angular.module("appMasterPage", ['ngRoute']);


/*Controlador global, que cada vez que se cargue la pagina masterPage 
 * valida si ya inicio sesion para saber si se deja o se redirecciona 
 * al index*/
app.controller('CtlValidate', function ($scope, $window) {
    /*Se almacena en el modelo sesion, este es utilizado por el ng-show 
     * para saber si muestra o no la interfaz grafica*/

    $scope.sesion = sessionStorage.getItem("sesion");

    /*Luego se valida para saber si se redirecciona o no*/
    if (!$scope.sesion) {
        $window.location.href = 'index.php';
    }
});


/*Se definen las rutas del ng-route, que seran cargadas en el ng-view, ademas
 * desde aqui se asocian los controladores, por lo que no es necesario asociarlos 
 * desde la vista*/
app.config(function ($routeProvider) {
    $routeProvider
            .when('/', {
                templateUrl: 'Public/View/inicio.php'
            })
            .when('/estudiante', {
                controller: 'CtlEstudiante',
                templateUrl: 'Public/View/estudiante.php'
            })
            .otherwise({
                redirectTo: '/'
            });
});