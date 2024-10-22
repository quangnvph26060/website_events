<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a target="_blank" style="width: 90%;" href="https://sgomedia.vn/" class="logo">
                <img src="{{ asset('backend/SGO VIET NAM (1000 x 375 px).png') }}" alt="navbar brand"
                    class="navbar-brand img-fluid" />
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>

    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item active">
                    <a data-bs-toggle="collapse" href="/" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item active">
                    <a data-bs-toggle="collapse" href="/" class="collapsed" aria-expanded="false">
                        <i class="fas fa-cogs"></i>
                        <p>Cấu hình</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Components</h4>
                </li>

                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#base">
                        <i class="fas fa-pen-square"></i>
                        <p>Catalogues</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="base">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{route('admin.catalogues.index')}}">
                                    <span class="sub-item">Danh sách danh mục</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('admin.catalogues.create')}}">
                                    <span class="sub-item">Thêm mới danh mục</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#work">
                        <i class="fas fa-images"></i>
                        <p>Tác phẩm</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="work">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{route('admin.works.index')}}">
                                    <span class="sub-item">Danh sách tác phẩm</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('admin.catalogues.create')}}">
                                    <span class="sub-item">Thêm tác phẩm</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
