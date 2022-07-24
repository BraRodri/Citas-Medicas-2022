<div class="row mb-2">
    <h4 class="text-center"><b>Signos Vitales</b></h4>
    <div class="row">
        <div class="col-md-3">
            <div class="row mt-2">
                <label for="Sp02" class="form-label">Sp02 %</label>
                <div class="">
                    <input id="Sp02" type="number" class="form-control {{ $errors->has('Sp02') ? 'is-invalid' : '' }}"
                    name="Sp02" value="" autocomplete="Sp02" placeholder="Escribe aquí" >

                    @error('Sp02')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="row mt-2">
                <label for="TemperaturaExamenFisico" class="form-label">Temperatura</label>
                <div class="">
                    <input id="TemperaturaExamenFisico" type="number" class="form-control {{ $errors->has('TemperaturaExamenFisico') ? 'is-invalid' : '' }}"
                    name="TemperaturaExamenFisico" value="" autocomplete="TemperaturaExamenFisico" placeholder="Escribe aquí" >

                    @error('TemperaturaExamenFisico')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="row mt-2">
                <label for="PulsoExamenFisico" class="form-label">Pulso</label>
                <div class="">
                    <input id="PulsoExamenFisico" type="number" class="form-control {{ $errors->has('PulsoExamenFisico') ? 'is-invalid' : '' }}"
                    name="PulsoExamenFisico" value="" autocomplete="PulsoExamenFisico" placeholder="Escribe aquí" >

                    @error('PulsoExamenFisico')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="row mt-2">
                <label for="RitmoExamenFisico" class="form-label">Ritmo</label>
                <div class="">
                    <input id="RitmoExamenFisico" type="number" class="form-control {{ $errors->has('RitmoExamenFisico') ? 'is-invalid' : '' }}"
                    name="RitmoExamenFisico" value="" autocomplete="RitmoExamenFisico" placeholder="Escribe aquí" >

                    @error('RitmoExamenFisico')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="row mt-2">
                <label for="PresionArterialExamenFisico" class="form-label">Presión Arterial *</label>
                <div class="">
                    <input id="PresionArterialExamenFisico" type="number" class="form-control {{ $errors->has('PresionArterialExamenFisico') ? 'is-invalid' : '' }}"
                    name="PresionArterialExamenFisico" value="" autocomplete="PresionArterialExamenFisico" placeholder="Escribe aquí" >

                    @error('PresionArterialExamenFisico')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row mt-2">
                <label for="DominanciaExamenFisico" class="form-label">Dominancia</label>
                <div class="">
                    <input id="DominanciaExamenFisico" type="number" class="form-control {{ $errors->has('DominanciaExamenFisico') ? 'is-invalid' : '' }}"
                    name="DominanciaExamenFisico" value="" autocomplete="DominanciaExamenFisico" placeholder="Escribe aquí" >

                    @error('DominanciaExamenFisico')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row mt-2">
                <label for="FRespiratoriaExamenFisico" class="form-label">F Respiratoria</label>
                <div class="">
                    <input id="FRespiratoriaExamenFisico" type="number" class="form-control {{ $errors->has('FRespiratoriaExamenFisico') ? 'is-invalid' : '' }}"
                    name="FRespiratoriaExamenFisico" value="" autocomplete="FRespiratoriaExamenFisico" placeholder="Escribe aquí" >

                    @error('FRespiratoriaExamenFisico')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mt-5">
    <h4 class="text-center"><b>Datos metabólicos</b></h4>
    <div class="row">
        <div class="col-md-3">
            <div class="row mt-2">
                <label for="PesoExamenFisico" class="form-label">Peso</label>
                <div class="">
                    <input id="PesoExamenFisico" type="number" class="form-control {{ $errors->has('PesoExamenFisico') ? 'is-invalid' : '' }}"
                    name="PesoExamenFisico" value="" autocomplete="PesoExamenFisico" placeholder="Escribe aquí" >

                    @error('PesoExamenFisico')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="row mt-2">
                <label for="TallaExamenFisico" class="form-label">Talla</label>
                <div class="">
                    <input id="TallaExamenFisico" type="number" class="form-control {{ $errors->has('TallaExamenFisico') ? 'is-invalid' : '' }}"
                    name="TallaExamenFisico" value="" autocomplete="TallaExamenFisico" placeholder="Escribe aquí" >

                    @error('TallaExamenFisico')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="row mt-2">
                <label for="IMCExamenFisico" class="form-label">IMC *</label>
                <div class="">
                    <input id="IMCExamenFisico" type="number" class="form-control {{ $errors->has('IMCExamenFisico') ? 'is-invalid' : '' }}"
                    name="IMCExamenFisico" value="" autocomplete="IMCExamenFisico" placeholder="Escribe aquí" >

                    @error('IMCExamenFisico')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="row mt-2">
                <label for="DescripcionExamenFisico" class="form-label">Descripción</label>
                <div class="">
                    <input id="DescripcionExamenFisico" type="text" class="form-control {{ $errors->has('DescripcionExamenFisico') ? 'is-invalid' : '' }}"
                    name="DescripcionExamenFisico" value="" autocomplete="DescripcionExamenFisico" placeholder="Escribe aquí" >

                    @error('DescripcionExamenFisico')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>
