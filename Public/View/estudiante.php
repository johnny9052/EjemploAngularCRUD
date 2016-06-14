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


                <!-- ESTE DIV ENCIERRA TODO, CON EL FIN DE AGRUPAR EL CAMPO 
                DE BUSQUEDA CON LA TABLA QUE LISTA LOS DATOS-->
                <div class="panel panel-primary">

                    <!-- CABECERA QUE CONTENDRA EL INPUT DE BUSQUEDA DE LOS DATOS -->
                    <div class="panel-heading">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-search"></i>
                            </span>
                            <input type="text" class="form-control" 
                                   placeholder="Buscar estudiante" ng-model="buscar">
                            <!-- si el modelo fuera ng-model="buscar.nombre" solo 
                            el filtro utilizado buscaria en el nombre-->
                        </div>                                            
                    </div>
                    <!-- END CAMPO DE BUSQUEDA -->

                    <div class="panel-body">
                        <!-- CON ESTA TABLA SERIA SUFICIENTE SI LO UNICO QUE SE 
                        QUIERE ES LISTAR LOS DATOS-->
                        <table id="listObjectadoEstudiantes" class="table table-striped">             
                            <thead>
                                <tr>
                                    <!-- -nombre (Mandando el menos por parametro
                                        lo ordena de manera descendente), ademas la 
                                        clase caret pone una flechita-->
                                    <th style="cursor: pointer;">                                    
                                        <a ng-click="ordenarPor('codigo')">Codigo</a>
                                        <a class="caret" ng-click="ordenarPor('-codigo')"></a>
                                    </th>
                                    <th style="cursor: pointer;">                                    
                                        <a ng-click="ordenarPor('nombre')">Nombre</a>
                                        <a class="caret" ng-click="ordenarPor('-nombre')"></a>
                                    </th>
                                    <th style="cursor: pointer;">                                    
                                        <a ng-click="ordenarPor('apellido')">Apellido</a>
                                        <a class="caret" ng-click="ordenarPor('-apellido')"></a>
                                    </th>
                                    <th style="cursor: pointer;">                                    
                                        <a ng-click="ordenarPor('cedula')">Cedula</a>
                                        <a class="caret" ng-click="ordenarPor('-cedula')"></a>
                                    </th>
                                    <th style="cursor: pointer;">                                    
                                        <a ng-click="ordenarPor('edad')">Edad</a>
                                        <a class="caret" ng-click="ordenarPor('-edad')"></a>
                                    </th>
                                    <th style="cursor: pointer;">                                    
                                        <a ng-click="ordenarPor('semestre')">Semestre</a>
                                        <a class="caret" ng-click="ordenarPor('-semestre')"></a>
                                    </th>
                                </tr>
                            </thead>

                            <!-- Recorre el listObjectado de tareas, y por cada elemento incrusta
                        el codigo que se encuentra dentro del LI-->
                            <tbody>
                                <tr ng-repeat="obj in estudiantes| orderBy:ordenSeleccionado | filter:buscar">
                                    <td>
                                        {{obj.codigo}}
                                    </td>
                                    <td>
                                        {{obj.nombre| uppercase}}
                                    </td>
                                    <td>
                                        {{obj.apellido| uppercase}}
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
                            </tbody>
                        </table>
                    </div>
                </div>
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
                       ng-click="saveObject(formEstudiante.$valid, 'save')">
                <input type="button" value="Buscar" id="btnBuscar" 
                       ng-click="searchObject()">                    
            </td>
        </tr>
        <tr>
            <td>

            </td>
            <td>
                <input type="button" value="Modificar" id="btnModificar" 
                       ng-click="saveObject(formEstudiante.$valid, 'update')">
                <input type="button" value="Eliminar" id="btnEliminar" 
                       ng-click="deleteObject()">
            </td>
        </tr>     
    </table>
</form>