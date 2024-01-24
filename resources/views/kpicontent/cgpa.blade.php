<div>
    <h2 class="card-title">My CGPA</h2>
    <p class="card-text"><em>My CGPA for entire ada my study year</em></p>
    <hr>
    <div class="container p-2 rounded-2 border overflow-hidden">
        <div class="overflow-x-auto">
            <table class="table table-striped table-bordered border-danger">
                <thead class="" style="--bs-table-bg: #E91E63;">
                    <tr>
                        <th scope="col">Year</th>
                        <th scope="col" class="text-center">Sem</th>
                        <th scope="col" class="text-center">CGPA</th>
                        <th scope="col" class="text-center">Remarks</th>
                        <th scope="col" class="text-center">Modify</th>
                    </tr>
                </thead>
                <tbody class="table-danger">
                    {{-- CGPA --}}
                    <tr>
                        {{-- CGPA Info --}}
                        <td>2021/2022</th>
                        <td class="text-center">1</td>
                        <td class="text-center">3.45</td>
                        <td class="text-center" style="width: 40%;">Boleh lah</td>

                        {{-- Modify Buttons --}}
                        <td class="text-center" style="width: 25%;">
                            <div class="gap-2 d-block">
                                <button type="button" class="btn btn-success checkinit btn-sm" data-id="" style="width: 100px;">Edit</button>
                                <button type="button" class="btn btn-danger cancelit btn-sm" data-id="" style="width: 100px;">Clear</button>
                            </div>
                        </td>

                    </tr>
                    {{-- End CGPA --}}

                </tbody>
            </table>
        </div>
    </div>
</div>
