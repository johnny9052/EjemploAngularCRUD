/* global app */

/*Toda funcion de controlador debe tener un $scope, que es la referencia a todos
 * los elementos que pertenecen al constrolador*/
/*app.controller(nombre de la funcion)  ($scope, nombre de los servicios a utilizar)*/
app.controller('CtlLogIn', function ($scope,$cookieStore, logInService) {

    $scope.sesion = $cookieStore.get('sesion');

    /*Se define una funcion en el controlador*/
    $scope.logIn = function () {
        /*Al ser el servicio la llamada por http (funcion asincrona) toca definir
         * promesas con el "then", que se ejecuta unicamente cuando se le retorna
         * un valor valido. Este se ejecuta unicamente cuando el llamado http 
         * consume el REST ("REST" es un paradigma, mientras"RESTful" describe el 
         * uso de ese paradigma*/
        logInService.logIn($scope.usuario, $scope.password).then(function (response) {
            /*El resultado de la promesa se recibe por parametro*/
            alert(response);
            $scope.password = response;            
        });
    };


    /*Se define una funcion para agregar*/
    $scope.logOut = function () {

    };

});






