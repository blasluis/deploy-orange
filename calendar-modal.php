	<!-- Modal AGREGAR COMIDA-->
  <div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
			<form class="form-horizontal" method="POST" action="addEvent.php">
				<div class="modal-header" style="border:none;">
					<h4 class="modal-title fw-bolder" style="color:#032D53; font-size:25px" id="myModalLabel">AGREGAR COMIDA</h4>
					<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
					<i class="fas fa-times-circle" style="color:#3C3844;font-size:2vw;"></i></button>
				</div>
				<style>
					label{
						font-size: 16px;
					}
				</style>
				<div class="modal-body">
          <div class="row form-group align-items-center my-3">
            <label for="title" class="col-sm-2 control-label fw-bold">TÍTULO DE LA RECETA</label>
            <div class="col-sm-10 d-flex">
              <input type="text" name="title" class="form-control py-3" id="title" placeholder="Titulo">
            </div>
          </div>
					<div class="row form-group my-3">
            <label for="color" class="col-sm-2 control-label fw-bold align-self-center">COLOR</label>
            <div class="col-sm-10 d-flex">
              <select name="color" class="form-control align-middle py-3" id="color" style="background:url(img/dots.png);
                background-repeat: no-repeat;background-position: 90% 75%;">
                <option value="">Seleccionar</option>
                <option style="color:#0071c5;" value="#0071c5">&#9724; Azul oscuro</option>
                <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquesa</option>
                <option style="color:#008000;" value="#008000">&#9724; Verde</option>						  
                <option style="color:#FFD700;" value="#FFD700">&#9724; Amarillo</option>
                <option style="color:#FF8C00;" value="#FF8C00">&#9724; Naranja</option>
                <option style="color:#FF0000;" value="#FF0000">&#9724; Rojo</option>
                <option style="color:#000;" value="#000">&#9724; Negro</option>
                
                </select>
              </div>
          </div>
					<div class="row form-group align-items-center my-3">
						<label for="start" class="col-sm-2 control-label fw-bold">FECHA INICIAL</label>
						<div class="col-sm-10">
						  <input type="text" name="start" class="form-control" id="start" style="padding-top:10px" readonly>
						</div>
					</div>
					<div class="row form-group align-items-center my-3">
						<label for="end" class="col-sm-2 control-label fw-bold">FECHA FINAL</label>
						<div class="col-sm-10">
						<input type="text" name="end" class="form-control" id="end" style="padding-top:10px" readonly>
						</div>
					</div>
					
				</div>
			<div class="modal-footer" style="border:none;"><a href=""></a>
				<a href="./recetas.php" type="button" class="btn btn-info" style="background: linear-gradient(0deg, rgba(0,10,28,1) 10%, rgba(2,20,97,1) 35%, rgba(7,121,228,1) 90%);
				border:none;color:#ffffff"><img class="" src="img/el_search-alt.png"></img> BUSCAR RECETAS RECOMENDADAS</a>
				<button type="submit" class="btn p-3" style="background: linear-gradient(0deg, rgba(0,10,28,1) 10%, rgba(2,20,97,1) 25%, rgba(7,121,228,1) 90%);
				border:none;color:white">Guardar</button>
			</div>
			</form>
    </div>
  </div>
</div>

<!-- Modal Modificar Evento-->
<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form class="form-horizontal" method="POST" action="editEventTitle.php">
    <div class="modal-header">
      <h4 class="modal-title" id="myModalLabel" style="color:#032D53; font-size:25px">EDITAR COMIDA</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <i class="fas fa-times-circle" style="color:#3C3844;font-size:2vw;"></i>
      </button>
    </div>
    <div class="modal-body">
      <div class="row form-group align-items-center my-3">
        <label for="title" class="col-sm-2 control-label fw-bold">TÍTULO DE LA RECETA</label>
        <div class="col-sm-10 d-flex">
          <input type="text" name="title" class="form-control py-3" id="title" placeholder="Titulo">
        </div>
      </div>
      <div class="row form-group my-3">
        <label for="color" class="col-sm-2 control-label fw-bold align-self-center">COLOR</label>
        <div class="col-sm-10 d-flex">
          <select name="color" class="form-control align-middle py-3" id="color" style="background:url(img/dots.png);
            background-repeat: no-repeat;background-position: 90% 75%;">
            <option value="">Seleccionar</option>
            <option style="color:#0071c5;" value="#0071c5">&#9724; Azul oscuro</option>
            <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquesa</option>
            <option style="color:#008000;" value="#008000">&#9724; Verde</option>						  
            <option style="color:#FFD700;" value="#FFD700">&#9724; Amarillo</option>
            <option style="color:#FF8C00;" value="#FF8C00">&#9724; Naranja</option>
            <option style="color:#FF0000;" value="#FF0000">&#9724; Rojo</option>
            <option style="color:#000;" value="#000">&#9724; Negro</option>
            
            </select>
          </div>
      </div>
        <div class="row form-group my-3"> 
          <div class="col-sm-2"></div>
          <div class="checkbox col-sm-10">
            <label class="text-danger"><input type="checkbox" name="delete"> Eliminar Evento</label>
          </div>
        </div>
      
      <input type="hidden" name="id" class="form-control" id="id">
      
      
    </div>
    <div class="modal-footer" style="border:none">
      <button type="submit" class="btn btn-primary" onclick="saveSuccesfully()">Guardar</button>
    </div>
    </form>
    </div>
  </div>
  </div>