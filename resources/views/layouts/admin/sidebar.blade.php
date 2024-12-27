<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="#">Perpustakaan | KSI</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="#">KSI</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Menu</li>
            <li class="{{ Route::is('admin.dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-home"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="">
                <a class="nav-link" href="{{ route('bukus.index') }}">
                    <i class="fas fa-book"></i>
                    <span>Buku</span>
                </a>
            </li>

            <li class="">
                <a class="nav-link" href="{{ route('members.index') }}">
                    <i class="fas fa-users"></i>
                    <span>Member</span>
                </a>
            </li>
        </ul>
    </aside>
</div>