<!DOCTYPE html>
<html>
<head>
    <title>Tambah Barang</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-success text-white">
            <h2 class="text-center">➕ Tambah Barang</h2>
        </div>

        <div class="card-body">

            <form action="http://localhost/inventaris-app/public/barang/store" method="post">

                <div class="mb-3">
                    <label class="form-label">Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jumlah</label>
                    <input type="number" name="jumlah" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Kondisi</label>
                    <input type="text" name="kondisi" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-success">
                    Simpan
                </button>

                <a href="http://localhost/inventaris-app/public/barang" class="btn btn-secondary">
                    Kembali
                </a>

            </form>

        </div>

    </div>

</div>

</body>
</html>