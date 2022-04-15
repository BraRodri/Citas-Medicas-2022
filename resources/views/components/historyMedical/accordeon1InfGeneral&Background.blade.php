<div class="col-lg-12">
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="accordion bg-white" id="accordionExample">
                        <div class="accordion-item bg-white shadow">
                          <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              <strong>INFORMACIÓN GENERAL</strong>
                            </button>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                @include('components.historyMedical.forms.section1.form1InfGeneral')
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item bg-white shadow">
                          <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <strong>ANTECEDENTES PATOLÓGICOS PERSONALES – FAMILIARES</strong>
                            </button>
                          </h2>
                          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                @include('components.historyMedical.forms.section1.form2AntPatologicosPer')
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item bg-white shadow">
                          <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              <b>ANTECEDENTES LABORALES EN LA EMPRESA</b>
                            </button>
                          </h2>
                          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                @include('components.historyMedical.forms.section1.form3AntLaboralesEmpresa')
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item bg-white shadow">
                            <h2 class="accordion-header" id="headingFour">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <b>ANTECEDENTES PATOLOGICOS OCUPACIONALES </b> (Accidentes de trabajo o Enfermedades laborales)
                              </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                  @include('components.historyMedical.forms.section1.form4AntPatologicosOcupacionales')
                              </div>
                            </div>
                          </div>
                      </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mb-3">
            <div class="col-md-12 text-center d-flex justify-content-center">
                <a class="btn btn-success btn-block m-2" onclick="showNextSection(2)">Siguiente</a>
            </div>
        </div>
    </div>
</div>
