<div class="row mb-2">
    <div class="row justify-content-evenly">
        <div class="col-md-6">
            <h4 class="text-center"><b>OBSERVACIÓN</b></h4>

            <div class="row mt-2">
                <label for="Sp02" class="col-md-5 col-form-label text-md-start">1. Inspección</label>
                <div class="col-md-7 mb-3">
                    <select class="form-select form-select-sm" name="InspeccionEvaluacionDeColumna" id="InspeccionEvaluacionDeColumna" onchange="funcionMostrarObservaciones(this, 'InspeccionEvaluacionDeColumna');">
                        <option value="Normal">Normal</option>
                        <option value="Anormal">Anormal</option>
                        <option value="No Aplica">No Aplica</option>
                    </select>
                </div>
                <div class="mb-3" id="div_observaciones_InspeccionEvaluacionDeColumna" style="display: none;">
                    <label for="" class="form-label">Observaciones:</label>
                    <textarea class="form-control" name="InspeccionEvaluacionDeColumna_observaciones" id="InspeccionEvaluacionDeColumna_observaciones" rows="2"></textarea>
                </div>
            </div>
            <div class="row mt-2">
                <label for="Sp02" class="col-md-5 col-form-label text-md-start">2. Palpación</label>
                <div class="col-md-7 mb-3">
                    <select class="form-select form-select-sm" name="PalpacionEvaluacionDeColumna" id="PalpacionEvaluacionDeColumna" onchange="funcionMostrarObservaciones(this, 'PalpacionEvaluacionDeColumna');">
                        <option value="Normal">Normal</option>
                        <option value="Anormal">Anormal</option>
                        <option value="No Aplica">No Aplica</option>
                    </select>
                </div>
                <div class="mb-3" id="div_observaciones_PalpacionEvaluacionDeColumna" style="display: none;">
                    <label for="" class="form-label">Observaciones:</label>
                    <textarea class="form-control" name="PalpacionEvaluacionDeColumna_observaciones" id="PalpacionEvaluacionDeColumna_observaciones" rows="2"></textarea>
                </div>
            </div>
            <div class="row mt-2">
                <label for="Sp02" class="col-md-5 col-form-label text-md-start">3. Sensibilidad</label>
                <div class="col-md-7 mb-3">
                    <select class="form-select form-select-sm" name="SensibilidadEvaluacionDeColumna" id="SensibilidadEvaluacionDeColumna" onchange="funcionMostrarObservaciones(this, 'SensibilidadEvaluacionDeColumna');">
                        <option value="Normal">Normal</option>
                        <option value="Anormal">Anormal</option>
                        <option value="No Aplica">No Aplica</option>
                    </select>
                </div>
                <div class="mb-3" id="div_observaciones_SensibilidadEvaluacionDeColumna" style="display: none;">
                    <label for="" class="form-label">Observaciones:</label>
                    <textarea class="form-control" name="SensibilidadEvaluacionDeColumna_observaciones" id="SensibilidadEvaluacionDeColumna_observaciones" rows="2"></textarea>
                </div>
            </div>
            <div class="row mt-2">
                <label for="Sp02" class="col-md-5 col-form-label text-md-start">4. Motricidad</label>
                <div class="col-md-7 mb-3">
                    <select class="form-select form-select-sm" name="MotricidadEvaluacionDeColumna" id="MotricidadEvaluacionDeColumna" onchange="funcionMostrarObservaciones(this, 'MotricidadEvaluacionDeColumna');">
                        <option value="Normal">Normal</option>
                        <option value="Anormal">Anormal</option>
                        <option value="No Aplica">No Aplica</option>
                    </select>
                </div>
                <div class="mb-3" id="div_observaciones_MotricidadEvaluacionDeColumna" style="display: none;">
                    <label for="" class="form-label">Observaciones:</label>
                    <textarea class="form-control" name="MotricidadEvaluacionDeColumna_observaciones" id="MotricidadEvaluacionDeColumna_observaciones" rows="2"></textarea>
                </div>
            </div>
            <div class="row mt-2">
                <label for="Sp02" class="col-md-5 col-form-label text-md-start">5. Equilibrio estático</label>
                <div class="col-md-7 mb-3">
                    <select class="form-select form-select-sm" name="EquilibrioestaticoEvaluacionDeColumna" id="EquilibrioestaticoEvaluacionDeColumna" onchange="funcionMostrarObservaciones(this, 'EquilibrioestaticoEvaluacionDeColumna');">
                        <option value="Normal">Normal</option>
                        <option value="Anormal">Anormal</option>
                        <option value="No Aplica">No Aplica</option>
                    </select>
                </div>
                <div class="mb-3" id="div_observaciones_EquilibrioestaticoEvaluacionDeColumna" style="display: none;">
                    <label for="" class="form-label">Observaciones:</label>
                    <textarea class="form-control" name="EquilibrioestaticoEvaluacionDeColumna_observaciones" id="EquilibrioestaticoEvaluacionDeColumna_observaciones" rows="2"></textarea>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h4 class="text-center"><b>INCLINACIONES</b></h4>

            <div class="row mt-2">
                <label for="Sp02" class="col-md-5 col-form-label text-md-start">6. Alineación escapular</label>
                <div class="col-md-7 mb-3">
                    <select class="form-select form-select-sm" name="AlineacionescapularEvaluacionDeColumna" id="AlineacionescapularEvaluacionDeColumna" onchange="funcionMostrarObservaciones(this, 'AlineacionescapularEvaluacionDeColumna');">
                        <option value="Normal">Normal</option>
                        <option value="Anormal">Anormal</option>
                        <option value="No Aplica">No Aplica</option>
                    </select>
                </div>
                <div class="mb-3" id="div_observaciones_AlineacionescapularEvaluacionDeColumna" style="display: none;">
                    <label for="" class="form-label">Observaciones:</label>
                    <textarea class="form-control" name="AlineacionescapularEvaluacionDeColumna_observaciones" id="AlineacionescapularEvaluacionDeColumna_observaciones" rows="2"></textarea>
                </div>
            </div>
            <div class="row mt-2">
                <label for="Sp02" class="col-md-5 col-form-label text-md-start">7. Alineación pélvica</label>
                <div class="col-md-7 mb-3">
                    <select class="form-select form-select-sm" name="AlineacionpelvicaEvaluacionDeColumna" id="AlineacionpelvicaEvaluacionDeColumna" onchange="funcionMostrarObservaciones(this, 'AlineacionpelvicaEvaluacionDeColumna');">
                        <option value="Normal">Normal</option>
                        <option value="Anormal">Anormal</option>
                        <option value="No Aplica">No Aplica</option>
                    </select>
                </div>
                <div class="mb-3" id="div_observaciones_AlineacionpelvicaEvaluacionDeColumna" style="display: none;">
                    <label for="" class="form-label">Observaciones:</label>
                    <textarea class="form-control" name="AlineacionpelvicaEvaluacionDeColumna_observaciones" id="AlineacionpelvicaEvaluacionDeColumna_observaciones" rows="2"></textarea>
                </div>
            </div>
            <div class="row mt-2">
                <label for="Sp02" class="col-md-5 col-form-label text-md-start">8. Cifosis</label>
                <div class="col-md-7 mb-3">
                    <select class="form-select form-select-sm" name="CifosisEvaluacionDeColumna" id="CifosisEvaluacionDeColumna" onchange="funcionMostrarObservaciones(this, 'CifosisEvaluacionDeColumna');">
                        <option value="Normal">Normal</option>
                        <option value="Anormal">Anormal</option>
                        <option value="No Aplica">No Aplica</option>
                    </select>
                </div>
                <div class="mb-3" id="div_observaciones_CifosisEvaluacionDeColumna" style="display: none;">
                    <label for="" class="form-label">Observaciones:</label>
                    <textarea class="form-control" name="CifosisEvaluacionDeColumna_observaciones" id="CifosisEvaluacionDeColumna_observaciones" rows="2"></textarea>
                </div>
            </div>
            <div class="row mt-2">
                <label for="Sp02" class="col-md-5 col-form-label text-md-start">9. Lordosis</label>
                <div class="col-md-7 mb-3">
                    <select class="form-select form-select-sm" name="LordosisEvaluacionDeColumna" id="LordosisEvaluacionDeColumna" onchange="funcionMostrarObservaciones(this, 'LordosisEvaluacionDeColumna');">
                        <option value="Normal">Normal</option>
                        <option value="Anormal">Anormal</option>
                        <option value="No Aplica">No Aplica</option>
                    </select>
                </div>
                <div class="mb-3" id="div_observaciones_LordosisEvaluacionDeColumna" style="display: none;">
                    <label for="" class="form-label">Observaciones:</label>
                    <textarea class="form-control" name="LordosisEvaluacionDeColumna_observaciones" id="LordosisEvaluacionDeColumna_observaciones" rows="2"></textarea>
                </div>
            </div>
            <div class="row mt-2">
                <label for="Sp02" class="col-md-5 col-form-label text-md-start">10. Escoliosis</label>
                <div class="col-md-7 mb-3">
                    <select class="form-select form-select-sm" name="EscoliosisEvaluacionDeColumna" id="EscoliosisEvaluacionDeColumna" onchange="funcionMostrarObservaciones(this, 'EscoliosisEvaluacionDeColumna');">
                        <option value="Normal">Normal</option>
                        <option value="Anormal">Anormal</option>
                        <option value="No Aplica">No Aplica</option>
                    </select>
                </div>
                <div class="mb-3" id="div_observaciones_EscoliosisEvaluacionDeColumna" style="display: none;">
                    <label for="" class="form-label">Observaciones:</label>
                    <textarea class="form-control" name="EscoliosisEvaluacionDeColumna_observaciones" id="EscoliosisEvaluacionDeColumna_observaciones" rows="2"></textarea>
                </div>
            </div>
        </div>
    </div>

    <br>
    <div class="row justify-content-evenly">
        <div class="col-md-6">
            <br>
            <h4 class="text-center"><b>MOVIMIENTOS</b></h4>

            <div class="row mt-2">
                <label for="Sp02" class="col-md-5 col-form-label text-md-start">11. Flexión anterior</label>
                <div class="col-md-7 mb-3">
                    <select class="form-select form-select-sm" name="FlexionanteriorEvaluacionDeColumna" id="FlexionanteriorEvaluacionDeColumna" onchange="funcionMostrarObservaciones(this, 'FlexionanteriorEvaluacionDeColumna');">
                        <option value="Normal">Normal</option>
                        <option value="Anormal">Anormal</option>
                        <option value="No Aplica">No Aplica</option>
                    </select>
                </div>
                <div class="mb-3" id="div_observaciones_FlexionanteriorEvaluacionDeColumna" style="display: none;">
                    <label for="" class="form-label">Observaciones:</label>
                    <textarea class="form-control" name="FlexionanteriorEvaluacionDeColumna_observaciones" id="FlexionanteriorEvaluacionDeColumna_observaciones" rows="2"></textarea>
                </div>
            </div>
            <div class="row mt-2">
                <label for="Sp02" class="col-md-5 col-form-label text-md-start">12. Extensión posterior</label>
                <div class="col-md-7 mb-3">
                    <select class="form-select form-select-sm" name="ExtensionposteriorEvaluacionDeColumna" id="ExtensionposteriorEvaluacionDeColumna" onchange="funcionMostrarObservaciones(this, 'ExtensionposteriorEvaluacionDeColumna');">
                        <option value="Normal">Normal</option>
                        <option value="Anormal">Anormal</option>
                        <option value="No Aplica">No Aplica</option>
                    </select>
                </div>
                <div class="mb-3" id="div_observaciones_ExtensionposteriorEvaluacionDeColumna" style="display: none;">
                    <label for="" class="form-label">Observaciones:</label>
                    <textarea class="form-control" name="ExtensionposteriorEvaluacionDeColumna_observaciones" id="ExtensionposteriorEvaluacionDeColumna_observaciones" rows="2"></textarea>
                </div>
            </div>
            <div class="row mt-2">
                <label for="Sp02" class="col-md-5 col-form-label text-md-start">13. Flexión lateral</label>
                <div class="col-md-7 mb-3">
                    <select class="form-select form-select-sm" name="FlexionlateralEvaluacionDeColumna" id="FlexionlateralEvaluacionDeColumna" onchange="funcionMostrarObservaciones(this, 'FlexionlateralEvaluacionDeColumna');">
                        <option value="Normal">Normal</option>
                        <option value="Anormal">Anormal</option>
                        <option value="No Aplica">No Aplica</option>
                    </select>
                </div>
                <div class="mb-3" id="div_observaciones_FlexionlateralEvaluacionDeColumna" style="display: none;">
                    <label for="" class="form-label">Observaciones:</label>
                    <textarea class="form-control" name="FlexionlateralEvaluacionDeColumna_observaciones" id="FlexionlateralEvaluacionDeColumna_observaciones" rows="2"></textarea>
                </div>
            </div>
            <div class="row mt-2">
                <label for="Sp02" class="col-md-5 col-form-label text-md-start">14. Rotación </label>
                <div class="col-md-7 mb-3">
                    <select class="form-select form-select-sm" name="RotacionEvaluacionDeColumna" id="RotacionEvaluacionDeColumna" onchange="funcionMostrarObservaciones(this, 'RotacionEvaluacionDeColumna');">
                        <option value="Normal">Normal</option>
                        <option value="Anormal">Anormal</option>
                        <option value="No Aplica">No Aplica</option>
                    </select>
                </div>
                <div class="mb-3" id="div_observaciones_RotacionEvaluacionDeColumna" style="display: none;">
                    <label for="" class="form-label">Observaciones:</label>
                    <textarea class="form-control" name="RotacionEvaluacionDeColumna_observaciones" id="RotacionEvaluacionDeColumna_observaciones" rows="2"></textarea>
                </div>
            </div>
            <div class="row mt-2">
                <label for="Sp02" class="col-md-5 col-form-label text-md-start">15. Medición extremidades</label>
                <div class="col-md-7 mb-3">
                    <select class="form-select form-select-sm" name="MedicionextremidadesEvaluacionDeColumna" id="MedicionextremidadesEvaluacionDeColumna" onchange="funcionMostrarObservaciones(this, 'MedicionextremidadesEvaluacionDeColumna');">
                        <option value="Normal">Normal</option>
                        <option value="Anormal">Anormal</option>
                        <option value="No Aplica">No Aplica</option>
                    </select>
                </div>
                <div class="mb-3" id="div_observaciones_MedicionextremidadesEvaluacionDeColumna" style="display: none;">
                    <label for="" class="form-label">Observaciones:</label>
                    <textarea class="form-control" name="MedicionextremidadesEvaluacionDeColumna_observaciones" id="MedicionextremidadesEvaluacionDeColumna_observaciones" rows="2"></textarea>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <br>
            <h4 class="text-center"><b>EXAMENES ESPECIALES</b></h4>

            <div class="row mt-2">
                <label for="Sp02" class="col-md-5 col-form-label text-md-start">16. Test de Wells (cm)</label>
                <div class="col-md-7">
                    <select class="form-select form-select-sm" name="TestdeWellsEvaluacionDeColumna" id="TestdeWellsEvaluacionDeColumna">
                        <option value="Positivo">Positivo</option>
                        <option value="Negativo">Negativo</option>
                    </select>
                </div>
            </div>
            <div class="row mt-2">
                <label for="Sp02" class="col-md-5 col-form-label text-md-start">17. Prueba de Lassegue</label>
                <div class="col-md-7">
                    <select class="form-select form-select-sm" name="PruebadeLassegueEvaluacionDeColumna" id="PruebadeLassegueEvaluacionDeColumna">
                        <option value="Positivo">Positivo</option>
                        <option value="Negativo">Negativo</option>
                    </select>
                </div>
            </div>
            <div class="row mt-2">
                <label for="Sp02" class="col-md-5 col-form-label text-md-start">18. Signo del timbre</label>
                <div class="col-md-7">
                    <select class="form-select form-select-sm" name="SignodeltimbreEvaluacionDeColumna" id="SignodeltimbreEvaluacionDeColumna">
                        <option value="Positivo">Positivo</option>
                        <option value="Negativo">Negativo</option>
                    </select>
                </div>
            </div>
            <div class="row mt-2">
                <label for="Sp02" class="col-md-5 col-form-label text-md-start">19. Marcha en talones</label>
                <div class="col-md-7">
                    <select class="form-select form-select-sm" name="MarchaentalonesEvaluacionDeColumna" id="MarchaentalonesEvaluacionDeColumna">
                        <option value="Positivo">Positivo</option>
                        <option value="Negativo">Negativo</option>
                    </select>
                </div>
            </div>
            <div class="row mt-2">
                <label for="Sp02" class="col-md-5 col-form-label text-md-start">20. Marcha en puntas</label>
                <div class="col-md-7">
                    <select class="form-select form-select-sm" name="MarchaenpuntasEvaluacionDeColumna" id="MarchaenpuntasEvaluacionDeColumna">
                        <option value="Positivo">Positivo</option>
                        <option value="Negativo">Negativo</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-3">
    <label><b>Ampliación de hallazgos:</b></label>
    <textarea name="AmpliacionEvaluacionDeColumna" id="AmpliacionEvaluacionDeColumna" rows="4" class="form-control"></textarea>
</div>
