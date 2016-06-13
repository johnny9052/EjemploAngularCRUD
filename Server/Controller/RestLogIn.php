<?php

include '../Model/clsLoguin.php';
include '../DAO/loguinDAO.php';

/* Capturamos el tipo de la peticion: podría ser get, post, put o delete. */
$method = $_SERVER['REQUEST_METHOD'];
// Se obtiene la URI
$resource = $_SERVER['REQUEST_URI'];

// Dependiendo del método de la petición ejecutaremos la acción correspondiente.
switch (strtolower($method)) {

    case 'post':

        /* Se pasa de POST a Strig JSON, y luego a un array */
        $data = json_decode(json_encode($_POST));
        $loguin = new clsLoguin($data->usuario, $data->password);
        $conex = new loguinDAO();

        if ($conex->loguear($loguin)) {
            $nombreUsuario = $conex->loguear($loguin); //Datos que permaneceran durante la sesion del usuario   

            /* Se manda codificado el nombre de las variables de sesion, con 
              el fin de que no quede quemado en el js, evitando posibles
              ataques */
            echo json_encode(array(
                /* Valor que indica que el proceso fue satisfactorio */
                'status' => true,
                /* Nombre de la variable de sesion que indica qu ese inicio sesion */
                'nameSesion' => 'sesion',
                /* Valor de la variable de sesion que indica que se inicio sesion */
                'valueSesion' => true,
                /* Nombre de la variable de sesion que almacena el nombre del usuario */
                'nameSesionUser' => 'nameUser',
                /* Valor de la variable de sesion que almacena el nombre del usuario */
                'namevalueSesionUser' => $nombreUsuario,
                'redirect' => 'masterPage.php'));
        } else {
            echo "El usuario no existe";
        }

        break;

    default :
        echo "Error en la operacion";
        break;
}
