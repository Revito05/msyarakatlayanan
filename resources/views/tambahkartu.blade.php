<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu Keluarga</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e0f2f1;
        }

        .container {
            margin-top: 20px;
        }

        .navbar {
            background-color: white;
            padding: 15px;
        }

        .table-container {
            background-color: white;
            border-radius: 10px;
            padding: 15px;
            margin-top: 20px;
        }

        .btn-add {
            background-color: lightgreen;
            color: white;
        }

        .btn-search {
            background-color: rgb(83, 212, 255);
            color: white;
        }

        .btn-preview {
            background-color: rgb(2, 207, 207);
            color: white;
        }

        .btn-edit {
            background-color: rgb(83, 212, 255);
            color: white;
        }

        .btn-delete {
            background-color: red;
            color: white;
        }

        .input-search {
            margin-right: 10px;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('image/p.png') }}" alt="Logo" width="50">
                <h2 class="text-green-700 font-bold mb-0 ms-2">CAPIL</h2>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('admin') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('informasi') }}">Informasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('grafik') }}">Grafik</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Show Data
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Data Penduduk</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="centerDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Pusat
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="centerDropdown">
                            <li class="d-flex"><a class="dropdown-item col" href="/agama">Agama</a><a
                                    class="dropdown-item col" href="/pekerjaan">Pekerjaan</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li class="d-flex"><a class="dropdown-item col" href="/desa">Desa</a><a
                                    class="dropdown-item col" href="/pengguna">Pengguna</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li class="d-flex"><a class="dropdown-item col" href="/dokumen">Dokumen</a><a
                                    class="dropdown-item col" href="/pendidikan">Pendidikan</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li class="d-flex"><a class="dropdown-item col" href="/jnk">Jenis Kelamin</a><a
                                    class="dropdown-item col" href="/penduduk">Penduduk</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li class="d-flex"><a class="dropdown-item col" href="/kk">Kartu Keluarga</a><a
                                    class="dropdown-item col" href="/roles">Roles</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li class="d-flex"><a class="dropdown-item col"
                                    href="/kewarganegaraan">Kewarganegaraan</a><a class="dropdown-item col"
                                    href="/status">Status</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li class="d-flex"><a class="dropdown-item col" href="/layanan">Layanan</a><a
                                    class="dropdown-item col" href="/perkawinan">Status Perkawinan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item d-md-none">
                        <span class="me-2">Alpha</span>
                        <img src="{{ asset('image/p.png') }}" alt="User Image" width="50">
                    </li>
                </ul>
            </div>
            <div class="d-none d-lg-inline-block user-info align-items-center">
                <span class="me-2">Alpha</span>
                <img src="{{ asset('image/p.png') }}" alt="User Image" width="50">
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                <h2>Tambah Kartu Keluarga</h2>
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="noKK" class="form-label">No KK</label>
                        <input type="text" class="form-control" id="noKK"
                            placeholder="Nomor Kartu Keluarga">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" placeholder="Alamat">
                    </div>
                    <div class="mb-3">
                        <label for="rt" class="form-label">RT</label>
                        <input type="text" class="form-control" id="rt" placeholder="RT">
                    </div>
                    <div class="mb-3">
                        <label for="rw" class="form-label">RW</label>
                        <input type="text" class="form-control" id="rw" placeholder="RW">
                    </div>
                    <div class="mb-3">
                        <label for="kodePos" class="form-label">Kode Pos</label>
                        <input type="text" class="form-control" id="kodePos" placeholder="Kode Pos">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <button type="button" class="btn btn-primary">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
