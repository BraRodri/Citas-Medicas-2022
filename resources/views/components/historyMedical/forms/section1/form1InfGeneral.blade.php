<div class="row">
    <div class="col-md-4">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Primer Nombre Paciente</label>
            <input id="nameEmployed" type="text" class="form-control {{ $errors->has('nameEmployed') ? 'is-invalid' : '' }}"
                name="nameEmployed" value="{{$paciente->nombres}}" autocomplete="nameEmployed" placeholder="Escribe aquí" >

                @error('nameEmployed')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Segundo Nombre Paciente</label>
            <input id="nameEmployed" type="text" class="form-control {{ $errors->has('nameEmployed') ? 'is-invalid' : '' }}"
                name="nameEmployed" value="{{$paciente->nombres}}" autocomplete="nameEmployed" placeholder="Escribe aquí" >

                @error('nameEmployed')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Primer Apellido Paciente</label>
            <input id="nameEmployed" type="text" class="form-control {{ $errors->has('apellidosEmployed') ? 'is-invalid' : '' }}"
                name="apellidosEmployed" value="{{$paciente->nombres}}" autocomplete="nameEmployed" placeholder="Escribe aquí" >

                @error('apellidosEmployed')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Segundo Apellido Paciente</label>
            <input id="nameEmployed" type="text" class="form-control {{ $errors->has('apellidosEmployed') ? 'is-invalid' : '' }}"
                name="apellidosEmployed" value="{{$paciente->nombres}}" autocomplete="nameEmployed" placeholder="Escribe aquí" >

                @error('apellidosEmployed')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
        </div>
        <div class="mb-3">
            <label for="nameCompany" class="form-label">Nombre Empresa</label>
            <input id="nameCompany" type="text" class="form-control {{ $errors->has('nameCompany') ? 'is-invalid' : '' }}"
                name="nameCompany" value="" autocomplete="nameCompany" placeholder="Escribe aquí" >

                @error('nameCompany')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
        </div>
        <div class="mb-3">
            <label for="placeBirth" class="form-label">Lugar de Nacimiento</label>
            <div class="">
                <input id="placeBirth" type="text" class="form-control {{ $errors->has('placeBirth') ? 'is-invalid' : '' }}"
                name="placeBirth" value="" autocomplete="placeBirth" placeholder="Escribe aquí" >

                @error('placeBirth')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="dateBirth" class="form-label">Fecha Nacimiento</label>
            <div class="">
                <input id="dateBirth" type="date" class="form-control {{ $errors->has('dateBirth') ? 'is-invalid' : '' }}"
                name="dateBirth" value="{{$paciente->fecha_nacimiento}}" autocomplete="dateBirth" placeholder="Escribe aquí" >

                @error('dateBirth')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Edad</label>
            <div class="">
                <input id="age" type="number" class="form-control {{ $errors->has('age') ? 'is-invalid' : '' }}"
                name="age" value="{{$paciente->confirm_edad}}" autocomplete="age" placeholder="Escribe aquí" >

                @error('age')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="sex" class="form-label">Sexo</label>
            <div class="">
                <select id="sex" class="form-control {{ $errors->has('sex') ? 'is-invalid' : '' }}" name="sex" >
                    <option disabled>Selecciona</option>
                    <option value="Masculino" {{$paciente->genero === 'Masculino' ? 'selected' : ''}}>Masculino</option>
                    <option value="Femenino" {{$paciente->genero === 'Femenino' ? 'selected' : ''}}>Femenino</option>
                    <option value="Otro">Otro</option>
                </select>
                @error('sex')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="mb-3" id="div_genero">
            <label for="genero" class="form-label">Genero</label>
            <div class="">
                <select id="genero" class="form-control {{ $errors->has('sex') ? 'is-invalid' : '' }}" name="genero" >
                    <option selected>Selecciona</option>
                    <option value="Lesbianas">Lesbianas</option>
                    <option value="Gays">Gays</option>
                    <option value="Transgéneros">Transgéneros</option>
                    <option value="Transexuales">Transexuales</option>
                    <option value="Bisexuales">Bisexuales</option>
                    <option value="Intersexuales">Intersexuales</option>
                    <option value="Queer">Queer</option>
                </select>
                @error('genero')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>

    </div>
    <div class="col-md-4">
        <div class="mb-3">
            <label for="statusCivil" class="form-label">Estado Civil</label>
            <div class="">
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
        <div class="mb-3">
            <label for="sons" class="form-label">Hijos</label>
            <div class="">
                <input id="sons" type="number" class="form-control {{ $errors->has('sons') ? 'is-invalid' : '' }}"
                name="sons" value="" autocomplete="sons" placeholder="Escribe aquí" >

                @error('sons')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Dirección</label>
            <div class="">
                <input id="address" type="text" class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}"
                name="address" value="{{$paciente->direccion}}" autocomplete="address" placeholder="Escribe aquí" >

                @error('address')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="municipality" class="form-label">Municipio</label>
            <div class="">
                <input id="municipality" type="text" class="form-control {{ $errors->has('municipality') ? 'is-invalid' : '' }}"
                name="municipality" value="{{$paciente->departamento}}" autocomplete="municipality" placeholder="Escribe aquí" >

                @error('municipality')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Teléfono</label>
            <div class="">
                <input id="phone" type="number" class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}"
                name="phone" value="{{$paciente->telefono}}" autocomplete="phone" placeholder="Escribe aquí" >

                @error('phone')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="profession" class="form-label">Profesión u Oficio</label>
            <div class="">
                <input id="profession" type="text" class="form-control {{ $errors->has('profession') ? 'is-invalid' : '' }}"
                name="profession" value="" autocomplete="profession" placeholder="Escribe aquí" >

                @error('profession')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="ocupation" class="form-label">Ocupación o Cargo que desempeña</label>
            <div class="">
                <input id="ocupation" type="text" class="form-control {{ $errors->has('ocupation') ? 'is-invalid' : '' }}"
                name="ocupation" value="" autocomplete="ocupation" placeholder="Escribe aquí" >

                @error('ocupation')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="dateAdmission" class="form-label">Fecha de Ingreso</label>
            <div class="">
                <input id="dateAdmission" type="date" class="form-control {{ $errors->has('dateAdmission') ? 'is-invalid' : '' }}"
                name="dateAdmission" value="" autocomplete="dateAdmission" placeholder="Escribe aquí" >

                @error('dateAdmission')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="seniorityCompany" class="form-label">Antigüedad en la empresa</label>
            <div class="">
                <input id="seniorityCompany" type="number" class="form-control {{ $errors->has('seniorityCompany') ? 'is-invalid' : '' }}"
                name="seniorityCompany" value="" autocomplete="seniorityCompany" placeholder="Escribe aquí" >

                @error('seniorityCompany')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="codigo_postal" class="form-label">Codigo Postal</label>
            <div class="">
                <input id="codigo_postal" type="number" class="form-control {{ $errors->has('codigo_postal') ? 'is-invalid' : '' }}"
                name="codigo_postal" value="" autocomplete="codigo_postal" placeholder="Escribe aquí" >

                @error('codigo_postal')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>

    </div>
    <div class="col-md-4 ">
        <div class="mb-3">
            <label for="stratum" class="form-label">Estrato socioeconómico</label>
            <div class="">
                <input id="stratum" type="number" class="form-control {{ $errors->has('stratum') ? 'is-invalid' : '' }}"
                name="stratum" value="" autocomplete="stratum" placeholder="Escribe aquí">

                @error('stratum')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="dateExam" class="form-label">Fecha Examen</label>
            <div class="">
                <input id="dateExam" type="date" class="form-control {{ $errors->has('dateExam') ? 'is-invalid' : '' }}"
                name="dateExam" value="" autocomplete="dateExam" placeholder="Escribe aquí">

                @error('dateExam')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="typeDocument" class="form-label">Tipo de Dócumento</label>
            <div class="">
                <select id="typeDocument" class="form-control {{ $errors->has('typeDocument') ? 'is-invalid' : '' }}" name="typeDocument">
                    <option value="" disabled>- Seleccionar -</option>
                    <option value="Cédula de Ciudadanía" {{$paciente->tipo_documento === 'Cédula de Ciudadanía' ? 'selected' : '' }}>Cédula de Ciudadanía</option>
                    <option value="Cédula de Extranjería" {{$paciente->tipo_documento === 'Cédula de Extranjería' ? 'selected' : '' }}>Cédula de Extranjería</option>
                    <option value="Pasaporte" {{$paciente->tipo_documento === 'Pasaporte' ? 'selected' : '' }}>Pasaporte</option>
                    <option value="Documento País Origen" {{$paciente->tipo_documento === 'Documento País Origen' ? 'selected' : '' }}>Documento País Origen</option>
                </select>

                @error('typeDocument')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="document" class="form-label">Dócumento</label>
            <div class="">
                <input id="document" type="text" class="form-control {{ $errors->has('document') ? 'is-invalid' : '' }}"
                name="document" value="{{$paciente->numero_documento}}" autocomplete="document" placeholder="Escribe aquí">

                @error('document')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="eps" class="form-label">EPS / ARL</label>
            <div class="">
                <input id="eps" type="text" class="form-control {{ $errors->has('eps') ? 'is-invalid' : '' }}"
                name="eps" value="" autocomplete="eps" placeholder="Escribe aquí">

                @error('eps')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="afp" class="form-label">AFP</label>
            <div class="">
                <input id="afp" type="text" class="form-control {{ $errors->has('afp') ? 'is-invalid' : '' }}"
                name="afp" value="" autocomplete="afp" placeholder="Escribe aquí">

                @error('afp')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="rh" class="form-label">Rh</label>
            <div class="">
                <input id="rh" type="text" class="form-control {{ $errors->has('rh') ? 'is-invalid' : '' }}"
                name="rh" value="" autocomplete="rh" placeholder="Escribe aquí">

                @error('rh')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="scholarship" class="form-label">Escolaridad</label>
            <div class="">
                <select class="form-control" name="scholarship" id="scholarship" required   >
                    <option value="">Seleccione</option>
                    <option value="Educación infantil">Educación infantil</option>
                    <option value="Educación primaria">Educación primaria</option>
                    <option value="Educación secundaria">Educación secundaria</option>
                    <option value="Educación media superior">Educación media superior</option>
                    <option value="Educación superior">Educación superior</option>
                    <option value="Educación post-universitariaa">Educación post-universitaria</option>
                </select>

                @error('scholarship')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="areaWork" class="form-label">Área donde labora</label>
            <div class="">
                <input id="areaWork" type="text" class="form-control {{ $errors->has('areaWork') ? 'is-invalid' : '' }}"
                name="areaWork" value="" autocomplete="areaWork" placeholder="Escribe aquí" >

                @error('areaWork')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="tipo_regimen" class="form-label">Tipo de Régimen</label>
            <div class="">
                <select class="form-control" id="tipo_regimen" name="tipo_regimen" required>
                    <option value="">Seleccione</option>
                    <option value="Contributivo">Contributivo</option>
                    <option value="Subsidiado">Subsidiado</option>

                </select>

                @error('tipo_regimen')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="mb-3" id="select_entidad_salud">
            <label for="tipo_regimen" class="form-label">Entidad de Salud</label>
            <div class="">
                <select class="form-control" id="entidad_salud" name="entidad_salud" required>
                    <option value="">Seleccione</option>
                </select>

                @error('tipo_regimen')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>
</div>
