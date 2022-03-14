<li class="side-menus {{ Request::is('home') ? 'active' : '' }}">
    <a class="nav-link" href="/home">
        <i class="fas fa-columns"></i><span>Panel de Control</span>
    </a>
    <li class="nav-item dropdown">
        @can('ver-menu')<a href="#" class="nav-link has-dropdown"><i class="fas fa-desktop"></i> <span>Administración</span></a>@endcan
        <ul class="dropdown-menu">
        @can('ver-menu-roles')<li><a class="nav-link" href="/roles"><i class="app-menu__icon fa fa-user"></i>Roles</a></li>@endcan
        @can('ver-menu-usuarios')<li><a class="nav-link" href="/usuarios"><i class="app-menu__icon fa fa-user"></i>Usuarios</a></li>@endcan
        @can('ver-menu-alumnosa')<li><a class="nav-link" href="/alumnos"><i class="app-menu__icon fa fa-user"></i>Alumnos Activos</a></li>@endcan
        @can('ver-menu-alumnosa')<li><a class="nav-link" href="#"><i class="app-menu__icon fa fa-user"></i>Alumnos Inactivos</a></li>@endcan
        @can('ver-menu-periodos')<li><a class="nav-link" href="/periodos"><i class="app-menu__icon fa fa-user"></i>Periodos</a></li>@endcan
        </ul>
      </li>
      <li class="nav-item dropdown">
        @can('ver-menu-graficas')<a href="#" class="nav-link has-dropdown"><i class="fas fa-chart-bar"></i><span>Graficos</span></a>@endcan
        <ul class="dropdown-menu">
        @can('ver-menu-graficas')<li><a class="nav-link" href="/usuarios"><i class="fas fa-poll"></i>Comunidad</a></li>@endcan
        @can('ver-menu-graficas')<li><a class="nav-link" href="#"><i class="fas fa-poll"></i>Alumnos</a></li>@endcan
        @can('ver-menu-graficas')<li><a class="nav-link" href="#"><i class="fas fa-poll"></i>Cursos</a></li>@endcan
        @can('ver-menu-graficas')<li><a class="nav-link" href="#"><i class="fas fa-poll"></i>Patrocinadores</a></li>@endcan
        @can('ver-menu-graficas')<li><a class="nav-link" href="#"><i class="fas fa-poll"></i>Edades</a></li>@endcan
        @can('ver-menu-graficas')<li><a class="nav-link" href="#"><i class="fas fa-poll"></i>Ingresos</a></li>@endcan
        @can('ver-menu-graficas')<li><a class="nav-link" href="#"><i class="fas fa-poll"></i>Periodos</a></li>@endcan
        </ul>
      </li>
      @can('ver-menu')<li><a class="nav-link" href="#"><i class="fas fa-calendar-alt"></i><span>Cronograma</span></a></li>@endcan
    </ul>
</li>
