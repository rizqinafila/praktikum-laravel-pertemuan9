<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <title>Detail Kategori</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container mt-5">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/kategori">Kategori</a></li>
                    <li class="breadcrumb-item active">{{ $kategori['nama'] }}</li>
                </ol>
            </nav>

            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    Detail Kategori
                </div>
                <div class="card-body">
                    <h3>{{ $kategori['nama'] }}</h3>
                    <p>{{ $kategori['deskripsi'] }}</p>
                    <span class="badge bg-info">{{ $kategori['jumlah_buku'] }} Buku</span>
                </div>
            </div>

            <h4>Daftar Buku dalam Kategori Ini</h4>

            <table class="table table-bordered table-striped mt-3">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Judul Buku</th>
                        <th>Pengarang</th>
                        <th>Tahun</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($buku_list as $index => $buku)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $buku['judul'] }}</td>
                            <td>{{ $buku['pengarang'] }}</td>
                            <td>{{ $buku['tahun'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <a href="/kategori" class="btn btn-secondary">Kembali</a>
        </div>
    </body>
</html>