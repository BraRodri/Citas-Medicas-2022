<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- Vendor JS Files -->
 <script src="{{ asset('asset/vendor/apexcharts/apexcharts.min.js') }}"></script>
 <script src="{{ asset('asset/vendor/chart.js/chart.min.js') }}"></script>
 <script src="{{ asset('asset/vendor/echarts/echarts.min.js') }}"></script>
 <script src="{{ asset('asset/vendor/quill/quill.min.js') }}"></script>
 <script src="{{ asset('asset/vendor/tinymce/tinymce.min.js') }}"></script>

 <script src="{{ asset('js/moment.min.js') }}"></script>

 <!-- Template Main JS File -->
 <script src="{{ asset('js/admin.js') }}"></script>
 <script src="{{ asset('js/api/notifications.js') }}" defer></script>
 <script src="{{ asset('js/api/users.js') }}" defer></script>
 <script src="{{ asset('js/api/cita.js') }}" defer></script>
 <script src="{{ asset('js/pasarelaNequi.js') }}" defer></script>
 <script src="{{ asset('js/notifications/notifications.js') }}" defer></script>

 <!-- datatable -->
 <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.4/datatables.min.js"></script>

 <!-- fullcalendar -->
<script src="{{ asset('asset/vendor/fullcalendar/main.js') }}"></script>
<script src="{{ asset('asset/vendor/fullcalendar/locales-all.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10" defer></script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.7.6/lottie.min.js" integrity="sha512-BB7rb8ZBAxtdJdB7nwDijJH9NC+648xSzviK9Itm+5APTtdpgKz1+82bDl4znz/FBhd0R7pJ/gQtomnMpZYzRw==" crossorigin="anonymous"></script>

 <script>
    $('#boton_cerrar_sesion').on('click', function() {
        Swal.fire({
            title: "Cerrar Sesión",
            text: "¿Estas seguro de cerrar la sesión actual?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: '#d33',
            confirmButtonText: 'Si, salir',
            cancelButtonText: `Cancelar`,
        })
        .then((result) => {
            if (result.isConfirmed) {
                $('#form_cerrar_sesion').submit();
            }
        });
    });
 </script>

{{ $slot }}
