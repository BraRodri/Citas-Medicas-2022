<div class="col-lg-12">
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="accordion bg-white" id="accordionSection4">
                        <div class="accordion-item bg-white shadow">
                          <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneSection4" aria-expanded="true" aria-controls="collapseOneSection4">
                              <strong>EVALUACION OSTEOMUSCULAR DE EXTREMIDADES </strong> (N = Normal, A= Anormal)
                            </button>
                          </h2>
                          <div id="collapseOneSection4" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionSection4">
                            <div class="accordion-body">
                                @include('components.historyMedical.forms.section4.form10EVALUACIONOSTEOMUSCULARDEEXTREMIDADES')
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item bg-white shadow">
                          <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoSection4" aria-expanded="false" aria-controls="collapseTwoSection4">
                                <strong>EVALUACION DE COLUMNA VERTEBRAL </strong> (N = Normal, A= Anormal)
                            </button>
                          </h2>
                          <div id="collapseTwoSection4" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionSection4">
                            <div class="accordion-body">
                                @include('components.historyMedical.forms.section4.form11EVALUACIONDECOLUMNAVERTEBRAL')
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mb-3">
            <div class="col-md-12 text-center d-flex justify-content-center">
                <a class="btn btn-success btn-block m-2" onclick="showNextSection(3)">Anterior</a>
                <a class="btn btn-success btn-block m-2" onclick="showNextSection(5)">Siguiente</a>
            </div>
        </div>
    </div>
</div>
