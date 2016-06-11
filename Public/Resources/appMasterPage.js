/*Se definen las depenciencias que seran utilizadas por el sistema*/
var app = angular.module("appMasterPage", ['ngRoute', 'ngCookies']);

app.run(function ($rootScope, $window, $cookieStore) {

    if ($cookieStore.get('username') !== "") {
        $window.location.href = 'index.php';
    }

//    $rootScope.$on('$routeChangeStart', function (event, next, current) {
//        if ($cookieStore.get('username') !== "") {
//            //$location.path('/login');
//            alert("No ha iniciado sesion");
//        } else {
//            alert("Inicio sesion");
//        }
//    });
});


/*Se definen las rutas del ng-route, que seran cargadas en el ng-view*/

//app.config(function ($routeProvider) {
//    $routeProvider
//            .when('/', {
//                templateUrl: 'Rutas_Inicio.php'
//            })
//            .when('/tareas', {
//                controller: 'ControladorTareas',
//                templateUrl: 'Rutas_tareas.php'
//            })
//            .when('/empleados', {
//                controller: 'ControladorEmpleados',
//                templateUrl: 'Rutas_empleados.php'
//            })
//            .otherwise({
//                redirectTo: '/'
//            });
//});