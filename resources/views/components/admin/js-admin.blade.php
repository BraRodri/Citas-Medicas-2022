<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- Vendor JS Files -->
 <script src="{{ asset('asset/vendor/apexcharts/apexcharts.min.js') }}"></script>
 <script src="{{ asset('asset/vendor/chart.js/chart.min.js') }}"></script>
 <script src="{{ asset('asset/vendor/echarts/echarts.min.js') }}"></script>
 <script src="{{ asset('asset/vendor/quill/quill.min.js') }}"></script>
 <script src="{{ asset('asset/vendor/tinymce/tinymce.min.js') }}"></script>

 <!-- Template Main JS File -->
 <script src="{{ asset('js/admin.js') }}"></script>

 <!-- datatable -->
 <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.4/datatables.min.js"></script>

 <script>
    $('#boton_cerrar_sesion').on('click', function() {
        swal({
            title: "Cerrar Sesión",
            text: "¿Estas seguro de cerrar la sesión actual?",
            icon: "warning",
            buttons: ["Cancelar", "Si, salir"],
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                $('#form_cerrar_sesion').submit();
            }
        });
    });
 </script>

{{ $slot }}
