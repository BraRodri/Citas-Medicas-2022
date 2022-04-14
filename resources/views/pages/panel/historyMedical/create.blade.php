<x-admin>
    <!-- title -->
    @section('pagina')Historia Clinica @endsection

    <div class="pagetitle">
        <h1>Historia Clinica</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('panel') }}">Inicio</a></li>
                <li class="breadcrumb-item active">Historia Clinica</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

     <!--    muchos disgustimos   -->
    <div class="breadcrumb-pagination">
        <div class="active">
            <span>1</span>
            <p>Inf General y Antecedentes</p>
        </div>
        <div class="completed">
            <span>2</span>
            <p>Hábitos, Inmunizaciones y Revisión</p>
        </div>
        <div class="todo">
            <span>3</span>
            <p>Examen Físico</p>
        </div>
        <div class="todo">
            <span>4</span>
            <p>Evaluaciones</p>
        </div>
        <div class="todo">
            <span>5</span>
            <p>Exámenes y Diagnósticos</p>
        </div>
        <div class="todo">
            <span>6</span>
            <p>Recomendaciones y Firma</p>
        </div>
    </div>

    @include('components.historyMedical.accordeonInfGeneral&Background')

    <x-slot name="js">
        <script src="{{ asset('js/medicalHistory/formDetails.js') }}" defer></script>

        <script>
        document.addEventListener('DOMContentLoaded', () => {
            var addButtonantGinecoobstetricos = document.getElementById('add_antGinecoobstetricos');
            addButtonantGinecoobstetricos.onclick = function() { //Once add button is clicked
                var wrapper = document.getElementById('antGinecoobstetricos'); //Input field wrapper
                var newDiv  = document.createElement('div');
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
                                        name="planificacion[]" placeholder="Escribe aquí" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="citologia[]" class="col-md-6 col-form-label text-md-end">Citología</label>
                                    <div class="col-md-6">
                                        <input id="citologia[]" type="text" class="form-control"
                                        name="citologia[]" placeholder="Escribe aquí" required>
                                    </div>
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
                                        name="fDeR[]" placeholder="Escribe aquí" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="elementosProPersonal[]" class="col-md-6 col-form-label text-md-end">Elementos de protección personal</label>
                                    <div class="col-md-6">
                                        <input id="elementosProPersonal[]" type="text" class="form-control"
                                        name="elementosProPersonal[]" placeholder="Escribe aquí" required>
                                    </div>
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
                var fieldHTML = `
                    <br>
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
                `;
                newDiv.innerHTML = fieldHTML;
                wrapper.appendChild(newDiv);
            };
        });
        </script>
    </x-slot>
</x-admin>
