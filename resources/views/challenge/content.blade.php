<div>
    {{-- Header --}}
    <div class="d-flex justify-content-between">
        <h2 class="card-title">Challenges and Plans</h2>
        <button type="button" class="btn btn-sm align-self-center" data-id="" style="width:150px; --bs-btn-bg: #E91E63; --bs-btn-hover-bg: #C2185B;">Add Challenges</button>
    </div>
    <p class="card-text"><em>My Challenges and Plans for entire my study year</em></p>
    <hr>

    {{-- Table --}}
    <div class="container p-2 rounded-2 border overflow-hidden">
        <div class="overflow-x-auto">
            <table class="table table-striped table-bordered border-danger">
                <thead class="" style="--bs-table-bg: #E91E63;">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col" class="text-center">Year & Sem</th>
                        <th scope="col" class="text-center">Challenge</th>
                        <th scope="col" class="text-center">Plan</th>
                        <th scope="col" class="text-center">Remarks</th>
                        <th scope="col" class="text-center">View Image</th>
                        <th scope="col" class="text-center">Modify</th>
                    </tr>
                </thead>
                <tbody class="table-danger">
                    {{-- Challenge --}}
                    @if (count($challenge) > 0)
                        @foreach ($challenge as $data)
                            <tr>
                                {{-- Challenge Info --}}
                                <td style="width: 5%;">1</td>
                                <td style="width: 10%;">{{ $data->sem }} - {{ $data->year }}</td>
                                <td style="width: 20%;">{{ $data->challenge }}</td>
                                <td style="width: 20%;">{{ $data->plan }}</td>
                                <td style="width: 15%;">{{ $data->remark }}</td>

                                {{-- Img Button --}}
                                <td class="text-center align-middle" style="width: 15%;">
                                    <a href="upload/{{ $data->imgpath }}">{{ $data->imgpath }}</a>
                                    {{-- <button type="button" class="btn btn-primary btn-sm view" id="viewimg" data-bs-toggle="modal" data-bs-target="#imgpanel">View Image</button> --}}
                                </td>

                                {{-- Modify Buttons --}}
                                <td class="text-center" style="width: 15%;">
                                    <div class="gap-1 d-grid justify-content-center">
                                        <button type="button" class="btn btn-success checkinit btn-sm" data-id="" style="width: 90px;">Edit</button>
                                        <button type="button" class="btn btn-danger cancelit btn-sm" data-id="" style="width: 90px;">Remove</button>
                                    </div>
                                </td>

                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="7">No results found</td>
                        </tr>
                    @endif

                    {{-- <tr> --}}
                    {{-- Challenge Info --}}
                    {{-- <td style="width: 5%;">1</th>
                        <td style="width: 10%;">1 - 2021/2022</td>
                        <td style="width: 20%;">Ngantuk</td>
                        <td style="width: 20%;">Boleh tidur</td>
                        <td style="width: 15%;">Terdapat</td> --}}

                    {{-- Img Button --}}
                    {{-- <td class="text-center align-middle" style="width: 15%;">
                            <button type="button" class="btn btn-primary btn-sm view" id="viewimg" data-bs-toggle="modal" data-bs-target="#imgpanel">View Image</button>
                        </td> --}}

                    {{-- Modify Buttons --}}
                    {{-- <td class="text-center" style="width: 15%;">
                            <div class="gap-1 d-grid justify-content-center">
                                <button type="button" class="btn btn-success checkinit btn-sm" data-id="" style="width: 90px;">Edit</button>
                                <button type="button" class="btn btn-danger cancelit btn-sm" data-id="" style="width: 90px;">Remove</button>
                            </div>
                        </td> --}}

                    {{-- </tr> --}}
                </tbody>
            </table>
        </div>
    </div>

    {{-- Image Modal --}}
    <div class="modal fade" id="imgpanel" tabindex="-1" aria-labelledby="imagepanel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                {{-- Modal Header --}}
                <div class="modal-header">
                    <h1 class="modal-title fs-5">View Challenge Image</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" data-bs-target="#imgpanel"></button>
                </div>

                {{-- Modal Body --}}
                <div class="modal-body">
                    <div class="w-100">
                        <div class="mb-1">
                            <img src="image/upload.jpg" class="img-fluid frame" />
                        </div>
                    </div>
                </div>

                {{-- Modal Header --}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" data-bs-target="#imgpanel">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- End Img Modal --}}
</div>
