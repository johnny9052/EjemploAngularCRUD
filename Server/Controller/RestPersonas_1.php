<?php

include '../Model/clsLoguin.php';
include '../DAO/loguinDAO.php';

/* Capturamos el tipo de la peticion: podría ser get, post, put o delete. */
$method = $_SERVER['REQUEST_METHOD'];
// Se obtiene la URI
$resource = $_SERVER['REQUEST_URI'];


session_start();

$loguin = new clsLoguin($usuario, $password);
$conex = new loguinDAO();


// Dependiendo del método de la petición ejecutaremos la acción correspondiente.
switch (strtolower($method)) {
    /* Buscar o Listar */
    case 'get':

        $id = (isset($_GET['id']) ? $_GET['id'] : "");

        if ($id != "") {
            //Buscar
        } else {
            //Listar
        }

        //echo '[{"id":"' . $id . '"}]';
        echo '[{"id":"ole"}]';

        break;

    case 'post':

        $data = $_POST;
        $data = json_encode($data);

        echo $data;

        break;


    case 'put':

        /* Modificar */
        $id = (isset($_GET['id']) ? $_GET['id'] : "");
        parse_str(file_get_contents("php://input"), $post_vars);
        echo json_encode($post_vars) . ' y su id es ' . $id;

        break;

    case 'delete':
        $id = (isset($_GET['id']) ? $_GET['id'] : "");
        echo 'El id es: ' . $id;
        break;
}
