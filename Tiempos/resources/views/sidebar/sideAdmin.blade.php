<li class="sidebar-title">Menu</li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-person-circle"></i>
                        <span>Usuarios</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item active">
                            <a href="{{ route('users.create')}}">Crear</a>
                            <a href="{{ route('users.index')}}">Modificar</a>

                                           
                    </ul>
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>Sorteo</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item">
                            <a href="{{ route('sorteos.create')}}">Nuevo Sorteo</a>
                            <a href="{{ route('sorteos.index')}}">Sorteo activos</a>
                            <a href="">Números restringidos</a>
                </li>
                
                </li>
                </ul>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-card-text"></i>
                        <span>Reportes</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item">
                            <a href="">Numeros Vendidos</a>
                            <a href="">Numeros Pagados </a>
                            </ul>              
                 </li>

                 <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                    <i class="bi bi-cash"></i>
                        <span>Comisiones</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item">                            
                            <a href="{{ route('comisiones.index')}}">Modificar Comisiones</a>
                            <a href="{{ route('comisiones.index')}}">Crear Comisión por Usuario</a>
                            <a href="{{ route('comisiones.create')}}">Crear Comisión</a>
                            </ul>              
                 </li>

                 <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-slash-circle-fill"></i>
                        <span>Restricciones</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item">
                            <a href="{{ route('restringidos.create')}}">Crear Restricción</a>
                            <a href="{{ route('restringidos.index')}}">Modificar restricción</a>
                            </ul>              
                 </li>


                 <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-gear-fill"></i>
                        <span>Configuraciones</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item">
                            <a href="{{ route('configuraciones.index')}}">Sorteos configurados</a>
                            <a href="{{ route('configuraciones.create')}}">Nuevos Sorteo</a>
                            </ul>              
                 </li>

                 