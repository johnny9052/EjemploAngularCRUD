<?php

include '../Model/clsEstudiante.php';
include '../DAO/estudianteDAO.php';

/* Capturamos el tipo de la peticion: podría ser get, post, put o delete. */
$method = $_SERVER['REQUEST_METHOD'];
// Se obtiene la URI
$resource = $_SERVER['REQUEST_URI'];

$conex = new estudianteDAO();


// Dependiendo del método de la petición ejecutaremos la acción correspondiente.
switch (strtolower($method)) {
    /* Buscar o Listar */
    case 'get':
        $codigo = (isset($_GET['id']) ? $_GET['id'] : "");

        if ($codigo != "") {
            //Buscar
            $estudiante = new clsEstudiante(null, $codigo, null, null, null, null, null);
            $conex->buscar($estudiante);
        } else {
            //Listar
            $conex->listar();
        }
        break;

    case 'post':
        /* Se reciben todos los datos por post y se codifican */
        /* Se pasa de POST a Strig JSON, y luego a un array */
        $data = $_POST;
        $data = json_decode(json_encode($_POST));
        $estudiante = new clsEstudiante(null, $data->codigo, $data->nombre, $data->apellido, $data->cedula, $data->edad, $data->semestre);
        $conex->guardar($estudiante);
        break;


    case 'put':
        /* Modificar */
        parse_str(file_get_contents("php://input"), $post_vars);
        /* Se pasa del $post_vars a Strig JSON, y luego a un array */
        $data = json_decode(json_encode($post_vars));
        $estudiante = new clsEstudiante($data->id, $data->codigo, $data->nombre, $data->apellido, $data->cedula, $data->edad, $data->semestre);
        $conex->modificar($estudiante);
        break;

    case 'delete':

        $id = (isset($_GET['id']) ? $_GET['id'] : "");

        if ($id != "") {
            //Buscar
            $estudiante = new clsEstudiante($id, null, null, null, null, null, null);
            $conex->eliminar($estudiante);
        }

        break;
}
