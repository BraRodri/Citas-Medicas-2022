export default function formsSection6(){
    var addButtonRestriccionesORecomendacionesForm16 = document.getElementById('add_RestriccionesORecomendacionesForm16');
    addButtonRestriccionesORecomendacionesForm16.onclick = function() { //Once add button is clicked
        console.log("entroooo");
        var wrapper = document.getElementById('boxRestriccionesORecomendacionesFrm16'); //Input field wrapper
        var newDiv  = document.createElement('div');
        var fieldHTML = `
            <br>
            <div class="col-md-12 mt-1">
                <textarea name="restriccionesOrecomendaciones[]" id="restriccionesOrecomendaciones[]" rows="2" class="form-control"></textarea>
            </div>
        `;
        newDiv.innerHTML = fieldHTML;
        wrapper.appendChild(newDiv);
    };
}
