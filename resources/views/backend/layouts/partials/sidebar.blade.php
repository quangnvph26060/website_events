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
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#config">
                        <i class="fas fa-cogs"></i>
                        <p>Cấu hình</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="config">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('admin.config.home') }}">
                                    <span class="sub-item">Cấu hình trang chủ</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.config.banner.index') }}">
                                    <span class="sub-item">Cấu hình banner</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.config.index') }}">
                                    <span class="sub-item">Cấu hình website</span>
                                </a>
                            </li>
                        </ul>
                    </div>
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
                                <a href="{{ route('admin.catalogues.index') }}">
                                    <span class="sub-item">Danh sách danh mục</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.catalogues.create') }}">
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
                                <a href="{{ route('admin.works.index') }}">
                                    <span class="sub-item">Danh sách tác phẩm</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.works.create') }}">
                                    <span class="sub-item">Thêm tác phẩm</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#news">
                        <i class="fas fa-newspaper"></i>
                        <p>Bài viết</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="news">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('admin.posts.index') }}">
                                    <span class="sub-item">Danh sách bài viết</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.posts.create') }}">
                                    <span class="sub-item">Thêm bài viết</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.tags.create') }}">
                        <i class="fas fa-tags"></i>
                        <p>Thẻ</p>
                    </a>

                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#slider">
                        <i class="fas fa-map"></i>
                        <p>Quản lý slider</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="slider">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('admin.slider.index') }}">
                                    <span class="sub-item">Danh sách slider</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.slider.create') }}">
                                    <span class="sub-item">Thêm một slider</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.contact-us.index') }}">
                        <i class="fas fa-id-card-alt"></i>
                        <p>Liên hệ</p>
                    </a>

                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#aboutus">
                        <i class="far fa-address-card"></i>
                        <p>Về chúng tôi</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="aboutus">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('admin.about.index') }}">
                                    <span class="sub-item">Danh sách mục</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.about.create') }}">
                                    <span class="sub-item">Thêm mục</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
