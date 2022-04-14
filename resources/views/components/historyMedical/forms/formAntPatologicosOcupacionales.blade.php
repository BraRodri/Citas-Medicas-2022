<div class="row mt-2">
    <div id="antPatologicosOcupacionales">
        <div class="card">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <label for="tipoAfeccion" class="col-md-6 col-form-label text-md-end">Tipo de afección</label>
                        <div class="col-md-6">
                            <input id="tipoAfeccion[]" type="text" class="form-control"
                            name="tipoAfeccion[]" placeholder="Escribe aquí" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <label for="parteCuerpoAfectada[]" class="col-md-6 col-form-label text-md-end">Parte del cuerpo afectada</label>
                        <div class="col-md-6">
                            <input id="parteCuerpoAfectada[]" type="text" class="form-control"
                            name="parteCuerpoAfectada[]" placeholder="Escribe aquí" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-6">
                    <div class="row">
                        <label for="tiempoDeOcurrencia" class="col-md-6 col-form-label text-md-end">Tiempo de ocurrencia</label>
                        <div class="col-md-6">
                            <input id="tiempoDeOcurrencia[]" type="text" class="form-control"
                            name="tiempoDeOcurrencia[]" placeholder="Escribe aquí" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <label for="secuelas[]" class="col-md-6 col-form-label text-md-end">Secuelas</label>
                        <div class="col-md-6">
                            <input id="secuelas[]" type="text" class="form-control"
                            name="secuelas[]" placeholder="Escribe aquí" required>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-2 col-sm-2 col-xs-12">
            <a class="btn btn-success add_button form-control" id="add_antPatologicosOcupacionales">Nuevo Antecedente</a>
        </div>
    </div>
</div>
