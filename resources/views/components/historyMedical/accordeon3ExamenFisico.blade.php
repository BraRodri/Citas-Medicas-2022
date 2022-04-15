<div class="col-lg-12">
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="accordion bg-white" id="accordionSection3">
                        <div class="accordion-item bg-white shadow">
                          <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneSection3" aria-expanded="true" aria-controls="collapseOneSection3">
                              <strong>EXAMEN FÍSICO </strong>
                            </button>
                          </h2>
                          <div id="collapseOneSection3" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionSection3">
                            <div class="accordion-body">
                                @include('components.historyMedical.forms.section3.form8ExamenFisico')
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item bg-white shadow">
                          <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoSection3" aria-expanded="false" aria-controls="collapseTwoSection3">
                                <strong>EXAMEN FISICO GENERAL  </strong> (N = Normal, A= Anormal)
                            </button>
                          </h2>
                          <div id="collapseTwoSection3" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionSection3">
                            <div class="accordion-body">
                                @include('components.historyMedical.forms.section3.form9ExamenFisicoGeneral')
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mb-3">
            <div class="col-md-12 text-center d-flex justify-content-center">
                <a class="btn btn-success btn-block m-2" onclick="showNextSection(2)">Anterior</a>
                <a class="btn btn-success btn-block m-2" onclick="showNextSection(4)">Siguiente</a>
            </div>
        </div>
    </div>
</div>
