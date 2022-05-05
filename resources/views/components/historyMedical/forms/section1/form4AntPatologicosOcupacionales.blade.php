<div class="row mt-2">
    <div id="antPatologicosOcupacionales">
        <div class="card">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <label for="tipoAfeccion" class="col-md-6 col-form-label text-md-end">Tipo de afección</label>
                        <div class="col-md-6">
                            <input id="tipoAfeccion[]" type="text" class="form-control"
                            name="tipoAfeccion[]" placeholder="Escribe aquí" >
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <label for="parteCuerpoAfectada[]" class="col-md-6 col-form-label text-md-end">Parte del cuerpo afectada</label>
                        <div class="col-md-6">
                            <input id="parteCuerpoAfectada[]" type="text" class="form-control"
                            name="parteCuerpoAfectada[]" placeholder="Escribe aquí" >
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
                            name="tiempoDeOcurrencia[]" placeholder="Escribe aquí" >
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <label for="secuelas[]" class="col-md-6 col-form-label text-md-end">Secuelas</label>
                        <div class="col-md-6">
                            <input id="secuelas[]" type="text" class="form-control"
                            name="secuelas[]" placeholder="Escribe aquí" >
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

<div class="row mt-2">
    <div class="d-flex">
        <p style="margin-right: 30px;"><b>Reubicaciones </b></p>
        <div class="text-center">
            <div class="container" style="margin-top: -5px;">
                <div>
                    <label class="switch">
                        <input type="checkbox" id="checkReubicaciones"
                            name="checkReubicaciones" data-bs-toggle="collapse" href="#collapseReubicaciones" role="button" aria-expanded="true" aria-controls="collapseReubicaciones">
                        <span class="slider"></span>
                        <p class="off"><b>Niega</b></p>
                        <p class="on"><b>Sí</b></p>
                    </label>
                </div>
            </div>
        </div>
    </div>

    <div class="collapse" id="collapseReubicaciones">
        <div class="card card-body">
            <div id="reubications">
                <div class="card">
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <div class="row">
                                <label for="areaReubicado" class="col-md-6 col-form-label text-md-end">Área Reubicado:</label>
                                <div class="col-md-6">
                                    <input id="areaReubicado[]" type="text" class="form-control"
                                    name="areaReubicado[]" placeholder="Escribe aquí" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <label for="diagnosticoReubicaciones[]" class="col-md-6 col-form-label text-md-end">Diagnóstico:</label>
                                <div class="col-md-6">
                                    <input id="diagnosticoReubicaciones[]" type="text" class="form-control"
                                    name="diagnosticoReubicaciones[]" placeholder="Escribe aquí" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <div class="row">
                                <label for="fechaReubicado" class="col-md-6 col-form-label text-md-end">Fecha:</label>
                                <div class="col-md-6">
                                    <input id="fechaReubicado[]" type="date" class="form-control"
                                    name="fechaReubicado[]" placeholder="Escribe aquí" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <label for="tiempoReubicado[]" class="col-md-6 col-form-label text-md-end">Tiempo reubicado:</label>
                                <div class="col-md-6">
                                    <input id="tiempoReubicado[]" type="text" class="form-control"
                                    name="tiempoReubicado[]" placeholder="Escribe aquí" >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <a class="btn btn-success add_button form-control" id="add_reubications">Nueva Reubicación</a>
                </div>
            </div>
        </div>
      </div>
</div>

<div class="row mt-2">
    <div class="d-flex">
        <p style="margin-right: 30px;"><b>Restricciones o Recomendaciones </b></p>
        <div class="text-center">
            <div class="container" style="margin-top: -5px;">
                <div>
                    <label class="switch">
                        <input type="checkbox" id="checkRestriccionesORecomendaciones"
                            name="checkRestriccionesORecomendaciones" data-bs-toggle="collapse" href="#collapseRestriccionesORecomendaciones" role="button" aria-expanded="true" aria-controls="collapseRestriccionesORecomendaciones">
                        <span class="slider"></span>
                        <p class="off"><b>Niega</b></p>
                        <p class="on"><b>Sí</b></p>
                    </label>
                </div>
            </div>
        </div>
    </div>

    <div class="collapse" id="collapseRestriccionesORecomendaciones">
        <div class="card card-body">
            <div id="RestriccionesORecomendaciones">
                <div class="card">
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <div class="row">
                                <label for="tipoRestriccion" class="col-md-6 col-form-label text-md-end">Tipo de Restricción:</label>
                                <div class="col-md-6">
                                    <input id="tipoRestriccion[]" type="text" class="form-control"
                                    name="tipoRestriccion[]" placeholder="Escribe aquí" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <label for="diagnosticoRestriccion[]" class="col-md-6 col-form-label text-md-end">Diagnóstico:</label>
                                <div class="col-md-6">
                                    <input id="diagnosticoRestriccion[]" type="text" class="form-control"
                                    name="diagnosticoRestriccion[]" placeholder="Escribe aquí" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <div class="row">
                                <label for="tiempoRestriccion" class="col-md-6 col-form-label text-md-end">Por cuanto tiempo:</label>
                                <div class="col-md-6">
                                    <input id="tiempoRestriccion[]" type="text" class="form-control"
                                    name="tiempoRestriccion[]" placeholder="Escribe aquí" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <label for="entidadQueOrdeno[]" class="col-md-6 col-form-label text-md-end">Entidad que ordenó:</label>
                                <div class="col-md-6">
                                    <input id="entidadQueOrdeno[]" type="text" class="form-control"
                                    name="entidadQueOrdeno[]" placeholder="Escribe aquí" >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <a class="btn btn-success add_button form-control" id="add_RestriccionesORecomendaciones">Nueva Restricción</a>
                </div>
            </div>
        </div>
      </div>
</div>
