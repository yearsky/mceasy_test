<div class="side-content-wrap">
    <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
        <ul class="navigation-left">
            <li class="nav-item {{ request()->is('starter/*') ? 'active' : '' }}" data-item="starter">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Bar-Chart"></i>
                    <span class="nav-text">Karyawan</span>
                </a>
                <div class="triangle"></div>
            </li>


        </ul>
    </div>

    <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
        <!-- Submenu Dashboards -->
        <ul class="childNav" data-parent="starter">
            <li class="nav-item ">
                <a class="{{ Route::currentRouteName()=='dashboard' ? 'open' : '' }}" href="{{route('datakaryawan')}}">
                    <i class="nav-icon i-Clock-3"></i>
                    <span class="item-name">Data Karyawan</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('normal')}}" class="{{ Route::currentRouteName()=='normal' ? 'open' : '' }}">
                    <i class="nav-icon i-Clock-4"></i>
                    <span class="item-name">Data Cuti</span>
                </a>
            </li>
        </ul>

    </div>
    <div class="sidebar-overlay"></div>
</div>
<!--=============== Left side End ================-->
