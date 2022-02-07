<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{ route('panel') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <!-- modulo administrador -->
        <li class="nav-heading">ADMINISTRADOR:</li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#nav-admin-usuarios" data-bs-toggle="collapse" href="#">
                <i class="bi bi-people"></i></i><span>Gestión de Usuarios</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="nav-admin-usuarios" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('usuarios') }}">
                        <i class="bi bi-circle"></i><span>Ver Usuarios</span>
                    </a>
                    <a href="{{ route('usuarios.crear') }}">
                        <i class="bi bi-circle"></i><span>Crear Usuario</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#nav-admin-productos" data-bs-toggle="collapse" href="#">
                <i class="bi bi-cart3"></i></i><span>Gestión de Tienda</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="nav-admin-productos" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="forms-elements.html">
                        <i class="bi bi-circle"></i><span>Control de Ventas</span>
                    </a>
                    <a href="forms-elements.html">
                        <i class="bi bi-circle"></i><span>Gestión de Productos</span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- modulo paciente -->
        <li class="nav-heading">PACIENTE:</li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Citas</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="forms-elements.html">
                        <i class="bi bi-circle"></i><span>Mis Citas</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('citas') }}">
                        <i class="bi bi-circle"></i><span>Agendar Cita</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Cias Nav -->

        <!-- modulo medico -->
        <li class="nav-heading">MEDICO:</li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#nav-medico" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Mi Agenda</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="nav-medico" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="forms-elements.html">
                        <i class="bi bi-circle"></i><span>Ver Agenda</span>
                    </a>
                </li>
                <li>
                    <a href="forms-elements.html">
                        <i class="bi bi-circle"></i><span>Programar horario</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Cias Nav -->

        <!-- modulo opciones generales -->
        <li class="nav-heading">Mis Opciones:</li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('mi-perfil') }}">
            <i class="bi bi-person"></i>
            <span>Mi Perfil</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('faq') }}">
                <i class="bi bi-question-circle"></i>
                <span>F.A.Q</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('contacto') }}">
                <i class="bi bi-envelope"></i>
                <span>Contacto</span>
            </a>
        </li>

    </ul>

  </aside>
