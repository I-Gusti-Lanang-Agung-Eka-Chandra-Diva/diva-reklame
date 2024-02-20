@extends('auth.partials.main')
@section('auth')
    <main class="container d-flex flex-column">
        <div class="row align-items-center justify-content-center g-0
        min-vh-100">
            <div class="col-12 col-md-8 col-lg-6 col-xxl-4 py-8 py-xl-0">
                <a href="#" class="form-check form-switch theme-switch btn btn-light btn-icon rounded-circle d-none">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault"></label>

                </a>
                <!-- Card -->
                <div class="card smooth-shadow-md">
                    <!-- Card body -->
                    <div class="card-body p-6">
                        <div class="mb-4">
                            <h3>Diva Reklame</h3>
                            <p class="mb-6">Harap isi data dibawah ini.</p>

                        </div>
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>Error!</strong> {{ $error }}.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endforeach
                        @endif
                        <!-- Form -->
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <!-- Nama -->
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" value="{{ old('nama') }}" id="nama" class="form-control"
                                    name="nama" placeholder="nama" required="">
                            </div>
                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" class="form-control" name="email"
                                    placeholder="Alamat Email" value="{{ old('email') }}" required="">
                            </div>
                            <!-- telepon -->
                            <div class="mb-3">
                                <label for="telepon" class="form-label">Telepon</label>
                                <input type="number" id="telepon" class="form-control" name="telepon"
                                    placeholder="+62 123**********" value="{{ old('telepon') }}" required="">
                            </div>
                            <!-- kata sandi -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Kata Sandi</label>
                                <input type="password" id="password" class="form-control" name="password"
                                    placeholder="**************" value="{{ old('password') }}" required="">
                            </div>
                            <!-- konfirmasi kata sandi -->
                            <div class="mb-3">
                                <label for="confirm-password" class="form-label">Konfirmasi Kata Sandi</label>
                                <input type="password" id="confirm-password" class="form-control"
                                    name="password_confirmation" value="{{ old('password_confirmation') }}"
                                    placeholder="**************" required="">
                            </div>
                            <!-- Alamat -->
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>

                                <textarea name="alamat" class="form-control" name="alamat" id="alamat" cols="30" rows="10"
                                    placeholder="Alamat" required>{{ old('alamat') }}</textarea>
                            </div>
                            <!-- Checkbox -->
                            <div class="mb-3">
                                <div class="form-check custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="agreeCheck">
                                    <label class="form-check-label" for="agreeCheck">Saya menyetujui <a
                                            href="#">Kebijakan Layanan</a> dan <a href="#">Kebijakan
                                            Privasi</a></label>
                                </div>
                            </div>
                            <div>
                                <!-- Button -->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">
                                        Daftar
                                    </button>
                                </div>

                                <div class="d-md-flex justify-content-between mt-4">
                                    <div class="mb-2 mb-md-0">
                                        Sudah memiliki akun?<a href="{{ route('login') }}" class="fs-5"> Masuk </a>
                                    </div>
                                    <div>
                                        <a href="{{ route('password.request') }}"
                                            class="text-inherit
                        fs-5">Lupa kata sandi?</a>
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
