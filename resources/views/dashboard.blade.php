@extends('layout.main')

{{-- Main Container Here --}}
@section('contents')
    <div class="px-2 w-100 h-100 d-flex" style="min-height:100vh; background: rgb(32,32,39); background: linear-gradient(90deg, rgba(32,32,39,0.9) 0%, rgba(53,53,78, 0.9) 28%, rgba(94,94,108, 0.9) 70%, rgba(111,106,106, 0.9) 100%); backdrop-filter: blur(15px);">
        <div class="px-2 mx-auto pt-4 pt-md-3 pb-4 pb-md-4 container">
            <div class="card pb-4 pb-md-1 pb-lg-4 min-vh-100">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist" style="--bs-nav-tabs-link-active-color: #0277BD;">
                        <li class="nav-item d-inline" role="presentation">
                            <button class="nav-link active" id="kpi-tab" data-bs-toggle="tab" data-bs-target="#kpi-tab-pane" type="button" role="tab" aria-controls="kpi-tab-pane" aria-selected="true" style="--bs-nav-link-color: #f72e71; --bs-nav-link-hover-color:#C2185B;">
                                <i class="fa-regular fa-address-card fs-5 p-1"></i><span class="ps-md-1 d-none d-md-inline">My KPI</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="cgpa-tab" data-bs-toggle="tab" data-bs-target="#cgpa-tab-pane" type="button" role="tab" aria-controls="cgpa-tab-pane" aria-selected="false" style="--bs-nav-link-color: #f72e71; --bs-nav-link-hover-color:#C2185B;">
                                <i class="fa-solid fa-chart-simple fs-5 p-1"></i><span class="ps-md-1 d-none d-md-inline">CGPA</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="activity-tab" data-bs-toggle="tab" data-bs-target="#activity-tab-pane" type="button" role="tab" aria-controls="activity-tab-pane" aria-selected="false" style="--bs-nav-link-color: #f72e71; --bs-nav-link-hover-color:#C2185B;">
                                <i class="fa-regular fa-note-sticky fs-5 p-1"></i><span class="ps-md-1 d-none d-md-inline">Activity</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="competition-tab" data-bs-toggle="tab" data-bs-target="#competition-tab-pane" type="button" role="tab" aria-controls="competition-tab-pane" aria-selected="false" style="--bs-nav-link-color: #f72e71; --bs-nav-link-hover-color:#C2185B;">
                                <i class="fa-solid fa-gamepad fs-5 p-1"></i><span class="ps-md-1 d-none d-md-inline">Competition</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="certificate-tab" data-bs-toggle="tab" data-bs-target="#certificate-tab-pane" type="button" role="tab" aria-controls="certificate-tab-pane" aria-selected="false" style="--bs-nav-link-color: #f72e71; --bs-nav-link-hover-color:#C2185B;">
                                <i class="fa-solid fa-certificate fs-5 p-1"></i><span class="ps-md-1 d-none d-md-inline">Certificate</span>
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content px-md-2" id="myTabContent">
                        <div class="tab-pane fade show active" id="kpi-tab-pane" role="tabpanel" aria-labelledby="kpi-tab" tabindex="0">
                            @include('kpicontent.indicator')
                        </div>
                        <div class="tab-pane fade" id="cgpa-tab-pane" role="tabpanel" aria-labelledby="cgpa-tab" tabindex="0">
                            @include('kpicontent.cgpa')
                        </div>
                        <div class="tab-pane fade" id="activity-tab-pane" role="tabpanel" aria-labelledby="activity-tab" tabindex="0">
                            @include('kpicontent.activity')
                        </div>
                        <div class="tab-pane fade" id="competition-tab-pane" role="tabpanel" aria-labelledby="competition-tab" tabindex="0">
                            @include('kpicontent.competition')
                        </div>
                        <div class="tab-pane fade" id="certificate-tab-pane" role="tabpanel" aria-labelledby="certificate-tab" tabindex="0">
                            @include('kpicontent.certficate')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
