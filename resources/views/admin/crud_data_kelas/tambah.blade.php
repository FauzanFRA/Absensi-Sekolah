<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Kelas</title>
    <link rel="shortcut icon" href="../img/CN.png" type="image/x-icon">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->

        <!-- /.navbar -->
        @include('components.navbar')
        <!-- Main Sidebar Container -->
        @include('components.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            '<div class="container">

                <h1>Tambah Data Kelas</h1>
                <a href="{{route('data-kelas.index')}}" class="btn btn-secondary mb-3">Kembali</a>
                @if ($errors->any())
                <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
                </ul>
                </div>
                @endif

                <section class="content">

                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('data-guru.store')}}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Nama Kelas</label>
                                    <input type="text" class="form-control" name="nip" value="{{old('nip')}}">
                                    {{-- @error('nip')
                                    <div class="text-danger">{{$message}}
                                    @enderror --}}
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nama Wali Kelas</label>
                                    <input type="text" class="form-control" name="nama_lengkap" value="{{old('nama_lengkap')}}">
                                </div>
                                {{-- <div class="mb-3">
                                    <label class="form-label">No.Telepon</label>
                                    <input type="tel" class="form-control" name="telepon" value="{{old('nip')}}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Jenis Kelamin</label>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki" id="flexCheckDefault">
                                      <label class="form-check-label" for="flexCheckDefault">
                                        Laki-Laki
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" id="flexCheckChecked" checked>
                                      <label class="form-check-label" for="flexCheckChecked">
                                        Perempuan
                                      </label>
                                    </div>
                                    </div> --}}
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>

                    </div>

                </section>
            </div>
        </div>
        <!-- /.content-wrapper -->
        @include('components.footer')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <script src="plugins/jquery/jquery.min.js"></script>

    <script src="dist/js/adminlte.min.js"></script>

</body>
</html>
