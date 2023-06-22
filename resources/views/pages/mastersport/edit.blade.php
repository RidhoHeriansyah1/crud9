@extends('layout.app')
@section('conten')
    <div class="row">

        <div class="col-lg-12">

            <!-- Circle Buttons -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
                </div>
                <div class="card-body">
                    <a href="/mastersport" class="btn btn-secondary"> << Kembali</a>
                    <form action="{{ url('/mastersport/'.$data->id) }}" method="POST">
                        <br>
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" id="exampleFormControlInput1"
                                placeholder="Masukan Nama Lengkap Anda" value="{{ $data->nama }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControllabel1" class="form-label">NIS</label>
                            <input type="number" name="nis" class="form-control" id="exampleFormControllabel1"
                                placeholder="Masukan NIS Anda" value="{{ $data->nis }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                            <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" placeholder="Masukan Alamat Lengkap Anda"
                                rows="3">{{ $data->alamat }}</textarea>
                        </div>
                        <div class="mb-3 float-right">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
