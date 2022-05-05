<div class="row">
    <div class="col-md-4">
        <div class="row mt-2">
            <label for="nameEmployed" class="col-md-6 col-form-label text-md-end">Nombre Empleado</label>
            <div class="col-md-6">
                <input id="nameEmployed" type="text" class="form-control {{ $errors->has('nameEmployed') ? 'is-invalid' : '' }}"
                name="nameEmployed" value="{{$paciente->nombres}}" autocomplete="nameEmployed" placeholder="Escribe aquí" >

                @error('nameEmployed')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mt-2">
            <label for="nameCompany" class="col-md-6 col-form-label text-md-end">Nombre Empresa</label>
            <div class="col-md-6">
                <input id="nameCompany" type="text" class="form-control {{ $errors->has('nameCompany') ? 'is-invalid' : '' }}"
                name="nameCompany" value="" autocomplete="nameCompany" placeholder="Escribe aquí" >

                @error('nameCompany')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mt-2">
            <label for="placeBirth" class="col-md-6 col-form-label text-md-end">Lugar de Nacimiento</label>
            <div class="col-md-6">
                <input id="placeBirth" type="text" class="form-control {{ $errors->has('placeBirth') ? 'is-invalid' : '' }}"
                name="placeBirth" value="" autocomplete="placeBirth" placeholder="Escribe aquí" >

                @error('placeBirth')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mt-2">
            <label for="dateBirth" class="col-md-6 col-form-label text-md-end">Fecha Nacimiento</label>
            <div class="col-md-6">
                <input id="dateBirth" type="date" class="form-control {{ $errors->has('dateBirth') ? 'is-invalid' : '' }}"
                name="dateBirth" value="" autocomplete="dateBirth" placeholder="Escribe aquí" >

                @error('dateBirth')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mt-2">
            <label for="age" class="col-md-6 col-form-label text-md-end">Edad</label>
            <div class="col-md-6">
                <input id="age" type="number" class="form-control {{ $errors->has('age') ? 'is-invalid' : '' }}"
                name="age" value="" autocomplete="age" placeholder="Escribe aquí" >

                @error('age')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mt-2">
            <label for="sex" class="col-md-6 col-form-label text-md-end">Sexo</label>
            <div class="col-md-6">
                <select id="sex" class="form-control {{ $errors->has('sex') ? 'is-invalid' : '' }}" name="sex" >
                    <option selected disabled>Selecciona</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                </select>
                @error('sex')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mt-2">
            <label for="statusCivil" class="col-md-6 col-form-label text-md-end">Estado Civil</label>
            <div class="col-md-6">
                <select id="statusCivil" class="form-control {{ $errors->has('statusCivil') ? 'is-invalid' : '' }}" name="statusCivil" >
                    <option selected disabled>Selecciona</option>
                    <option value="Soltero">Soltero</option>
                    <option value="Casado">Casado</option>
                    <option value="Viudo">Viudo</option>
                </select>
                @error('statusCivil')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mt-2">
            <label for="sons" class="col-md-6 col-form-label text-md-end">Hijos</label>
            <div class="col-md-6">
                <input id="sons" type="number" class="form-control {{ $errors->has('sons') ? 'is-invalid' : '' }}"
                name="sons" value="" autocomplete="sons" placeholder="Escribe aquí" >

                @error('sons')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row mt-2">
            <label for="address" class="col-md-6 col-form-label text-md-end">Dirección</label>
            <div class="col-md-6">
                <input id="address" type="text" class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}"
                name="address" value="" autocomplete="address" placeholder="Escribe aquí" >

                @error('address')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mt-2">
            <label for="municipality" class="col-md-6 col-form-label text-md-end">Municipio</label>
            <div class="col-md-6">
                <input id="municipality" type="text" class="form-control {{ $errors->has('municipality') ? 'is-invalid' : '' }}"
                name="municipality" value="" autocomplete="municipality" placeholder="Escribe aquí" >

                @error('municipality')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mt-2">
            <label for="phone" class="col-md-6 col-form-label text-md-end">Teléfono</label>
            <div class="col-md-6">
                <input id="phone" type="number" class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}"
                name="phone" value="" autocomplete="phone" placeholder="Escribe aquí" >

                @error('phone')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mt-2">
            <label for="profession" class="col-md-6 col-form-label text-md-end">Profesión u Oficio</label>
            <div class="col-md-6">
                <input id="profession" type="text" class="form-control {{ $errors->has('profession') ? 'is-invalid' : '' }}"
                name="profession" value="" autocomplete="profession" placeholder="Escribe aquí" >

                @error('profession')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mt-2">
            <label for="ocupation" class="col-md-6 col-form-label text-md-end">Ocupación o Cargo que desempeña</label>
            <div class="col-md-6">
                <input id="ocupation" type="text" class="form-control {{ $errors->has('ocupation') ? 'is-invalid' : '' }}"
                name="ocupation" value="" autocomplete="ocupation" placeholder="Escribe aquí" >

                @error('ocupation')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mt-2">
            <label for="dateAdmission" class="col-md-6 col-form-label text-md-end">Fecha de Ingreso</label>
            <div class="col-md-6">
                <input id="dateAdmission" type="date" class="form-control {{ $errors->has('dateAdmission') ? 'is-invalid' : '' }}"
                name="dateAdmission" value="" autocomplete="dateAdmission" placeholder="Escribe aquí" >

                @error('dateAdmission')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mt-2">
            <label for="seniorityCompany" class="col-md-6 col-form-label text-md-end">Antigüedad en la empresa</label>
            <div class="col-md-6">
                <input id="seniorityCompany" type="text" class="form-control {{ $errors->has('seniorityCompany') ? 'is-invalid' : '' }}"
                name="seniorityCompany" value="" autocomplete="seniorityCompany" placeholder="Escribe aquí" >

                @error('seniorityCompany')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mt-2">
            <label for="stratum" class="col-md-6 col-form-label text-md-end">Estrato socioeconómico</label>
            <div class="col-md-6">
                <input id="stratum" type="number" class="form-control {{ $errors->has('stratum') ? 'is-invalid' : '' }}"
                name="stratum" value="" autocomplete="stratum" placeholder="Escribe aquí">

                @error('stratum')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row mt-2">
            <label for="dateExam" class="col-md-6 col-form-label text-md-end">Fecha Examen</label>
            <div class="col-md-6">
                <input id="dateExam" type="date" class="form-control {{ $errors->has('dateExam') ? 'is-invalid' : '' }}"
                name="dateExam" value="" autocomplete="dateExam" placeholder="Escribe aquí">

                @error('dateExam')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mt-2">
            <label for="typeDocument" class="col-md-6 col-form-label text-md-end">Tipo de Dócumento</label>
            <div class="col-md-6">
                <select id="typeDocument" class="form-control {{ $errors->has('typeDocument') ? 'is-invalid' : '' }}" name="typeDocument">
                    <option selected disabled>Selecciona</option>
                    <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
                    <option value="Cédula de Ciudadanía">Cédula de Ciudadanía</option>
                    <option value="Otro">Otro</option>
                </select>

                @error('typeDocument')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mt-2">
            <label for="document" class="col-md-6 col-form-label text-md-end">Dócumento</label>
            <div class="col-md-6">
                <input id="document" type="number" class="form-control {{ $errors->has('document') ? 'is-invalid' : '' }}"
                name="document" value="" autocomplete="document" placeholder="Escribe aquí">

                @error('document')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mt-2">
            <label for="eps" class="col-md-6 col-form-label text-md-end">EPS / ARL</label>
            <div class="col-md-6">
                <input id="eps" type="text" class="form-control {{ $errors->has('eps') ? 'is-invalid' : '' }}"
                name="eps" value="" autocomplete="eps" placeholder="Escribe aquí">

                @error('eps')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mt-2">
            <label for="afp" class="col-md-6 col-form-label text-md-end">AFP</label>
            <div class="col-md-6">
                <input id="afp" type="text" class="form-control {{ $errors->has('afp') ? 'is-invalid' : '' }}"
                name="afp" value="" autocomplete="afp" placeholder="Escribe aquí">

                @error('afp')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mt-2">
            <label for="rh" class="col-md-6 col-form-label text-md-end">Rh</label>
            <div class="col-md-6">
                <input id="rh" type="text" class="form-control {{ $errors->has('rh') ? 'is-invalid' : '' }}"
                name="rh" value="" autocomplete="rh" placeholder="Escribe aquí">

                @error('rh')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mt-2">
            <label for="scholarship" class="col-md-6 col-form-label text-md-end">Escolaridad</label>
            <div class="col-md-6">
                <input id="scholarship" type="text" class="form-control {{ $errors->has('scholarship') ? 'is-invalid' : '' }}"
                name="scholarship" value="" autocomplete="scholarship" placeholder="Escribe aquí" >

                @error('scholarship')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mt-2">
            <label for="areaWork" class="col-md-6 col-form-label text-md-end">Área donde labora</label>
            <div class="col-md-6">
                <input id="areaWork" type="text" class="form-control {{ $errors->has('areaWork') ? 'is-invalid' : '' }}"
                name="areaWork" value="" autocomplete="areaWork" placeholder="Escribe aquí" >

                @error('areaWork')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>
</div>
