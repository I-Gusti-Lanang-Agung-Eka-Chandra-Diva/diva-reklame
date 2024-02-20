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
                    <div class="card-body p-6">
                        <div class="mb-4">
                            <h3>Diva Reklame</h3>
                            <p class="mb-6">Silahkan masuk menggunakan akun anda.</p>
                        </div>
                        <!-- Form -->
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <!-- Username -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Alamat Email</label>
                                <input type="email" id="email" class="form-control" name="email"
                                    placeholder="Alamat Email Anda" required="">
                            </div>
                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Kata Sandi</label>
                                <input type="password" id="password" class="form-control" name="password"
                                    placeholder="**************" required="">
                            </div>
                            <!-- Checkbox -->
                            <div class="d-lg-flex justify-content-between align-items-center
              mb-4">
                                <div class="form-check custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="rememberme">
                                    <label class="form-check-label" for="rememberme">Ingat Saya</label>
                                </div>

                            </div>
                            <div>
                                <!-- Button -->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Masuk</button>
                                </div>

                                <div class="d-md-flex justify-content-between mt-4">
                                    <div class="mb-2 mb-md-0">
                                        <a href="{{ route('register') }}" class="fs-5">Buat Akun </a>
                                    </div>
                                    <div>
                                        <a href="{{ route('password.request') }}"
                                            class="text-inherit
                    fs-5">Lupa Kata Sandi?</a>
                                    </div>

                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
