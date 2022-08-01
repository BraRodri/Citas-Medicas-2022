<div class="row mt-2">
    <table class="table table-hover table-bordered border-secondary" id="tabla_examenes_de_laboratorio">
        <thead class="table-dark">
          <tr>
            <th scope="col">Fecha</th>
            <th scope="col">Examen</th>
            <th scope="col" colspan="4" class="text-center">Resultado</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
                <input id="dateHemogramaExamen" type="date" class="form-control" name="dateHemogramaExamen" value="" autocomplete="dateHemogramaExamen" placeholder="Escribe aquí">
            </td>
            <td><strong>HEMOGRAMA</strong></td>
            <td colspan="2">
                <input id="HemoglobinaHemogramaExamen" type="text" class="form-control" name="HemoglobinaHemogramaExamen" value="" autocomplete="HemoglobinaHemogramaExamen" placeholder="Hemoglobina gr/dl">
            </td>
            <td colspan="2">
                <input id="HematocritoHemogramaExamen" type="text" class="form-control" name="HematocritoHemogramaExamen" value="" autocomplete="HematocritoHemogramaExamen" placeholder="Hematocrito">
            </td>
          </tr>
          <tr>
            <td>
                <input id="dateGlicemiaExamen" type="date" class="form-control" name="dateGlicemiaExamen" value="" autocomplete="dateGlicemiaExamen" placeholder="Escribe aquí">
            </td>
            <td><strong>GLICEMIA MG/DL</strong></td>
            <td colspan="4">
                <input id="GlicemiaExamen" type="text" class="form-control" name="GlicemiaExamen" value="" autocomplete="GlicemiaExamen" placeholder="Resultado Glicemia">
            </td>
          </tr>
          <tr>
            <td>
                <input id="datePERFILLIPIDICOExamen" type="date" class="form-control" name="datePERFILLIPIDICOExamen" value="" autocomplete="datePERFILLIPIDICOExamen" placeholder="Escribe aquí">
            </td>
            <td><strong>PERFIL LIPÍDICO</strong></td>
            <td colspan="1">
                <input id="ColesterolTotalExamen" type="text" class="form-control" name="ColesterolTotalExamen" value="" autocomplete="ColesterolTotalExamen" placeholder="Colesterol Total mg/dl">
            </td>
            <td colspan="1">
                <input id="ColesterolHDLExamen" type="text" class="form-control" name="ColesterolHDLExamen" value="" autocomplete="ColesterolHDLExamen" placeholder="Colesterol HDL mg/dl">
            </td>
            <td colspan="1">
                <input id="ColesterolLDLExamen" type="text" class="form-control" name="ColesterolLDLExamen" value="" autocomplete="ColesterolLDLExamen" placeholder="Colesterol LDL mg/dl">
            </td>
            <td colspan="1">
                <input id="TrigliceridosExamen" type="text" class="form-control" name="TrigliceridosExamen" value="" autocomplete="TrigliceridosExamen" placeholder="Triglicéridos mg/dl">
            </td>
          </tr>
          <tr>
            <td>
                <input id="dateCitoQuimicoExamen" type="date" class="form-control" name="dateCitoQuimicoExamen" value="" autocomplete="dateCitoQuimicoExamen" placeholder="Escribe aquí">
            </td>
            <td><strong>CITO QUÍMICO DE ORINA</strong></td>
            <td colspan="1">
                <input id="CitoQuimicoAspectoExamen" type="text" class="form-control" name="CitoQuimicoAspectoExamen" value="" autocomplete="CitoQuimicoAspectoExamen" placeholder="Aspecto">
            </td>
            <td colspan="1">
                <input id="CitoQuimicoQuimicaExamen" type="text" class="form-control" name="CitoQuimicoQuimicaExamen" value="" autocomplete="CitoQuimicoQuimicaExamen" placeholder="Quimica">
            </td>
            <td colspan="2">
                <input id="CitoQuimicoMicroscopioExamen" type="text" class="form-control" name="CitoQuimicoMicroscopioExamen" value="" autocomplete="CitoQuimicoMicroscopioExamen" placeholder="Microscopio">
            </td>
          </tr>
          <tr>
            <td>
                <input id="dateOtrosExamen" type="date" class="form-control" name="dateOtrosExamen" value="" autocomplete="dateOtrosExamen" placeholder="Escribe aquí">
            </td>
            <td><strong>OTROS</strong></td>
            <td colspan="4">
                <input id="otrosExamen" type="text" class="form-control" name="otrosExamen" value="" autocomplete="otrosExamen" placeholder="Resultado Otros">
            </td>
          </tr>
          <tr>
            <td>
                <input id="dateMANIPULADORESExamen" type="date" class="form-control" name="dateMANIPULADORESExamen[]" value="" autocomplete="dateMANIPULADORESExamen" placeholder="Escribe aquí">
            </td>
            <td><strong>OTRO PARA CLÍNICOS</strong></td>
            <td colspan="1">
                <input id="KOHMANIPULADORESExamen" type="text" class="form-control" name="KOHMANIPULADORESExamen[]" value="" autocomplete="KOHMANIPULADORESExamen" placeholder="KOH">
            </td>
            <td colspan="1">
                <input id="FROTISMANIPULADORESExamen" type="text" class="form-control" name="FROTISMANIPULADORESExamen[]" value="" autocomplete="FROTISMANIPULADORESExamen" placeholder="FROTIS FARINGEO">
            </td>
            <td colspan="2">
                <input id="COPROLOGICOMANIPULADORESExamen" type="text" class="form-control" name="COPROLOGICOMANIPULADORESExamen[]" value="" autocomplete="COPROLOGICOMANIPULADORESExamen" placeholder="COPROLOGICO">
            </td>
          </tr>
        </tbody>
    </table>

    <div class="col-lg-4 col-12">
        <button class="btn btn-success" onclick="agregarOtroClinicos();">Agregar Otro Para Clínicos</button>
    </div>
</div>
