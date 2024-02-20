@extends('auth.partials.main')
@section('auth')
    <main class="container d-flex flex-column">
        <div class="row align-items-center justify-content-center g-0
        min-vh-100">
            <div class="col-12 col-md-8 col-lg-6 col-xxl-4 py-8 py-xl-0">
                <a href="#" class="form-check form-switch theme-switch btn btn-light btn-icon rounded-circle d-none ">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault"></label>

                </a>
                <!-- Card -->
                <div class="card smooth-shadow-md">
                    <!-- Card body -->
                    <div class="card-body p-5">
                        <div class="mb-4">
                            <h3>Diva Reklame</h3>
                            <p class="mb-6">Jangan khawatir, kami akan membantu anda apabila anda lupa kata sandi.
                            </p>
                        </div>
                        <!-- Form -->
                        <form method="post" action="{{ route('password.email') }}">
                            @csrf
                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" class="form-control" name="email"
                                    placeholder="Masukkan alamat email anda" required="">
                            </div>
                            <!-- Button -->
                            <div class="mb-3 d-grid">
                                <button type="submit" class="btn btn-primary">
                                    Setel kata sandi
                                </button>
                            </div>
                            <span>Belum memiliki akun? <a href="{{ route('register') }}">Daftar</a></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
