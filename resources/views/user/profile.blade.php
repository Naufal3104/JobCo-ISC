@extends('user.app')
@section('title', 'Profile')
@section('content')
    <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Account Settings
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page body -->
        <div class="page-body">
            <div class="container-xl">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-12 col-md-3 border-end">
                            <div class="card-body">
                                <h4 class="subheader">Pengaturan Akun</h4>
                                <div class="list-group list-group-transparent">
                                    <a href="./settings.html"
                                        class="list-group-item list-group-item-action d-flex align-items-center active">Akun</a>
                                    <a href="#"
                                        class="list-group-item list-group-item-action d-flex align-items-center">Notifikasi</a>
                                    <a href="#"
                                        class="list-group-item list-group-item-action d-flex align-items-center">Pengalaman</a>
                                    <a href="./settings-plan.html"
                                        class="list-group-item list-group-item-action d-flex align-items-center">Langganan</a>
                                    <a href="#"
                                        class="list-group-item list-group-item-action d-flex align-items-center">Pengaturan</a>
                                </div>
                                <div class="list-group list-group-transparent">
                                    <a href="#" class="list-group-item list-group-item-action">Beri Masukan</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-9 d-flex flex-column">
                            <div class="card-body">
                                <h2 class="mb-4">Akun</h2>
                                <h3 class="card-title">Detail Profil</h3>
                                <div class="row align-items-center">
                                    <div class="col-auto"><span class="avatar avatar-xl"
                                            style="background-image: url(./static/avatars/000m.jpg)"></span>
                                    </div>
                                    <div class="col-auto"><a href="#" class="btn">
                                            Ubah avatar
                                        </a></div>
                                    <div class="col-auto"><a href="#" class="btn btn-ghost-danger">
                                            Hapus avatar
                                        </a></div>
                                </div>
                                <h3 class="card-title mt-4">Profil Bisnis</h3>
                                <div class="row g-3">
                                    <div class="col-md">
                                        <div class="form-label">Nama Bisnis</div>
                                        <input type="text" class="form-control" value="JobCo">
                                    </div>
                                    <div class="col-md">
                                        <div class="form-label">Lokasi</div>
                                        <input type="text" class="form-control" value="Surabaya, Indonesia">
                                    </div>
                                </div>
                                <h3 class="card-title mt-4">Email</h3>
                                <div>
                                    <div class="row g-2">
                                        <div class="col-auto">
                                            <input type="text" class="form-control w-auto"
                                                value="paweluna@howstuffworks.com">
                                        </div>
                                        <div class="col-auto"><a href="#" class="btn">
                                                Ubah
                                            </a></div>
                                    </div>
                                </div>
                                <h3 class="card-title mt-4">Password</h3>
                                <p class="card-subtitle"></p>
                                <div>
                                    <a href="#" class="btn">
                                        Ubah Kata Sandi
                                    </a>
                                </div>
                                <h3 class="card-title mt-4">Status Publik</h3>
                                <div>
                                    <label class="form-check form-switch form-switch-lg">
                                        <input class="form-check-input" type="checkbox">
                                        <span class="form-check-label form-check-label-on">You're currently
                                            visible</span>
                                        <span class="form-check-label form-check-label-off">Profil anda berstatus Privat</span>
                                    </label>
                                </div>
                            </div>
                            <div class="card-footer bg-transparent mt-auto">
                                <div class="btn-list justify-content-end">
                                    <a href="#" class="btn">
                                        Batal
                                    </a>
                                    <a href="#" class="btn btn-primary">
                                        Simpan
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer footer-transparent d-print-none">
            <div class="container-xl">
                <div class="row text-center align-items-center flex-row-reverse">
                    <div class="col-lg-auto ms-lg-auto">
                        <ul class="list-inline list-inline-dots mb-0">
                            <li class="list-inline-item"><a href="https://tabler.io/docs" target="_blank"
                                    class="link-secondary" rel="noopener">Documentation</a></li>
                            <li class="list-inline-item"><a href="./license.html" class="link-secondary">License</a></li>
                            <li class="list-inline-item"><a href="https://github.com/tabler/tabler" target="_blank"
                                    class="link-secondary" rel="noopener">Source code</a></li>
                            <li class="list-inline-item">
                                <a href="https://github.com/sponsors/codecalm" target="_blank" class="link-secondary"
                                    rel="noopener">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon text-pink icon-filled icon-inline"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                    </svg>
                                    Sponsor
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                        <ul class="list-inline list-inline-dots mb-0">
                            <li class="list-inline-item">
                                Copyright &copy; 2023
                                <a href="." class="link-secondary">Tabler</a>.
                                All rights reserved.
                            </li>
                            <li class="list-inline-item">
                                <a href="./changelog.html" class="link-secondary" rel="noopener">
                                    v1.0.0-beta20
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection
