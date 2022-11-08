<nav>
    <div id="sidemenu" class="menu-collapsed">

        <div id="header">
            <div id="title"><span>{{ auth()->user()->name}}</span></div>
            <div id="menu-btn">
                <div class="btn-hamburger"></div>
                <div class="btn-hamburger"></div>
                <div class="btn-hamburger"></div>
            </div>
        </div>

        <div id="profile">
            <div id="photo"><img src="{{asset('img/Biblioteca_Logo.png')}}" alt="" ></div>
            <div id="name">Biblioteca web</div>
        </div>

        <div id="menu-items">
            <div class="item">
                <a href="/">
                    <div class="icon"><i class="fa-solid fa-house" style="font-size: 25px;"></i></div>
                    <div class="title">Inicio</div>
                </a>
            </div>

            <div class="item separator"></div>
            <div class="item">
                <a href="{{route('libro.index')}}">
                    <div class="icon"><i class="fa-sharp fa-solid fa-book" style="font-size: 25px;"></i></div>
                    <div class="title">Libros</div>
                </a>
            </div>

            <div class="item separator"></div>
            <div class="item">
                <a href="{{route('usuario.index')}}">
                    <div class="icon"><i class="fa-solid fa-users" style="font-size: 25px;"></i></div>
                    <div class="title">Usuarios</div>
                </a>
            </div>

            <div class="item separator"></div>
            <div class="item">
                <a href="#">
                    <div class="icon"><i class="fa-sharp fa-solid fa-table-list" style="font-size: 25px;"></i></div>
                    <div class="title">Prestamos</div>
                </a>
            </div>

            <div class="item separator"></div>
            <div class="item">
                <a href="#">
                    <div class="icon"><i class="fa-solid fa-chart-line" style="font-size: 25px;"></i></div>
                    <div class="title">Reporte</div>
                </a>
            </div>

            <div class="item separator"></div>
            <div class="item">
                <a href="{{route('Solicitud.index')}}">
                    <div class="icon"><i class="fa-sharp fa-solid fa-book-open" style="font-size: 25px;"></i></div>
                    <div class="title">Solicitud de libros</div>
                </a>
            </div>

            <div class="item separator"></div>
            <div class="item">
                <a href="{{route('login.destroy')}}">
                    <div class="icon"><i class="fa-solid fa-arrow-right-from-bracket" style="font-size: 25px;"></i></div>
                    <div class="title">Cerrar sesión</div>
                </a>
            </div>
        </div>
    </div>
</nav>