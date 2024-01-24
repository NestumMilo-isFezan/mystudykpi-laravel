@extends('layout.main')

{{-- Main Container Here --}}
@section('contents')
    <div class="px-2 w-100 h-100 d-flex" style="min-height:100vh; background: rgb(32,32,39); background: linear-gradient(90deg, rgba(32,32,39,0.9) 0%, rgba(53,53,78, 0.9) 28%, rgba(94,94,108, 0.9) 70%, rgba(111,106,106, 0.9) 100%); backdrop-filter: blur(15px);">
        <div class="px-2 mx-auto pt-5 pt-md-4 pb-auto pb-md-5 container">
            <div class="card pb-4">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist" style="--bs-nav-tabs-link-active-color: #0277BD;">
                        <li class="nav-item d-inline" role="presentation">
                            <button class="nav-link active" id="kpi-tab" data-bs-toggle="tab" data-bs-target="#kpi-tab-pane" type="button" role="tab" aria-controls="kpi-tab-pane" aria-selected="true" style="--bs-nav-link-color: #f72e71; --bs-nav-link-hover-color:#C2185B;">
                                <i class="fa-solid fa-street-view fs-5 p-1"></i><span class="ps-md-1 d-none d-md-inline">Challenge and Plan</span>
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content px-md-2" id="myTabContent">
                        <div class="tab-pane fade show active" id="kpi-tab-pane" role="tabpanel" aria-labelledby="kpi-tab" tabindex="0">
                            @include('challenge.content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
