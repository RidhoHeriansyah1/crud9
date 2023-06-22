@extends('layout.app')

@section('conten')
    <h2>{{ __('dashboard.dashboard') }}</h2>
    <div class="row">

        <div class="col-lg-12">

            <!-- Circle Buttons -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tabel</h6>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>NO</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Nomor Telepon</th>
                            </tr>
                        </thead>
                        <tr>
                            <td>1</td>
                            <td>Nawfal</td>
                            <td>Cipinang</td>
                            <td>089069008</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Agung</td>
                            <td>Pangauban</td>
                            <td>0879868754</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Ridho</td>
                            <td>Pangauban</td>
                            <td>0000000000</td>
                        </tr>

                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
