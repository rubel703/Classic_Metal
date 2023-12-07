<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <div class="sidebar-brand"><a href="#"class="brand-link">
            <img src="{{ asset('/') }}dist/assets/img/AdminLTELogo.png" alt="AdminLTE Logo"
                class="brand-image opacity-75 shadow"> <span class="brand-text fw-light">Dashboard</span></a>
    </div>

    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                @if (Auth::user()->user_type == 1)
                    <li class="nav-item menu-open"><a href=""
                            class="nav-link @if (Request::segment(2) == 'admin')  @endif active">
                            <i class="nav-icon fa fa-user"></i>
                            <p>{{ Auth::user()->name }}</p>
                        </a>
                    </li>
                @endif
                <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon bi bi-circle-fill"></i>
                        <p>
                            Category
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon bi bi-circle"></i>
                                <p>Add Category</p>
                            </a></li>

                        <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon bi bi-circle"></i>
                                <p>Manage Category</p>
                            </a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon bi bi-circle-fill"></i>
                        <p>
                            Sub Category
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon bi bi-circle"></i>
                                <p>Add Sub Category</p>
                            </a></li>

                        <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon bi bi-circle"></i>
                                <p>Manage Sub Category</p>
                            </a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon bi bi-circle-fill"></i>
                        <p>
                            Brands
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon bi bi-circle"></i>
                                <p>Add Brand</p>
                            </a></li>

                        <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon bi bi-circle"></i>
                                <p>Manage Brand</p>
                            </a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon bi bi-circle-fill"></i>
                        <p>
                            Units
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon bi bi-circle"></i>
                                <p>Add Unit</p>
                            </a></li>

                        <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon bi bi-circle"></i>
                                <p>Manage Unit</p>
                            </a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon bi bi-circle-fill"></i>
                        <p>
                            Colors
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon bi bi-circle"></i>
                                <p>Add Color</p>
                            </a></li>

                        <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon bi bi-circle"></i>
                                <p>Manage Color</p>
                            </a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon bi bi-circle-fill"></i>
                        <p>
                            Sizes
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon bi bi-circle"></i>
                                <p>Add Size</p>
                            </a></li>

                        <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon bi bi-circle"></i>
                                <p>Manage Size</p>
                            </a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon bi bi-circle-fill"></i>
                        <p>
                            Products
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon bi bi-circle"></i>
                                <p>Add Product</p>
                            </a></li>

                        <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon bi bi-circle"></i>
                                <p>Manage Product</p>
                            </a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon bi bi-circle-fill"></i>
                        <p>
                            Manage Orders 
                        </p>
                    </a>
                </li>
                <li class="nav-item"><a href="{{ url('logout') }}" class="nav-link"><i class="nav-icon fa fa-lock"></i>
                    <p>Logout</p>
                </a>
            </li>
            </ul>
        </nav>
    </div>
</aside>
