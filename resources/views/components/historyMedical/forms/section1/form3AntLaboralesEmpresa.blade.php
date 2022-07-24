<div class="row mt-2">

    <div class="card border">
        <div class="cad-body p-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" id="no_aplica_antc_lab_empr">
                <label class="form-check-label" for="flexCheckDefault">
                    No aplica (N/A)
                </label>
            </div>
        </div>
    </div>

    <div id="div_nuevos_antecedentes">
        <div id="antLaboralesEmpresa">
            <div class="card">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Actividad Laboral</label>
                            <select class="form-control" name="actividad_laboral" id="actividad_laboral">
                                <option value="">- Seleccione -</option>
                                <option value="Empleado">Empleado</option>
                                <option value="Independiente">Independiente</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12" id="div_select_act_empl">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Antiguedad en la Empresa</label>
                            <input class="form-control" name="antiguedad_empresa" placeholder="Escribe aqui">
                        </div>
                    </div>
                    <div class="col-lg-12" id="div_select_act_indp">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Antiguedad en Actividad Comercial</label>
                                    <input class="form-control" name="antiguedad_actividad_comercial" placeholder="Escribe aqui">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Codigo CIIU</label>
                                    <input class="form-control" name="codigo_ciiu" placeholder="Escribe aqui">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Area: </label>
                        <select class="form-control" name="rea[]">
                            <option value="">- Seleccione -</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Oficio: </label>
                        <select class="form-control" name="oficio[]">
                            <option value="">- Seleccione -</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Tiempo Permanencía: </label>
                        <select class="form-control" name="tiempoPermanencia[]">
                            <option value="">- Seleccione -</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                            <label for="fDeR" class="form-label">F. de R.</label>
                            <input id="fDeR[]" type="text" class="form-control"
                                name="fDeR[]" placeholder="Escribe aquí" >
                        </div>
                    <div class="col-md-6">
                        <label for="elementosProPersonal[]" class="form-label">Elementos de protección personal</label>
                        <input id="elementosProPersonal[]" type="text" class="form-control"
                                name="elementosProPersonal[]" placeholder="Escribe aquí" >
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <a class="btn btn-success add_button form-control" id="add_antLaboralesEmpresa">Nuevo Antecedente</a>
            </div>
        </div>
    </div>
</div>
