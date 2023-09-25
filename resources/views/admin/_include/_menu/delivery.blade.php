<li class="nav-item  @if (Route::is('*.deliveries.*')) menu-open @endif">
    <a href="#" class="nav-link @if (Route::is('*.deliveries.*')) active @endif">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            Wszystkie zamówienia
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('admin.deliveries.index') }}"
                class="nav-link @if (Route::is('*.deliveries.*')) active @endif">
                <i class="far fa-circle nav-icon"></i>
                <p>Muszą być wysłane</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="./index.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Będą wydane na miejscu</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="./index.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Już wykonane</p>
            </a>
        </li>
    </ul>
</li>
