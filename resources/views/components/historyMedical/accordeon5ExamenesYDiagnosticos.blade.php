<div class="col-lg-12">
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="accordion bg-white" id="accordionSection5">
                        <div class="accordion-item bg-white shadow">
                          <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneSection5" aria-expanded="true" aria-controls="collapseOneSection5">
                              <strong>EXÁMENES DE LABORATORIO. </strong>
                            </button>
                          </h2>
                          <div id="collapseOneSection5" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionSection5">
                            <div class="accordion-body">
                                @include('components.historyMedical.forms.section5.form12ExamenesDeLaboratirio')
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item bg-white shadow">
                          <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoSection5" aria-expanded="false" aria-controls="collapseTwoSection5">
                                <strong>AYUDAS DIAGNÓSTICAS  </strong>
                            </button>
                          </h2>
                          <div id="collapseTwoSection5" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionSection5">
                            <div class="accordion-body">
                                @include('components.historyMedical.forms.section5.form13AyudasDiagnosticas')
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item bg-white shadow">
                          <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreeSection5" aria-expanded="false" aria-controls="collapseThreeSection5">
                              <b>IMPRESIÓN DIAGNOSTICA</b>
                            </button>
                          </h2>
                          <div id="collapseThreeSection5" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionSection5">
                            <div class="accordion-body">
                                @include('components.historyMedical.forms.section5.form14ImpresionDiagnostica')
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item bg-white shadow">
                            <h2 class="accordion-header" id="headingThree">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourSection5" aria-expanded="false" aria-controls="collapseFourSection5">
                                <b>CONCEPTO MEDICO DE APTITUD OCUPACIONAL</b>
                              </button>
                            </h2>
                            <div id="collapseFourSection5" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionSection5">
                              <div class="accordion-body">
                                  @include('components.historyMedical.forms.section5.form15CONCEPTOMEDICODEAPTITUDOCUPACIONAL')
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mb-3">
            <div class="col-md-12 text-center d-flex justify-content-center">
                <a class="btn btn-success btn-block m-2" onclick="showNextSection(4)">Anterior</a>
                <a class="btn btn-success btn-block m-2" onclick="showNextSection(6)">Siguiente</a>
            </div>
        </div>
    </div>
</div>
