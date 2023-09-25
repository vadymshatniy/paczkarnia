<li class="nav-item  @if (Route::is('*.categories.*')) menu-open @endif">
    <a href="#" class="nav-link @if (Route::is('*.categories.*')) active @endif">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            Category
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('admin.categories.index') }}"
                class="nav-link @if (Route::is('*.categories.*')) active @endif">
                <i class="far fa-circle nav-icon"></i>
                <p>Musz</p>
            </a>
        </li>
        <li class="nav-item">
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
        </li>
    </ul>
</li>
