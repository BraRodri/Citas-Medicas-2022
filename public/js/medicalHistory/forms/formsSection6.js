export default function formsSection6(){
    var addButtonRestriccionesORecomendacionesForm16 = document.getElementById('add_RestriccionesORecomendacionesForm16');
    addButtonRestriccionesORecomendacionesForm16.onclick = function() { //Once add button is clicked
        var wrapper = document.getElementById('boxRestriccionesORecomendacionesFrm16'); //Input field wrapper
        var newDiv  = document.createElement('div');
        var fieldHTML = `
            <div class="col-12">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="">Nuevas Preparaciones</label>
                    <select class="form-select" name="nuevas_preparaciones_recom_firma" id="nuevas_preparaciones_recom_firma">
                        <option value="">- Seleccione -</option>
                    </select>
                </div>
            </div>
        `;
        newDiv.innerHTML = fieldHTML;
        wrapper.appendChild(newDiv);
    };
}
