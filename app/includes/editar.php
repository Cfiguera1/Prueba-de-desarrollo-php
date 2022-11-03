<?php ?>
            <!-- Modal Editar-->
            <div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar datos</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      
      <form id="editar">

      <div class="modal-body">
        
          
        <input type="hidden" id="txtId2" name="txtId2">
          <h3>Nombre del valor</h3>
          <select class="form-select" required aria-label="nombreIndicador2" id="combo3">
            <option selected disabled value="">Nombre de Indicador</option>
          </select>
          <br>


          <h3>Valor en codigo</h3>
          <input  class="form-control" required aria-label="valorIndicador2" id="combo4">

          <br>
         
          <h3>Unidad de Medida</h3>


          <div class="form-check">
            <input class="form-check-input" type="radio" value="Pesos"  name="checkU2" id="checkPesos" required>
            <label class="form-check-label" for="checkPesos">
              Pesos
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" value="Dólar" name="checkU2" id="checkDolar"  required>
            <label class="form-check-label" for="checkDolar">
              Dólar
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" value="Porcentaje" name="checkU2" id="checkPorcentaje" required>
            <label class="form-check-label" for="checkPorcentaje">
              Porcentaje
            </label>
          </div> 
          <br>

          <h3>Valor numerico de la moneda</h3>
          <div class="col-3">
            <input type="text" id="valor2" class="form-control" placeholder="Valor" min=".01" step="any" pattern="[0-9]+([\.][0-9]+)?"   onkeypress="return filterFloat(event,this);" aria-label="Valor" required>
          </div> <br>
          <div class="col-4">
          <br>
            <h3>Fecha</h3>
          <input required class="form__input form-control" type="date" id="fecha2"> <br> 
          </div>


          <h3>Tiempo</h3>
          <div class="col-4">
            <input type="text" class="form-control" placeholder="Tiempo" aria-label="Tiempo" id="tiempo2"> <br>
          </div>
          <h3>Origen</h3>
          <div class="col-4">
            <input required type="text" class="form-control" placeholder="Origen" id="origen2" aria-label="Origen de la información"> <br>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Confirmar</button>
      </div>
    </form>
    </div>
  </div>
</div>

<!-- Modal Eliminar-->
<div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmacion</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Seguro de Eliminar el registro seleccionado?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" id="del" name="del" class="btn btn-danger">Eliminar</button>
      </div>
    </div>
  </div>
</div>
</div>
