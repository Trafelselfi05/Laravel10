@extends('admin/layout')

@section('content')
<div class="main-content">

<div class="page-content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <div class="">
                    <button type="button" class="btn btn-success waves-effect waves-light"
                        data-bs-toggle="modal" data-bs-target="#my_Modal">
                        <i class="mdi mdi-plus me-2"></i>Tambah Data
                    </button>
                </div>
                <h4 class="mb-sm-0">Master Data
                </h4>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Tables
                        </a></li>
                    <li class="breadcrumb-item active">Master Data</Datal>
                    </li>
                </ol>
            </div>

        </div>
    </div>
    <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Default Datatable</h4>
                        <p class="card-title-desc">DataTables has most features enabled by
                            default, so all you need to do to use it with your own tables is to call
                            the construction function: <code>$().DataTable();</code>.
                        </p>

                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Jenis Kelamin</th>
                                <th>Umur</th>
                                <th>Tanggal Lahir</th>
                                <th>Action</th>
                            </tr>
                            </thead>


                            <tbody>

                            @foreach ($posts as $key => $post)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $post->nama }}</td>
                                <td>{{ $post->alamat }}</td>
                                <td>{{ $post->jenis_kelamin }}</td>
                                <td>{{ $post->umur }}</td>
                                <td>{{ $post->tanggal_lahir }}</td>
                                <td>
                                    <form action="{{ route('delete-siswa' , $post->id)}}" method="POST">
                                        @csrf
                                        <button type="button" class="btn btn-light btn_update"  data-bs-toggle="modal" data-bs-target="#edit{{$post->id}}">✎</button>
                                        @method('DELETE')
                                        <button onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-light" type="submit">❌</button>
                                    </form>
                                </td>
                            </tr>
                            <div id="edit{{$post->id}}" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title mt-0" id="myModalLabel">Edit Data Siswa</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"aria-label="Close"></button>
                                        </div>
                            <!-- end model-header -->

                            <div class="modal-body">
                                <form
                                    action="{{ route('update-siswa', $post->id) }}"
                                    method="post">
                                    @csrf
                                    @method('PUT')

                                    <div class="text-center mb-4">
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="formNama" class="form-label">Nama :</label>
                                                <input value="{{ $post->nama }}" type="text" class="form-control" name="nama" id="formNama">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="formAlamat" class="form-label">Alamat :</label>
                                                <input value="{{ $post->alamat }}" type="text" class="form-control" name="alamat" id="formAlamat" placeholder="" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="formJenisKelamin" class="form-label">Jenis Kelamin :</label>
                                                <select value="{{ $post->jenis_kelamin }}" class="form-select" id="formJenisKelamin" name="jenis_kelamin" aria-label="Floating label select example">
                                                    <option
                                                    @if($post->jenis_kelamin == "Male")
                                                        selected
                                                    @endif
                                                    value="Laki - Laki">Laki - Laki</option>
                                                    <option 
                                                    @if($post->jenis_kelamin == "Female")
                                                        selected
                                                    @endif
                                                    value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="formUmur" class="form-label">Umur : </label>
                                                <input value="{{ $post->umur }}" type="number" class="form-control" id="formUmur" name="umur" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="formTanggalLahir" class="form-label">Tanggal Lahir : </label>
                                                <input value="{{ $post->tanggal_lahir }}" type="text" class="form-control" id="formTanggalLahir" name="tanggal_lahir" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                            </div>
                            <!-- end row -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger waves-effect"
                                    data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" name="upload"
                                    class="btn btn-success waves-effect waves-light">Save</button>
                            </div>
                            </form>
                        </div>
                        <!-- end modal-body -->
                    </div>
                    <!-- end modal-content -->
    </div>
                            @endforeach
                            <!-- <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                            </tr> -->
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
    </div> 
    <!-- end row -->
    <div class="modal fade" id="my_Modal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mt-0" id="myModalLabel">Tambah Data Siswa
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <!-- end model-header -->

                            <div class="modal-body">
                                <form
                                    action="{{ route('store-siswa') }}"
                                    method="post">
                                    @csrf

                                    <div class="text-center mb-4">
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="formNama" class="form-label">Nama :</label>
                                                <input type="text" class="form-control" name="nama" id="formNama">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="formAlamat" class="form-label">Alamat :</label>
                                                <input type="text" class="form-control" name="alamat" id="formAlamat" placeholder="" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="formJenisKelamin" class="form-label">Jenis Kelamin :</label>
                                                <select class="form-select" id="formJenisKelamin" name="jenis_kelamin" aria-label="Floating label select example">
                                                    <option selected>Open this select menu</option>
                                                    <option value="Laki - Laki">Laki - Laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="formUmur" class="form-label">Umur : </label>
                                                <input type="number" class="form-control" id="formUmur" name="umur" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="formTanggalLahir" class="form-label">Tanggal Lahir : </label>
                                                <input type="text" class="form-control" id="formTanggalLahir" name="tanggal_lahir" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                            </div>
                            <!-- end row -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger waves-effect"
                                    data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" name="upload"
                                    class="btn btn-success waves-effect waves-light">Save</button>
                            </div>
                            </form>
                        </div>
                        <!-- end modal-body -->
                    </div>
                    <!-- end modal-content -->
    </div>

    <div id="edit" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mt-0" id="myModalLabel">Edit Data Siswa
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <!-- end model-header -->

                            <div class="modal-body">
                                <form
                                    action="{{ route('store-siswa') }}"
                                    method="post">
                                    @csrf

                                    <div class="text-center mb-4">
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="formNama" class="form-label">Nama :</label>
                                                <input type="text" class="form-control" name="nama" id="formNama">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="formAlamat" class="form-label">Alamat :</label>
                                                <input type="text" class="form-control" name="alamat" id="formAlamat" placeholder="" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="formJenisKelamin" class="form-label">Jenis Kelamin :</label>
                                                <select class="form-select" id="formJenisKelamin" name="jenis_kelamin" aria-label="Floating label select example">
                                                    <option selected>Open this select menu</option>
                                                    <option value="Laki - Laki">Laki - Laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="formUmur" class="form-label">Umur : </label>
                                                <input type="number" class="form-control" id="formUmur" name="umur" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="formTanggalLahir" class="form-label">Tanggal Lahir : </label>
                                                <input type="text" class="form-control" id="formTanggalLahir" name="tanggal_lahir" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                            </div>
                            <!-- end row -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger waves-effect"
                                    data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" name="upload"
                                    class="btn btn-success waves-effect waves-light">Save</button>
                            </div>
                            </form>
                        </div>
                        <!-- end modal-body -->
                    </div>
                    <!-- end modal-content -->
    </div>
    </div> 
    <!-- container-fluid -->
</div>
</div>
@endsection

@section('extra')
<script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <!-- Required datatable js -->
        <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="assets/libs/jszip/jszip.min.js"></script>
        <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

        <script src="assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
        <script src="assets/libs/datatables.net-select/js/dataTables.select.min.js"></script>
        
        <!-- Responsive examples -->
        <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="assets/js/pages/datatables.init.js"></script>

        <script src="assets/js/app.js"></script>
@endsection