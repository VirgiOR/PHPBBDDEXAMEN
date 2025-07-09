<?php
require_once('../plantillas/cabecera.php');
?>

<h2>Registrar un vehículo</h2>

 <form action="insertar.php" method="post">
    <div  class="control mb-3">
            <label for="matricula" class="col-sm-2 col-form-label">Matricula:</label>
            <input type="text" name="matricula" id="matricula" required class="form-control">
    </div>

    <div  class="control mb-3">
            <label for="marca" class="col-sm-2 col-form-label">Marca:</label>
            <input type="text" name="marca" id="marca" required class="form-control">
    </div>

    <div  class="control mb-3">
            <label for="modelo" class="col-sm-2 col-form-label">Modelo:</label>
            <input type="text" name="modelo" id="matricula"  required class="form-control">
    </div>

    <div  class="control mb-3">
            <label for="tipo"class="col-sm-2 col-form-label">Tipo:</label>
            <select name="tipo" id="tipo" class="form-select form-select-lg">
                <option value="TURISMO">Turismo</option>
                <option value="FURGON">Furgón</option>
                <option value="AUTOBUS">Autobus</option>
            </select>
        </div>

         <div  class="control mb-3">
            <label for="color" class="col-sm-2 col-form-label">Color:</label>
            <input type="text" name="color" id="color"  class="form-control">
        </div>

         <div class="control mb-3">
            <label for="fecha_matriculacion" class="col-sm-2 col-form-label">Fecha Matriculacion:</label>
            <input type="date" name="fecha_matriculacion" id="fecha_matriculacion" class="form-control">
        </div>

          <div  class="control mb-3">
            <label for="cilindrada"class="col-sm-2 col-form-label">Cilindrada:</label>
            <input type="text" name="cilindrada" id="cilindrada"  class="form-control">
        </div>

        <div  class="control mb-3">
            <label for="itv_pasada" class="col-sm-2 col-form-label">Itv_pasada:</label>
            <input type="checkbox" name="itv_pasada" id="itv_pasada" checked>
        </div>

        <div  class="control mb-3">
            <input type="submit" value="Añadir Vehículo"   class="btn btn-primary">
        </div>

         </form>
</article>

<?php
require_once('../plantillas/pie.php');
?>






    



    





