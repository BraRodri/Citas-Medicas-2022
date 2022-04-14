<x-admin>
    <!-- title -->
    @section('pagina')Historia Clinica @endsection

    <div class="pagetitle">
        <h1>Historia Clinica</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('panel') }}">Inicio</a></li>
                <li class="breadcrumb-item active">Historia Clinica</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

     <!--    muchos disgustimos   -->
    <div class="breadcrumb-pagination">
        <div class="active">
            <span>1</span>
            <p>Inf General y Antecedentes</p>
        </div>
        <div class="completed">
            <span>2</span>
            <p>Hábitos, Inmunizaciones y Revisión</p>
        </div>
        <div class="todo">
            <span>3</span>
            <p>Examen Físico</p>
        </div>
        <div class="todo">
            <span>4</span>
            <p>Evaluaciones</p>
        </div>
        <div class="todo">
            <span>5</span>
            <p>Exámenes y Diagnósticos</p>
        </div>
        <div class="todo">
            <span>6</span>
            <p>Recomendaciones y Firma</p>
        </div>
    </div>

    @include('components.historyMedical.accordeonInfGeneral&Background')

    <x-slot name="js">
        <script src="{{ asset('js/medicalHistory/formDetails.js') }}" defer></script>
    </x-slot>
</x-admin>
