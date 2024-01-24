@extends('layout.main')

{{-- Main Container Here --}}
@section('contents')
    <div class="px-2 w-100 h-100 d-flex" style="min-height:100vh; background: rgb(32,32,39); background: linear-gradient(90deg, rgba(32,32,39,0.9) 0%, rgba(53,53,78, 0.9) 28%, rgba(94,94,108, 0.9) 70%, rgba(111,106,106, 0.9) 100%); backdrop-filter: blur(15px);">
        <div class="px-2 mx-auto pt-4 pt-md-3 pb-4 pb-md-4 container">
            <div class="card pb-4 pb-md-1 pb-lg-4 min-vh-100">
                <img src="image/banner.jpg" class="card-img-top object-fit-cover" alt="banner" style="height: 12rem;">
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-md-2">
                        <div class="col-md-3 d-flex justify-content-center mb-5 mb-md-0">
                            <div class="position-relative">
                                <img src="image/my_img.jpg" class="position-absolute top-0 start-50 translate-middle rounded-4 shadow" alt="profile-pic" width="150" height="150">
                            </div>
                        </div>
                        <div class="col-md-6 mt-5 mt-md-0">
                            <h2 class="card-title">Nurahfezan bin Nordin</h2>
                            <p class="card-text"><em>Hidup mesti ada waifu!!!</em></p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <hr>
                        <div class="col px-md-2 px-lg-5 pt-3 pb-lg-5">
                            <div class="container-fluid">
                                <div class="mx-md-5 px-md-1 px-lg-4">
                                    <div>
                                        <h3 class="mb-3 pb-2 border-bottom text-center">My Biodata</h3>
                                    </div>
                                    <div class="d-grid">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text d-none"></span>
                                            <span class="input-group-text d-inline-block" style="width: 50px;"><i class="fa-solid fa-id-card me-1"></i></span>
                                            <span class="input-group-text d-none d-md-inline text-start" style="width: 110px;">Matric No</span>
                                            <input type="text" class="form-control" value="BI21110324" disabled>
                                            <span class="input-group-text d-none"></span>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text d-none"></span>
                                        <span class="input-group-text d-inline-block" style="width: 50px;"><i class="fa-solid fa-envelope me-1"></i></span>
                                        <span class="input-group-text d-none d-md-inline text-start" style="width: 110px;">E-mail</span>
                                        <input type="text" class="form-control" value="nurahfezanbinnordin@gmail.com" disabled>
                                        <span class="input-group-text d-none"></span>
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text d-none"></span>
                                        <span class="input-group-text d-inline-block" style="width: 50px;"><i class="fa-solid fa-graduation-cap me-1"></i></span>
                                        <span class="input-group-text d-none d-md-inline text-start" style="width: 110px;">Course</span>
                                        <input type="text" class="form-control" value="Software Engineering" disabled>
                                        <span class="input-group-text d-none"></span>
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text d-none"></span>
                                        <span class="input-group-text d-inline-block" style="width: 50px;"><i class="fa-solid fa-calendar-check me-1"></i></span>
                                        <span class="input-group-text d-none d-md-inline text-start" style="width: 110px;">Batch</span>
                                        <input type="text" class="form-control" value="2021/2022" disabled>
                                        <span class="input-group-text d-none"></span>
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text d-none"></span>
                                        <span class="input-group-text d-inline-block" style="width: 50px;"><i class="fa-solid fa-user-tie me-1"></i></span>
                                        <span class="input-group-text d-none d-md-inline text-start" style="width: 110px;">Mentor</span>
                                        <input type="text" class="form-control" value="Dr Chin Pei Yee" disabled>
                                        <span class="input-group-text d-none"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
