<li class="nav-item  @if (Route::is('*.prices.*')) menu-open @endif">
    <a href="#" class="nav-link @if (Route::is('*.prices.*')) active @endif">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            Ceny
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('admin.prices.index') }}" class="nav-link @if (Route::is('*.prices.*')) active @endif">
                <i class="far fa-circle nav-icon"></i>
                <p>Stare ceny</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="./index.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Nowe ceny</p>
            </a>
        </li>
    </ul>
</li>
