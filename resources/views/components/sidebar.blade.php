<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown {{ $type_menu === 'dashboard' ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('dashboard-general-dashboard') ? 'active' : '' }}'>
                        <a class="nav-link" href="{{ url('dashboard-general-dashboard') }}">General Dashboard</a>
                    </li>
                    <li class="{{ Request::is('dashboard-ecommerce-dashboard') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('dashboard-ecommerce-dashboard') }}">Ecommerce Dashboard</a>
                    </li>
                </ul>
            </li>
            <li class="menu-header">App</li>
            <li class="nav-item dropdown {{ $type_menu === 'application-wallpaper' ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="fa-brands fa-android"></i>
                    <span>Wallpaper</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('application') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('application') }}">List App</a>
                    </li>
                    <li class="{{ Request::is('category') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('category') }}">category</a>
                    </li>
                    <li class="{{ Request::is('assets/create') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('assets/create') }}">Assets</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown {{ $type_menu === 'application-skin' ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="fa-brands fa-android"></i>
                    <span>Skin Minecraft</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('minecraft/application') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('minecraft/application') }}">List App</a>
                    </li>
                    <li class="{{ Request::is('transparent-sidebar') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('transparent-sidebar') }}">Category</a>
                    </li>
                    <li class="{{ Request::is('layout-top-navigation') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('layout-top-navigation') }}">Assets</a>
                    </li>
                </ul>
            </li>
            <li class="menu-header">Pages</li>

        </ul>
    </aside>
</div>
