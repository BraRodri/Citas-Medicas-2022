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
        <div class="active" id="tabSection1">
            <span>1</span>
            <p>Inf General y Antecedentes</p>
        </div>
        <div class="todo" id="tabSection2">
            <span>2</span>
            <p>Hábitos, Inmunizaciones y Revisión</p>
        </div>
        <div class="todo" id="tabSection3">
            <span>3</span>
            <p>Examen Físico</p>
        </div>
        <div class="todo" id="tabSection4">
            <span>4</span>
            <p>Evaluaciones</p>
        </div>
        <div class="todo" id="tabSection5">
            <span>5</span>
            <p>Exámenes y Diagnósticos</p>
        </div>
        <div class="todo" id="tabSection6">
            <span>6</span>
            <p>Recomendaciones y Firma</p>
        </div>
    </div>

    <div id="divOfSection1">
        @include('components.historyMedical.accordeon1InfGeneral&Background')
    </div>

    <div id="divOfSection2" style="display: none;">
        @include('components.historyMedical.accordeon2HabitosInmunizacionesYRevision')
    </div>

    <x-slot name="js">
        <script src="{{ asset('js/medicalHistory/indexMedicalHistory.js') }}" type="module" defer></script>
        <script src="{{ asset('js/medicalHistory/funtionsGeneral.js') }}" defer></script>
    </x-slot>
</x-admin>
