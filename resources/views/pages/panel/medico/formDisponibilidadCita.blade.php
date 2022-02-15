<div class="modal fade" id="formDisponibilityAgend" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{route('medico.programar_horario_store')}}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Formulario de disponibilidad <i class="bi bi-clock-history"></i>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="dateSelected" id="dateSelected">
                    <div class="row">
                        <p>Selecciona las horas que consideres disponibles para atender citas.</p>
                    </div>
                    <div class="mb-3 row ">
                        <div class="form-group d-flex justify-content-center">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="firstHour">
                                <label class="form-check-label" for="flexSwitchCheckDefault" id="firstHour"></label>
                            </div>
                        </div>
                        <div class="form-group d-flex justify-content-center">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="secondHour">
                                <label class="form-check-label" for="flexSwitchCheckDefault" id="secondHour"></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar <i class="bi bi-x-circle-fill"></i></button>
                    <button type="submit" class="btn btn-primary">Añadir <i class="bi bi-plus-circle-fill"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
