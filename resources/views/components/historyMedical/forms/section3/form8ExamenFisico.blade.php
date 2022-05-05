<div class="row mb-2">
    <h4 class="text-center"><b>Signos Vitales</b></h4>
    <div class="row">
        <div class="col-md-3">
            <div class="row mt-2">
                <label for="Sp02" class="col-md-6 col-form-label text-md-end">Sp02 %</label>
                <div class="col-md-6">
                    <input id="Sp02" type="text" class="form-control {{ $errors->has('Sp02') ? 'is-invalid' : '' }}"
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
                <label for="TemperaturaExamenFisico" class="col-md-6 col-form-label text-md-end">Temperatura</label>
                <div class="col-md-6">
                    <input id="TemperaturaExamenFisico" type="text" class="form-control {{ $errors->has('TemperaturaExamenFisico') ? 'is-invalid' : '' }}"
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
                <label for="PulsoExamenFisico" class="col-md-6 col-form-label text-md-end">Pulso</label>
                <div class="col-md-6">
                    <input id="PulsoExamenFisico" type="text" class="form-control {{ $errors->has('PulsoExamenFisico') ? 'is-invalid' : '' }}"
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
                <label for="RitmoExamenFisico" class="col-md-6 col-form-label text-md-end">Ritmo</label>
                <div class="col-md-6">
                    <input id="RitmoExamenFisico" type="text" class="form-control {{ $errors->has('RitmoExamenFisico') ? 'is-invalid' : '' }}"
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
                <label for="PresionArterialExamenFisico" class="col-md-6 col-form-label text-md-end">Presión Arterial *</label>
                <div class="col-md-6">
                    <input id="PresionArterialExamenFisico" type="text" class="form-control {{ $errors->has('PresionArterialExamenFisico') ? 'is-invalid' : '' }}"
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
                <label for="DominanciaExamenFisico" class="col-md-6 col-form-label text-md-end">Dominancia</label>
                <div class="col-md-6">
                    <input id="DominanciaExamenFisico" type="text" class="form-control {{ $errors->has('DominanciaExamenFisico') ? 'is-invalid' : '' }}"
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
                <label for="FRespiratoriaExamenFisico" class="col-md-6 col-form-label text-md-end">F Respiratoria</label>
                <div class="col-md-6">
                    <input id="FRespiratoriaExamenFisico" type="text" class="form-control {{ $errors->has('FRespiratoriaExamenFisico') ? 'is-invalid' : '' }}"
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
                <label for="PesoExamenFisico" class="col-md-6 col-form-label text-md-end">Peso</label>
                <div class="col-md-6">
                    <input id="PesoExamenFisico" type="text" class="form-control {{ $errors->has('PesoExamenFisico') ? 'is-invalid' : '' }}"
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
                <label for="TallaExamenFisico" class="col-md-6 col-form-label text-md-end">Talla</label>
                <div class="col-md-6">
                    <input id="TallaExamenFisico" type="text" class="form-control {{ $errors->has('TallaExamenFisico') ? 'is-invalid' : '' }}"
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
                <label for="IMCExamenFisico" class="col-md-6 col-form-label text-md-end">IMC *</label>
                <div class="col-md-6">
                    <input id="IMCExamenFisico" type="text" class="form-control {{ $errors->has('IMCExamenFisico') ? 'is-invalid' : '' }}"
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
                <label for="DescripcionExamenFisico" class="col-md-6 col-form-label text-md-end">Descripción</label>
                <div class="col-md-6">
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
