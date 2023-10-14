<li class="nav-item  @if (Route::is('*.products.*')) menu-open @endif">
    <a href="#" class="nav-link @if (Route::is('*.products.*')) active @endif">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            Produkty
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('admin.products.index') }}"
                class="nav-link @if (Route::is('*.products.*')) active @endif">
                <i class="far fa-circle nav-icon"></i>
                <p>Lista i dodawanie</p>
            </a>
        </li>
        {{-- <li class="nav-item">
            <a href="./index.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Będą</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="./index.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Już</p>
            </a>
        </li> --}}
    </ul>
</li>
