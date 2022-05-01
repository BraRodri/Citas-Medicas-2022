<div class="col-lg-12">
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="accordion bg-white" id="accordionSection6">
                        <div class="accordion-item bg-white shadow">
                          <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneSection6" aria-expanded="true" aria-controls="collapseOneSection6">
                              <strong>RESTRICCIONES O RECOMENDACIONES </strong>
                            </button>
                          </h2>
                          <div id="collapseOneSection6" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionSection6">
                            <div class="accordion-body">
                                @include('components.historyMedical.forms.section2.form5HabitosYEstilosDeVida')
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item bg-white shadow">
                          <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoSection6" aria-expanded="false" aria-controls="collapseTwoSection6">
                                <strong>CONDUCTAS Y RECOMENDACIONES  OCUPACIONALES PREVENTIVAS  </strong>
                            </button>
                          </h2>
                          <div id="collapseTwoSection6" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionSection6">
                            <div class="accordion-body">
                                @include('components.historyMedical.forms.section2.form6Inmunizaciones')
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item bg-white shadow">
                          <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreeSection6" aria-expanded="false" aria-controls="collapseThreeSection6">
                              <b>Observaciones</b>
                            </button>
                          </h2>
                          <div id="collapseThreeSection6" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionSection6">
                            <div class="accordion-body">
                                @include('components.historyMedical.forms.section2.form7REVISIONPORSISTEMASYENFERMEDADACTUAL')
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h1>FIRMAAAAA</h1>

        <div class="row justify-content-center mb-3">
            <div class="col-md-12 text-center d-flex justify-content-center">
                <a class="btn btn-success btn-block m-2" onclick="showNextSection(5)">Anterior</a>
                <a class="btn btn-success btn-block m-2">Guardar</a>
            </div>
        </div>
    </div>
</div>
