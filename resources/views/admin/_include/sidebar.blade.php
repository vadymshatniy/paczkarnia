<!-- Admin Sidebar -->
<aside class="admin-sidebar col-md-2">
    <!-- Sidebar admin user -->
    <div class="admin-user-panel">
        <div class="admin-image-name">
            <div class="admin-image">
                <img src="{{ asset('dist/img/avatar_Vadym.jpg') }}" class="img-circle elevation-2" width="80"
                    alt="Admin Image">
            </div>
            <div class="admin-name">
                <p class="admin-position">Admin</p>
                <p class="admin-position">{{ auth()->user()->name }}</p>
            </div>
        </div>
        <div class="admin-logout">
            <p class="admin-logout">admin logout:</p>
            <a href="{{ route('logout') }}" class="nav-link admin-logout" data-tooltip="tooltip" title="Logout"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>


    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            @include('admin._include._menu.delivery')
            @include('admin._include._menu.products')

        </ul>
    </nav>
</aside>
