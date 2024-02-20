<div class="row align-items-center">
    <h1>Profil</h1>
    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
        <!-- Bg -->
        <div class="pt-20 rounded-top"
            style="
background: url({{ asset('asset/assets/images/background/profile-cover.jpg') }})
no-repeat;
background-size: cover;
">
        </div>
        <div class="card rounded-bottom rounded-0 smooth-shadow-sm mb-5">
            <div class="d-flex align-items-center justify-content-between pt-4 pb-6 px-4">
                <div class="d-flex align-items-center">
                    <!-- avatar -->
                    <div
                        class="avatar-xxl avatar-indicators avatar-online me-2 position-relative d-flex justify-content-end align-items-end mt-n10">
                        <img src="{{ asset('asset/assets/images/logo.jpeg') }}"
                            class="avatar-xxl
rounded-circle border border-2 " alt="Image">
                        <a href="#!" class="position-absolute top-0 right-0 me-2">
                            <img src="{{ asset('asset/assets/images/svg/checked-mark.svg') }}"
                                alt="Image" class="icon-sm">
                        </a>
                    </div>
                    <!-- text -->
                    <div class="lh-1">
                        <h2 class="mb-0">
                            {{ auth()->user()->nama }}
                            <a href="#!" class="text-decoration-none">
                            </a>
                        </h2>
                        <p class="mb-0 d-block">{{ auth()->user()->email }}</p>
                    </div>
                </div>
                <div>
                    <a href="{{ route('profile.edit', auth()->user()->id) }}" class="btn btn-outline-primary d-none d-md-block">Ubah Profil</a>
                </div>
            </div>
            <!-- nav -->
            <ul class="nav nav-lt-tab px-4" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('profile.index') ? 'active' : '' }}" href="{{ route('profile.index') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('profile.edit') ? 'active' : '' }}" href="{{ route('profile.edit', auth()->user()->id) }}">Ubah Profil</a>
                </li>
            </ul>
        </div>
    </div>
</div>
