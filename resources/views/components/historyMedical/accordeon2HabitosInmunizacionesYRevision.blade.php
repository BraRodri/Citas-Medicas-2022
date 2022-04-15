<div class="col-lg-12">
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="accordion bg-white" id="accordionSection2">
                        <div class="accordion-item bg-white shadow">
                          <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneSection2" aria-expanded="true" aria-controls="collapseOneSection2">
                              <strong>HABITOS Y ESTILOS DE VIDA </strong> (saludables y de riesgo para la salud)
                            </button>
                          </h2>
                          <div id="collapseOneSection2" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionSection2">
                            <div class="accordion-body">
                                @include('components.historyMedical.forms.section2.form5HabitosYEstilosDeVida')
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item bg-white shadow">
                          <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoSection2" aria-expanded="false" aria-controls="collapseTwoSection2">
                                <strong>INMUNIZACIONES </strong> (relación de biológicos aplicados)
                            </button>
                          </h2>
                          <div id="collapseTwoSection2" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionSection2">
                            <div class="accordion-body">
                                @include('components.historyMedical.forms.section2.form6Inmunizaciones')
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item bg-white shadow">
                          <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreeSection2" aria-expanded="false" aria-controls="collapseThreeSection2">
                              <b>REVISION POR SISTEMAS Y ENFERMEDAD ACTUAL</b>
                            </button>
                          </h2>
                          <div id="collapseThreeSection2" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionSection2">
                            <div class="accordion-body">
                                @include('components.historyMedical.forms.section2.form7REVISIONPORSISTEMASYENFERMEDADACTUAL')
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mb-3">
            <div class="col-md-12 text-center d-flex justify-content-center">
                <a class="btn btn-success btn-block m-2" onclick="showNextSection(1)">Anterior</a>
                <a class="btn btn-success btn-block m-2" onclick="showNextSection(3)">Siguiente</a>
            </div>
        </div>
    </div>
</div>
