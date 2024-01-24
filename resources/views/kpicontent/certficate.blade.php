<div>
    <div class="d-flex justify-content-between">
        <h2 class="card-title">Manage Certificate</h2>
        <button type="button" class="btn btn-sm align-self-center" data-id="" style="width:150px; --bs-btn-bg: #E91E63; --bs-btn-hover-bg: #C2185B;">Add Certificate</button>
    </div>
    <p class="card-text"><em>My Certificates for entire my study year</em></p>
    <hr>
    <div class="container p-2 rounded-2 border overflow-hidden">
        <div class="overflow-x-auto">
            <table class="table table-striped table-bordered border-danger">
                <thead class="" style="--bs-table-bg: #E91E63;">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col" class="text-center">Year & Sem</th>
                        <th scope="col" class="text-center">Certificate</th>
                        <th scope="col" class="text-center">Level</th>
                        <th scope="col" class="text-center">Remarks</th>
                        <th scope="col" class="text-center">Modify</th>
                    </tr>
                </thead>
                <tbody class="table-danger">
                    {{-- CGPA --}}
                    <tr>
                        {{-- CGPA Info --}}
                        <td style="width: 5%;">1</th>
                        <td style="width: 10%;">1 - 2021/2022</td>
                        <td style="width:25%;">Cisco Certified Network Associate (CCNA)</td>
                        <td class="text-center text-uppercase" style="width: 10%;"><span class="badge text-bg-warning">professional</span></td>
                        <td class="text-center" style="width: 20%;">Terdapat</td>

                        {{-- Modify Buttons --}}
                        <td class="text-center" style="width: 20%;">
                            <div class="gap-2 d-block">
                                <button type="button" class="btn btn-success checkinit btn-sm" data-id="" style="width: 90px;">Edit</button>
                                <button type="button" class="btn btn-danger cancelit btn-sm" data-id="" style="width: 90px;">Remove</button>
                            </div>
                        </td>

                    </tr>
                    {{-- End CGPA --}}

                </tbody>
            </table>
        </div>
    </div>
</div>
