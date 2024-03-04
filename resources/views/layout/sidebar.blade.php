<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        <div class="pcoded-navigatio-lavel">Navigation</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="">
                <a href="{{ route('indexadmin') }}">
                    <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                    <span class="pcoded-mtext">Dasboard</span>
                </a>
            </li>
            <li class="pcoded-hasmenu active pcoded-trigger">
                <a href="">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Mon Agence</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="{{ route('adminAgence') }}">
                            <span class="pcoded-mtext">Agence</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{ route('agengeComp') }}">
                            <span class="pcoded-mtext">Compagnie</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ route('agenceTel') }}">
                            <span class="pcoded-mtext">Téléphone</span>
                            {{-- <span class="pcoded-badge label label-info ">Activités</span> --}}
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{ route('agenceEmail') }}">
                            <span class="pcoded-mtext">Email</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{ route('agenceSociaux') }}">
                            <span class="pcoded-mtext">Sociaux</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{ route('agenceBank') }}">
                            <span class="pcoded-mtext">Compte Bancaire</span>
                        </a>
                    </li>
                </ul>
            </li>
            

        </ul>
        <div class="pcoded-navigatio-lavel">UI Element</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                    <span class="pcoded-mtext">Les vols</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="alert.htm">
                            <span class="pcoded-mtext">Classe</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="breadcrumb.htm">
                            <span class="pcoded-mtext">Vols</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="button.htm">
                            <span class="pcoded-mtext">Ville</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="box-shadow.htm">
                            <span class="pcoded-mtext">Aéroport</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="accordion.htm">
                            <span class="pcoded-mtext">Circuit</span>
                        </a>
                   
                  
                </ul>
            </li>
           
            <li class=" ">
                <a href="animation.htm">
                    <span class="pcoded-micon"><i class="feather icon-aperture rotate-refresh"></i><b>A</b></span>
                    <span class="pcoded-mtext">Reservation</span>
                </a>
            </li>

            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                    <span class="pcoded-mtext">Les Destinations</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="alert.htm">
                            <span class="pcoded-mtext">Destinations</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="breadcrumb.htm">
                            <span class="pcoded-mtext">Gallery</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="button.htm">
                            <span class="pcoded-mtext">Tarif</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="box-shadow.htm">
                            <span class="pcoded-mtext">Activités</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="accordion.htm">
                            <span class="pcoded-mtext">Centre d'interêt</span>
                        </a>
                   
                  
                </ul>
            </li>
        </ul>
        
       
</nav>