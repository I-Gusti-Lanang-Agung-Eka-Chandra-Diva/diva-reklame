x<div class="navbar-vertical navbar nav-dashboard">
    <div class="h-100" data-simplebar>
        <!-- Brand logo -->
        <a class="navbar-brand" href="{{ route('home.index') }}">
            <h3>DIVA REKLAME</h3>
        </a>
        <!-- Navbar nav -->
        <ul class="navbar-nav flex-column" id="sideNavbar">

            {{-- Nav item --}}
            <div class="item">
                <!-- Nav item -->
                <li class="nav-item">
                    <div class="navbar-heading">Dashboard</div>
                </li>
                <!-- Nav item -->
                <li class="nav-item">
                    <a class="nav-link has-arrow " href="{{ route('dashboard.index') }}">
                        <i class="nav-icon me-2 fa fa-home">
                        </i> Beranda
                    </a>
                </li>
                <!-- Nav item -->
                <li class="nav-item">
                    <a class="nav-link has-arrow " href="{{ route('profile.index') }}">
                        <i class="nav-icon me-2 fa fa-user-circle">
                        </i> Profil
                    </a>
                </li>
            </div>

            <div class="item">
                <!-- Nav item -->
                <li class="nav-item">
                    <div class="navbar-heading">Produk</div>
                </li>
                <!-- Nav item -->
                <li class="nav-item">
                    <a class="nav-link has-arrow {{ Route::is('product.index') ? 'active' : '' }}"
                        href="{{ route('product.index') }}">
                        <i class="nav-icon me-2 fa fa-archive">
                        </i> Kelola Produk
                    </a>
                </li>
                {{-- Nav item --}}
                <li class="nav-item">
                    <a class="nav-link has-arrow {{ Route::is('product.create') ? 'active' : '' }}"
                        href="{{ route('product.create') }}">
                        <i class="nav-icon me-2 fa fa-plus">
                        </i> Tambah Produk
                    </a>
                </li>
                <!-- Nav item -->
                <li class="nav-item">
                    <a class="nav-link has-arrow {{ Route::is('product-category.index') ? 'active' : '' }}" href="{{ route('product-category.index') }}">
                        <i class="nav-icon me-2 fa fa-edit">
                        </i> Kelola Kategori Produk
                    </a>
                </li>
                <!-- Nav item -->
                <li class="nav-item">
                    <a class="nav-link has-arrow {{ Route::is('product-ingredients
                        .index') ? 'active' : '' }}" href="{{ route('product-category.index') }}">
                        <i class="nav-icon me-2 fa fa-edit">
                        </i> Kelola Bahan
                    </a>
                </li>
            </div>
            <div class="item">
                <!-- Nav item -->
                <li class="nav-item">
                    <div class="navbar-heading">Pesanan</div>
                </li>
                <!-- Nav item -->
                <li class="nav-item">
                    <a class="nav-link has-arrow " href="calendar.html">
                        <i class="nav-icon me-2 fa fa-clock">
                        </i> Kelola Pesanan
                    </a>
                </li>
                <!-- Nav item -->
                <li class="nav-item">
                    <a class="nav-link has-arrow " href="chat-app.html">
                        <i class="nav-icon me-2 fa fa-history">
                        </i> Kelola Riwayat Pesanan
                    </a>
                </li>
            </div>
            <div class="item">
                <!-- Nav item -->
                <li class="nav-item">
                    <div class="navbar-heading">Website</div>
                </li>
                <!-- Nav item -->
                <li class="nav-item">
                    <a class="nav-link has-arrow " href="#">
                        <i class="nav-icon me-2 fa fa-cog">
                        </i> Kelola Konten
                    </a>
                </li>
            </div>
        </ul>
        <div class="card bg-light shadow-none text-center mx-4 my-8">
            <div class="card-body py-6">
                <img src="https://www.strunkmedia.com/wp-content/uploads/2018/05/bigstock-221516158.jpg"
                    class="img-fluid" height="50" width="50" alt="Diva Reklame">
                <div class="mt-4">
                    <h5>Diva Reklame</h5>
                    <p class="fs-6 mb-4">
                        Diva reklame merupakan sebuah perusaahan yang bergerak di bidang percetakan
                    </p>
                    <a href="#" class="btn btn-secondary btn-sm"></a>
                </div>
            </div>
        </div>

    </div>
</div>
