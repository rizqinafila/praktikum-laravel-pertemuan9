<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <title>Hasil Pencarian Kategori</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container mt-5">
            <h1>Hasil Pencarian Kategori</h1>

            <div class="alert alert-info">
                Keyword: <strong>{{ $keyword }}</strong>
            </div>

            @if (count($hasil) > 0)
                <div class="row">
                    @foreach ($hasil as $kategori)
                        <div class="col-md-4 mb-3">
                            <div class="card h-100 border-success">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $kategori['nama'] }}</h5>
                                    <p class="card-text">{{ $kategori['deskripsi'] }}</p>
                                    <span class="badge bg-success">
                                        {{ $kategori['jumlah_buku'] }} Buku
                                    </span>
                                    <br><br>
                                    <a href="/kategori/{{ $kategori['id'] }}" class="btn btn-primary btn-sm">
                                        Detail
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="alert alert-warning">
                    Tidak ada kategori yang cocok dengan keyword <strong>{{ $keyword }}</strong>.
                </div>
            @endif

            <a href="/kategori" class="btn btn-secondary mt-3">Kembali ke Kategori</a>
        </div>
    </body>
</html>