<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{ route('panel') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Citas</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="forms-elements.html">
                    <i class="bi bi-circle"></i><span>Agendar Cita</span>
                    </a>
                </li>
                <li>
                    <a href="forms-elements.html">
                    <i class="bi bi-circle"></i><span>Mis Citas</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Cias Nav -->


        <li class="nav-heading">Opciones:</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('mi-perfil') }}">
            <i class="bi bi-person"></i>
            <span>Mi Perfil</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('faq') }}">
                <i class="bi bi-question-circle"></i>
                <span>F.A.Q</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('contacto') }}">
                <i class="bi bi-envelope"></i>
                <span>Contacto</span>
            </a>
        </li><!-- End Contact Page Nav -->

    </ul>

  </aside>
