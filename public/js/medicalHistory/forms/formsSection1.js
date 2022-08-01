export default function formsSection1(){
var addButtonantGinecoobstetricos = document.getElementById('add_antGinecoobstetricos');
addButtonantGinecoobstetricos.onclick = function() { //Once add button is clicked
    var wrapper = document.getElementById('antGinecoobstetricos'); //Input field wrapper
    var newDiv  = document.createElement('div');
    /*
        var fieldHTML = `
            <br>
            <div class="card">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Menarca: </label>
                            <input type="text" class="form-control" placeholder="Escribe aquí" name="menarca[]"/>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>FUM: </label>
                            <input type="text" class="form-control" placeholder="Escribe aquí" name="fum[]"/>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Gestaciones: </label>
                            <input type="text" class="form-control" placeholder="Escribe aquí" name="gestaciones[]"/>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <div class="row">
                            <label for="planificacion" class="col-md-6 col-form-label text-md-end">Planificación</label>
                            <div class="col-md-6">
                                <input id="planificacion[]" type="text" class="form-control"
                                name="planificacion[]" placeholder="Escribe aquí" >
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <label for="citologia[]" class="col-md-6 col-form-label text-md-end">Citología</label>
                            <div class="col-md-6">
                                <input id="citologia[]" type="text" class="form-control"
                                name="citologia[]" placeholder="Escribe aquí" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `;
    */
    var fieldHTML = `
        <br>
        <div class="card">
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label>Observaciones: </label>
                        <input type="text" class="form-control" placeholder="Escribe aquí" name="observacion[]"/>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Fecha de Revisión: </label>
                        <input type="date" class="form-control" placeholder="Escribe aquí" name="fecha_revision[]"/>
                    </div>
                </div>
            </div>
        </div>
    `;
    newDiv.innerHTML = fieldHTML;
    wrapper.appendChild(newDiv);
};

var addButtonantLaboralesEmpresa = document.getElementById('add_antLaboralesEmpresa');
addButtonantLaboralesEmpresa.onclick = function() { //Once add button is clicked
    var wrapper = document.getElementById('antLaboralesEmpresa'); //Input field wrapper
    var newDiv  = document.createElement('div');
    /*
    var fieldHTML = `
        <br>
        <div class="card">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Area: </label>
                        <input type="text" class="form-control" placeholder="Escribe aquí" name="area[]"/>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Oficio: </label>
                        <input type="text" class="form-control" placeholder="Escribe aquí" name="oficio[]"/>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Tiempo Permanencía: </label>
                        <input type="text" class="form-control" placeholder="Escribe aquí" name="tiempoPermanencia[]"/>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-6">
                    <div class="row">
                        <label for="fDeR" class="col-md-6 col-form-label text-md-end">F. de R.</label>
                        <div class="col-md-6">
                            <input id="fDeR[]" type="text" class="form-control"
                            name="fDeR[]" placeholder="Escribe aquí" >
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <label for="elementosProPersonal[]" class="col-md-6 col-form-label text-md-end">Elementos de protección personal</label>
                        <div class="col-md-6">
                            <input id="elementosProPersonal[]" type="text" class="form-control"
                            name="elementosProPersonal[]" placeholder="Escribe aquí" >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    `;
    */
    var fieldHTML = `
        <br>
        <div class="card">
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label>Observaciones: </label>
                        <input type="text" class="form-control" placeholder="Escribe aquí" name="observacion[]"/>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Fecha de Revisión: </label>
                        <input type="date" class="form-control" placeholder="Escribe aquí" name="fecha_revision[]"/>
                    </div>
                </div>
            </div>
        </div>
    `;
    newDiv.innerHTML = fieldHTML;
    wrapper.appendChild(newDiv);
};

var addButtonantPatologicosOcupacionales = document.getElementById('add_antPatologicosOcupacionales');
addButtonantPatologicosOcupacionales.onclick = function() { //Once add button is clicked
    var wrapper = document.getElementById('antPatologicosOcupacionales'); //Input field wrapper
    var newDiv  = document.createElement('div');
    /*
    var fieldHTML = `
        <br>
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
    `;
    */
    var fieldHTML = `
        <br>
        <div class="card">
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label>Observaciones: </label>
                        <input type="text" class="form-control" placeholder="Escribe aquí" name="observacion[]"/>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Fecha de Revisión: </label>
                        <input type="date" class="form-control" placeholder="Escribe aquí" name="fecha_revision[]"/>
                    </div>
                </div>
            </div>
        </div>
    `;
    newDiv.innerHTML = fieldHTML;
    wrapper.appendChild(newDiv);
};

var addButtonreubications = document.getElementById('add_reubications');
addButtonreubications.onclick = function() { //Once add button is clicked
    var wrapper = document.getElementById('reubications'); //Input field wrapper
    var newDiv  = document.createElement('div');
    var fieldHTML = `
        <br>
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
    `;
    newDiv.innerHTML = fieldHTML;
    wrapper.appendChild(newDiv);
};

var addButtonRestriccionesORecomendaciones = document.getElementById('add_RestriccionesORecomendaciones');
addButtonRestriccionesORecomendaciones.onclick = function() { //Once add button is clicked
    var wrapper = document.getElementById('RestriccionesORecomendaciones'); //Input field wrapper
    var newDiv  = document.createElement('div');
    var fieldHTML = `
        <br>
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
    `;
    newDiv.innerHTML = fieldHTML;
    wrapper.appendChild(newDiv);
};
}
