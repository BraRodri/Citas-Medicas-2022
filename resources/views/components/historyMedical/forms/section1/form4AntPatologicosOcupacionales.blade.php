<div class="card border">
    <div class="cad-body p-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" id="no_aplica_antc_pato_ocupa">
            <label class="form-check-label" for="flexCheckDefault">
                No aplica (N/A)
            </label>
        </div>
    </div>
</div>

<div id="div_apli_antc_pato_ocupa">

    <div class="row mt-2">
        <div id="antPatologicosOcupacionales">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <div class="">
                            <label for="tipoAfeccion" class="form-label">Tipo de afección</label>
                            <div class="">
                                <input id="tipoAfeccion[]" type="text" class="form-control"
                                name="tipoAfeccion[]" placeholder="Escribe aquí" >
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <label for="parteCuerpoAfectada[]" class="form-label">Parte del cuerpo afectada</label>
                            <div class="">
                                <input id="parteCuerpoAfectada[]" type="text" class="form-control"
                                name="parteCuerpoAfectada[]" placeholder="Escribe aquí" >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <div class="row">
                            <label for="tiempoDeOcurrencia" class="form-label">Tiempo de ocurrencia</label>
                            <div class="">
                                <input id="tiempoDeOcurrencia[]" type="text" class="form-control"
                                name="tiempoDeOcurrencia[]" placeholder="Escribe aquí" >
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <label for="secuelas[]" class="form-label">Secuelas</label>
                            <div class="">
                                <input id="secuelas[]" type="text" class="form-control"
                                name="secuelas[]" placeholder="Escribe aquí" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-sm-2 col-xs-12">
                <a class="btn btn-success add_button form-control" id="add_antPatologicosOcupacionales">Nuevo Antecedente</a>
            </div>
        </div>
    </div>

    <div class="row mt-4">
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
                                    <label for="areaReubicado" class="form-label">Área Reubicado:</label>
                                    <div class="">
                                        <input id="areaReubicado[]" type="text" class="form-control"
                                        name="areaReubicado[]" placeholder="Escribe aquí" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="diagnosticoReubicaciones[]" class="form-label">Diagnóstico:</label>
                                    <div class="">
                                        <input id="diagnosticoReubicaciones[]" type="text" class="form-control"
                                        name="diagnosticoReubicaciones[]" placeholder="Escribe aquí" >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="fechaReubicado" class="form-label">Fecha:</label>
                                    <div class="">
                                        <input id="fechaReubicado[]" type="date" class="form-control"
                                        name="fechaReubicado[]" placeholder="Escribe aquí" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="tiempoReubicado[]" class="form-label">Tiempo reubicado:</label>
                                    <div class="">
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
                                    <label for="tipoRestriccion" class="form-label">Tipo de Restricción:</label>
                                    <div class="">
                                        <input id="tipoRestriccion[]" type="text" class="form-control"
                                        name="tipoRestriccion[]" placeholder="Escribe aquí" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="diagnosticoRestriccion[]" class="form-label">Diagnóstico:</label>
                                    <div class="">
                                        <input id="diagnosticoRestriccion[]" type="text" class="form-control"
                                        name="diagnosticoRestriccion[]" placeholder="Escribe aquí" >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="tiempoRestriccion" class="form-label">Por cuanto tiempo:</label>
                                    <div class="">
                                        <input id="tiempoRestriccion[]" type="text" class="form-control"
                                        name="tiempoRestriccion[]" placeholder="Escribe aquí" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="entidadQueOrdeno[]" class="form-label">Entidad que ordenó:</label>
                                    <div class="">
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

</div>
