<?php   require_once('../plantillas/cabecera.php'); ?>

<article>
    <h2>Listado de vehículos </h2>

     <table class="table table-striped table-bordered table-hover align-middle">
         <thead class="table-dark">
            <tr>
                <th>Matricula</th>
                <th>Marca/th>
                <th>Modelo</th>
                <th>CTipo</th>
                <th>Color</th>
                <th>Fecha_Matriculacion</th>
                <th>Cilindrada</th>
                <th>Itv_pasada</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>

         <tbody>
            <?php
            if (isset($_POST['filtrar'])) {
                $matricula = $_POST['matricula'];
                $consulta="SELECT * FROM vehiculos WHERE matricula like '%".$matricula."%'";
            } else {
                $consulta ="SELECT * FROM vehiculos";
            }
            if (isset($_POST['filtrar'])) {
                $itv_pasada = $_POST['itv_pasada'];
                $consulta = "SELECT * FROM vehiculos WHERE itv_pasada = 1";
            }

             $filas = mysqli_query($conexion, $consulta);

              while(($fila = mysqli_fetch_array($filas))==true){
                echo "<tr>\n";
                echo "<td> ".$fila['matricula']." </td>\n";
                echo "<td> ".$fila['marca']." </td>\n";
                echo "<td> ".$fila['modelo']." </td>\n";
                echo "<td> ".$fila['tipo']." </td>\n";
                echo "<td> ".$fila['color']. " </td>\n";
                echo "<td> ".$fila['fecha_matriculacion']. " </td>\n";
                echo "<td> ".$fila['cilindrada']. " </td>\n";
                echo "<td> ".$fila['itv_pasada']. " </td>\n";
                echo "<td><a href='editar.php?id=".$fila['matricula']."' class='btn btn-primary'>Editar</a></td>\n";
                echo "<td><a href='borrado.php?id=".$fila['matricula']."' class='btn btn-primary'>Eliminar</a></td>\n";
                echo "</tr>\n";
                
            }

        ?>     
        </tbody>
    </table>

    <div class="mensaje">
        <?php 
            if (isset($_SESSION['mensaje'])) {
                echo $_SESSION['mensaje'];
                unset($_SESSION['mensaje']);
            }
            ?>
    </div>

    <form action="listado.php" method="post">
        <label for="fecha_matriculacion">Filtrar por Feha de Matriculacion: </label>
        <input type="date" name="fecha_matriculacion" id="fecha_matriculacion">

        <input type="submit" name='filtrar' value="Filtrar">
        <a href="listado.php">Limpiar filtro</a>
    </form>
    

</article>

<?php   require_once('../plantillas/pie.php'); ?>