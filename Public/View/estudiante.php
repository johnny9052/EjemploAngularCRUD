<form name="formEstudiante">
    <table>
        <tr>
            <td colspan="2">
                <input type="text" id="txtId" style="display: none" 
                       ng-model="estudiante.id">
            </td>
        </tr>
        <tr>                
            <td>
                <label>Codigo</label>                        
            </td>
            <td>
                <input type="text" id="txtCodigo" ng-model="estudiante.codigo" 
                       required>
            </td>

            <td style="width: 100px">

            </td>

            <td rowspan="10">
                <table id="listObjectadoEstudiantes" border="1">             

                    <tr>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Cedula</th>
                        <th>Edad</th>
                        <th>Semestre</th>
                    </tr>

                    <!-- Recorre el listObjectado de tareas, y por cada elemento incrusta
                el codigo que se encuentra dentro del LI-->
                    <tr ng-repeat="obj in estudiantes">
                        <td>
                            {{obj.codigo}}
                        </td>
                        <td>
                            {{obj.nombre}}
                        </td>
                        <td>
                            {{obj.apellido}}
                        </td>
                        <td>
                            {{obj.cedula}}
                        </td>
                        <td>
                            {{obj.edad}}
                        </td>
                        <td>
                            {{obj.semestre}}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <label>Nombre</label>                        
            </td>
            <td>
                <input type="text" id="txtNombre" ng-model="estudiante.nombre" 
                       required>
            </td>
        </tr>
        <tr>
            <td>
                <label>Apellido</label>                        
            </td>
            <td>
                <input type="text" id="txtApellido" ng-model="estudiante.apellido" 
                       required>
            </td>
        </tr>
        <tr>
            <td>
                <label>Cedula</label>                        
            </td>
            <td>
                <input type="text" id="txtCedula" ng-model="estudiante.cedula" 
                       required>
            </td>
        </tr>
        <tr>
            <td>
                <label>Edad</label>                        
            </td>
            <td>
                <input type="text" id="txtEdad" ng-model="estudiante.edad" 
                       required>
            </td>
        </tr>
        <tr>
            <td>
                <label>Semestre</label>                        
            </td>
            <td>
                <input type="text" id="txtSemestre" ng-model="estudiante.semestre" 
                       required>
            </td>
        </tr>
        <tr>
            <td>
            </td>
            <td>
                <input type="button" value="Guardar" id="btnGuardar" 
                       ng-click="saveObject(formEstudiante.$valid,'save')">
                <input type="button" value="Buscar" id="btnBuscar" 
                       ng-click="searchObject()">                    
            </td>
        </tr>
        <tr>
            <td>

            </td>
            <td>
                <input type="button" value="Modificar" id="btnModificar" 
                       ng-click="saveObject(formEstudiante.$valid,'update')">
                <input type="button" value="Eliminar" id="btnEliminar" 
                       ng-click="deleteObject()">
            </td>
        </tr>     
    </table>
</form>