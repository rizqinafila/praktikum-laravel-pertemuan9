<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <title>Daftar Kategori Buku</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container mt-5">
            <h1>Daftar Kategori Buku</h1>

            <div class="mb-3">
                <a href="/kategori/search/programming" class="btn btn-outline-primary btn-sm">Cari Programming</a>
                <a href="/kategori/search/database" class="btn btn-outline-success btn-sm">Cari Database</a>
                <a href="/kategori/search/web" class="btn btn-outline-warning btn-sm">Cari Web</a>
            </div>

            <div class="row">
                @foreach ($kategori_list as $kategori)
                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">{{ $kategori['nama'] }}</h5>
                                <p class="card-text">{{ $kategori['deskripsi'] }}</p>
                                <p>
                                    <span class="badge bg-info">
                                        {{ $kategori['jumlah_buku'] }} Buku
                                    </span>
                                </p>
                                <a href="/kategori/{{ $kategori['id'] }}" class="btn btn-primary btn-sm">
                                    Detail
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </body>
</html>